function delete_record(workspace_id) {
    if(confirm("¿Estás seguro de querer eliminar este registro?\nTodos los registros de otras tablas relacionadas con este se eliminarán. Esta acción no se puede deshacer.")){
        window.location.href = "Workspace/delete.php?workspace_id="+workspace_id;
    }
}

function delete_task(task_id, workspace_id) {
    if(confirm("¿Estás seguro de querer eliminar este registro?\nEsta acción no se puede deshacer.")){
        window.location.href = "Task/delete.php?task_id="+task_id+"&workspace_id="+workspace_id;
    }
}
