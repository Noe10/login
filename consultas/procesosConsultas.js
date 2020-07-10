$(document).ready(function() {
 
    console.log('jquery is working!');
    
     listarCliente();
     listarCliente2();
    
  
  
    // search key type event
   
  
    $('#task-form').submit(e => {
      e.preventDefault();
      console.log($('#taskId').val());
      
      const postData = {
       
        cliente: $('#cliente').val(),
        id: $('#taskId').val()
      };
  
      const url = 'consultas/cliente_deposito.php';
      
      $.post(url, postData, (response) => {
        console.log(response);
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.n_cuenta}">
                  <td>${task.n_cuenta}</td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.monto} 
                  </a>
                  </td>
                  <td>${task.fecha}</td>
                  
                  </tr>
                `
        });
        $('#tasks').html(template);
    
  
      });
    });

    //formulario 2

    $('#task-form2').submit(e => {
      e.preventDefault();
      console.log($('#taskId').val());
      
      const postData = {
       
        cliente: $('#cliente2').val(),
        id: $('#taskId').val()
      };
  
      const url1 = 'consultas/cliente_retiro.php';
      
      $.post(url1, postData, (response) => {
        console.log(response);
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.n_cuenta}">
                  <td>${task.n_cuenta}</td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.monto} 
                  </a>
                  </td>
                  <td>${task.fecha}</td>
                  
                  </tr>
                `
        });
        $('#tasks1').html(template);
    
  
      });
        
      const url2 = 'consultas/cliente_pago.php';
      $.post(url2, postData, (response) => {
        console.log(response);
        const tasks = JSON.parse(response);
        let template = '';
        tasks.forEach(task => {
          template += `
                  <tr taskId="${task.n_cuenta}">
                  <td>${task.n_cuenta}</td>
                  <td>
                  <a href="#" class="task-item">
                    ${task.monto} 
                  </a>
                  </td>
                  <td>${task.fecha}</td>
                  
                  </tr>
                `
        });
        $('#tasks2').html(template);
    
  
      });

      const url3 ='consultas/cliente-monto.php';
      $.post(url3, postData, (response) => {
        console.log(response);
        const tasks = JSON.parse(response);

          console.log(tasks);
          
        let template = '';
       
          template += `
                <p>Monto S/. ${tasks}  </p>
                `
      
        $('#monto').html(template);
    
  
      });
    });
  
  
  
    function listarCliente() {
      $.ajax({
        url: 'consultas/cliente-list.php',
        type: 'GET',
        success: function(response) {
       
          console.log(response);
          
          const tasks = JSON.parse(response);
          
          tasks.forEach(task => {
            const option = document.createElement('option')
           
            option.value= task.nombre;
            option.innerText= task.nombre;
            $('#cliente').append(option);
            
          });
        
        }
      });
    }
    //Listar Clientes 2 

    function listarCliente2() {
      $.ajax({
        url: 'consultas/cliente-list.php',
        type: 'GET',
        success: function(response) {
       
          console.log(response);
          
          const tasks = JSON.parse(response);
          
          tasks.forEach(task => {
            const option = document.createElement('option')
           
            option.value= task.nombre;
            option.innerText= task.nombre;
            $('#cliente2').append(option);
            
          });
        
        }
      });
    }
  
    // Get a Single Task by Id 
    
  
    // Delete a Single Task
   
  });
  