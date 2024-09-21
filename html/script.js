document.getElementById("addTaskBtn").addEventListener("click", function() {
    const taskInput = document.getElementById("taskInput");
    const taskList = document.getElementById("taskList");
    const message = document.getElementById("message");

    if (taskInput.value.trim() !== "") {
        const li = document.createElement("li");
        li.textContent = taskInput.value;

        const deleteBtn = document.createElement("button");
        deleteBtn.textContent = "Eliminar";
        deleteBtn.className = "deleteBtn";
        deleteBtn.onclick = function() {
            taskList.removeChild(li);
            message.textContent = `"${taskInput.value}" ha sido eliminada.`;
        };

        li.appendChild(deleteBtn);
        taskList.appendChild(li);
        message.textContent = `"${taskInput.value}" ha sido agregada.`;
        taskInput.value = "";
    } else {
        message.textContent = "Por favor, ingresa una tarea.";
    }

    // Limpiar mensaje después de 3 segundos
    setTimeout(() => {
        message.textContent = "";
    }, 3000);
});
