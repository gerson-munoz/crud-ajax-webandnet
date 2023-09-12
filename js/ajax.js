$(function(){
    $("#task-result").hide()
    fetchTasks()
    let update = false

    //creando evento para buscar un dato
    $("#search").keyup(()=>{
        if($("#search").val()){
            let search = $("#search").val();
            $.ajax({
                url: "../controller/searchDate.php",
                data: { search },
                type: "POST",
                success: function (response) {
                    if(!response.error) {
                        let tasks = JSON.parse(response);
                        let template = ``;
                        tasks.forEach(task => {
                            template += `<li class="task-item">${task.nombre} - ${task.apellido}</li>`//interpolación
                        });
                        $("#task-result").show();
                        $("#container").html(template);
                    }
                }
            })
        }
    })

    //creando evento para registrar datos
    $("#task-form").submit(e => {
        e.preventDefault();
        const postData = {
            nombre: $("#nombre").val(),
            apellido: $("#apellido").val(),
            celular: $("#celular").val(),
            genero: $("#genero").val(),
            id: $("#taskId").val(),
        }

        const url = update === false ? "../controller/create.php" : "../controller/updateconex.php";

        $.ajax({
            url,
            data: postData,
            type: "POST",
            success: function (response) {
                if(!response.error){
                    fetchTasks();
                    $("#task-form").trigger("reset")
                }
            }
        })
    })

    //creando evento para listar datos
    function fetchTasks() {
        $.ajax({
            url: "../controller/list.php",
            type: "GET",
            success: function(response){
                const tasks = JSON.parse(response);
                let template = ``;
                tasks.forEach(task => 
                    {
                        template += `
                        <tr taskId="${task.id}">
                            <td>${task.id}</td>
                            <td>${task.nombre}</td>
                            <td>${task.apellido}</td>
                            <td>${task.celular}</td>
                            <td>${task.genero}</td>
                            <td>
                                <button class="btn btn-warning task-item">Modificar</button>
                                <button class="btn btn-danger task-delete">Eliminar</button>
                            </td>
                        </tr>
                        `;
                    })
                $("#tasks").html(template);
            }
        })
    }

    //creando evento para eliminar un dato
    $(document).on("click", ".task-delete", ()=>{
        if(confirm("¿Seguro que quieres eliminar este registro?")){
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr("taskId")
            $.post("../controller/delete.php", { id }, () => {
                fetchTasks()
            })
        }
    })

    //creando evento para modificar un dato
    $(document).on("click", ".task-item", ()=>{
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr("taskId")
        let url = "../controller/getTask.php"
        $.ajax({
            url,
            data: {id},
            type: "POST",
            success: function(response){
                if(!response.error){
                    const task = JSON.parse(response)
                    $("#nombre").val(task.nombre)
                    $("#apellido").val(task.apellido)
                    $("#celular").val(task.celular)
                    $("#genero").val(task.genero)
                    $("#taskId").val(task.id)
                    update = true
                }
            }
        })
    })
})