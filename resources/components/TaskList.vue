<template>
  <div>
    <h1>Task List</h1>
    <div v-if="tasks.length">
      <ul>
        <li v-for="task in tasks" :key="task.id">
          {{ task.title }} - {{ task.status }}
          <button @click="editTask(task)">Edit</button>
          <button @click="deleteTask(task.id)">Delete</button>
          <button @click="toggleStatus(task)">{{ task.status === 'pending' ? 'Complete' : 'Undo' }}</button>
        </li>
      </ul>
    </div>
    <div v-else>
      <p>No tasks found.</p>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
  setup() {
    const tasks = ref([]);

    const fetchTasks = async () => {
      const response = await axios.get('/api/tasks');
      tasks.value = response.data;
    };

    const editTask = (task) => {
      // handle edit task
    };

    const deleteTask = async (id) => {
      await axios.delete(`/api/tasks/${id}`);
      fetchTasks();
    };

    const toggleStatus = async (task) => {
      task.status = task.status === 'pending' ? 'completed' : 'pending';
      await axios.put(`/api/tasks/${task.id}`, task);
      fetchTasks();
    };

    onMounted(fetchTasks);

    return {
      tasks,
      editTask,
      deleteTask,
      toggleStatus,
    };
  },
};
</script>

<style scoped>
/* Add any necessary styles */
</style>
