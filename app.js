$(function(){
    let edit = false;

   $('#provee-result').hide();

   fetchTask();

   $('#search').keyup(function(){
    if($('#search').val()){
        let search = $('#search').val();
        $.ajax({
            url: 'provee-buscar.php',
            type: 'POST', 
            data: { search: search },
            success: function(response){
                console.log(response)
               let provee_search = JSON.parse(response);
               let template = '';
                provee_search.forEach(element => {
                    template += `<li>
                   ${element.empresa}     /     ${element.categoria}     /     ${element.contacto}     /     ${element.telefono}     /     ${element.direccion}
                    </li>`
                });

                $('#container').html(template);
                $('#provee-result').show();
            }
        });
    }
   
});
    $('#proveedores-form').submit(function (e) {
        const postData = {
            empresa: $('#empresa').val(),
            categoria: $('#categoria').val(),
            contacto: $('#contacto').val(),
            numero: $('#numero').val(),
            telefono: $('#telefono').val(),
            correo: $('#correo').val(),
            direccion: $('#direccion').val(),
            id_pro: $('#taskId').val()
        };

        let url = edit === false ? 'provee-add.php' : 'provee-edit.php';
        
        $.post(url, postData, function (response){
            
            fetchTask();
            $('#proveedores-form').trigger('reset');
        });
        e.preventDefault();
    });



    function fetchTask(){
        $.ajax({
            url: 'provee-lista.php',
            type: 'GET',
            success: function (response) {
                let tasks = JSON.parse(response)
                let template = '';
                tasks.forEach(employees => {
                    template += `
                    <tr taskId = "${employees.id_pro}"> 
                        <td> ${employees.id_pro}</td>
                        <td> 
                        <a href="#" class="task-item">${employees.empresa}</a>
                        </td>
                        <td> ${employees.categoria}</td>
                        <td> ${employees.contacto}</td>
                        <td> ${employees.numero}</td>
                        <td> ${employees.telefono}</td>
                        <td> ${employees.correo}</td>
                        <td> ${employees.direccion}</td>
                        <td> 
                        <button class="btn btn-secondary task-item" id="task-item"><i class="fas fa-marker"></i> </button>
                    
                        <button class="btn btn-danger" id="provee-eliminar"> <i class="fas fa-trash-alt"></i> </button>
                        </td>
                    </tr>
                    `                    
                })
                $('#list_provee').html(template);
            }
        })
    }
    
    $(document).on('click', '#provee-eliminar', function(){
        if(confirm('¿Estas seguro de eliminar tarea?')) {
            let element = $(this)['0'].parentElement.parentElement;
            let id_pro = $(element).attr('taskId');
            $.post('provee-eliminar.php', {id_pro}, function(response){
                fetchTask();
            })
        }
      
    })

    $(document).on('click', '.task-item', function(){
        let element = $(this)[0].parentElement.parentElement;
        let id_pro = $(element).attr('taskId');
        $.post('provee-single.php', {id_pro}, function (response){
           const task = JSON.parse(response)
           $('#empresa').val(task.empresa);
           $('#categoria').val(task.categoria);
           $('#contacto').val(task.contacto);
           $('#numero').val(task.numero);
           $('#telefono').val(task.telefono);
           $('#correo').val(task.correo);
           $('#direccion').val(task.direccion);
           $('#taskId').val(task.id_pro);
           edit = true;
        }) 
        
    });
});