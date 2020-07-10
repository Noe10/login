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
        url: 'deposito/deposito-search.php',
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

    const url = edit === false ? 'deposito/deposito-add.php' : 'deposito/deposito-edit.php';
    
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
      url: 'deposito/deposito-list.php',
      type: 'GET',
      success: function(response) {
     
        console.log(response);
        
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.cod_dep}">
                  <td>${task.cod_dep}</td>
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
      url: 'deposito/cliente-list.php',
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
    
    $.post('deposito/deposito-single.php', {id}, (response) => {
     
      
      const task = JSON.parse(response);
      $('#fecha').val(task.fecha);
      $('#monto').val(task.monto);
      $('#cliente').val(task.cliente);
      $('#taskId').val(task.cod_dep);

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
      
      $.post('deposito/deposito-delete.php', {id}, (response) => {
        console.log(response);
        
        fetchTasks();
      });
    }
  });
});
