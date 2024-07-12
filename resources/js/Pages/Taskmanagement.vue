<template>
  <div class="task-management">
    <task-form @taskCreated="fetchTasks" @taskUpdated="fetchTasks"></task-form>
    <task-list :tasks="tasks" @taskCompleted="fetchTasks" @taskDeleted="fetchTasks"></task-list>
  </div>
</template>

<script>
import TaskList from '../components/TaskList.vue';
import TaskForm from '../components/TaskForm.vue';
import axios from 'axios';

export default {
  components: {
    TaskList,
    TaskForm,
  },
  data() {
    return {
      tasks: [],
    };
  },
  methods: {
    fetchTasks() {
      axios.get('/api/tasks')
        .then(response => {
          this.tasks = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
  mounted() {
    this.fetchTasks();
  },
};
</script>

<style scoped>
/* Add your styles here */
</style>
