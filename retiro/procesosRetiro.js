$(document).ready(function() {
  // Global Settings
  let edit = false;

  // Testing Jquery
  console.log('jquery is working!');
   fetchTasks();
   listarCliente();
  $('#task-result').hide();


  // search key type event
  $('#search').keyup(function() {
    if($('#search').val()) {
      let search = $('#search').val();
     
      
      $.ajax({
        url: 'retiro/retiro-search.php',
        data: {search},
        type: 'POST',
        success: function (response) {
          
        
          
          if(!response.error) {
            console.log(response);
            
            let tasks = JSON.parse(response);
            
            
            let template = '';
            tasks.forEach(task => {
              template += `
                     <li><a href="#" class="task-item">${task.cliente}</a></li>
                    ` 
            });
            $('#task-result').show();
            $('#container').html(template);
           
          }
        } 
      })
    }
  });

  $('#task-form').submit(e => {
    e.preventDefault();
    console.log($('#taskId').val());
    
    const postData = {
      fecha: $('#fecha').val(),
      monto: $('#monto').val(),
      cliente: $('#cliente').val(),
      id: $('#taskId').val()
    };

    const url = edit === false ? 'retiro/retiro-add.php' : 'retiro/retiro-edit.php';
    
    console.log(edit);
    
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      
      edit = false;
      $('#task-form').trigger('reset');

      fetchTasks();

    });
  });

  // Fetching Tasks
  function fetchTasks() {
    $.ajax({
      url: 'retiro/retiro-list.php',
      type: 'GET',
      success: function(response) {
     
        console.log(response);
        
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.cod_ret}">
                  <td>${task.cod_ret}</td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.fecha} 
                  </a>
                  </td>
                  <td>${task.monto}</td>
                  <td>${task.cliente}</td>
                  <td>
                    <button class="task-delete btn btn-danger">
                     Delete 
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#tasks').html(template);
      }
    });
  }
  //listar Clientes

  function listarCliente() {
    $.ajax({
      url: 'retiro/cliente-list.php',
      type: 'GET',
      success: function(response) {
     
        console.log(response);
        
        const tasks = JSON.parse(response);
        
        tasks.forEach(task => {
          const option = document.createElement('option')
          option.value= task.n_cuenta;
          option.innerText= task.n_cuenta;
          $('#cliente').append(option);
          
        });
      
      }
    });
  }

  // Get a Single Task by Id 
  $(document).on('click', '.task-item', (e) => {
    console.log('editndo')
    const element = $(this)[0].activeElement.parentElement.parentElement;
    const id = $(element).attr('taskId');
    console.log(id);
    
    $.post('retiro/retiro-single.php', {id}, (response) => {
     
      
      const task = JSON.parse(response);
      $('#fecha').val(task.fecha);
      $('#monto').val(task.monto);
      $('#cliente').val(task.cliente);
      $('#taskId').val(task.cod_ret);

      edit = true;
      console.log(edit);
      
    });
    e.preventDefault();
  });

  // Delete a Single Task
  $(document).on('click', '.task-delete', (e) => {
    if(confirm('Are you sure you want to delete it?')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('taskId');
      console.log(id);
      
      $.post('retiro/retiro-delete.php', {id}, (response) => {
        console.log(response);
        
        fetchTasks();
      });
    }
  });
});
