<template>
  <div>
    <h1>Create/Edit Task</h1>
    <form @submit.prevent="submitForm">
      <div>
        <label for="title">Title</label>
        <input id="title" v-model="task.title" type="text" required />
      </div>
      <div>
        <label for="description">Description</label>
        <textarea id="description" v-model="task.description" required></textarea>
      </div>
      <div>
        <label for="status">Status</label>
        <select id="status" v-model="task.status" required>
          <option value="pending">Pending</option>
          <option value="completed">Completed</option>
        </select>
      </div>
      <button type="submit">{{ task.id ? 'Update' : 'Create' }} Task</button>
    </form>
  </div>
</template>

<script>
import { ref } from 'vue';
import axios from 'axios';

export default {
  props: {
    taskId: {
      type: Number,
      default: null,
    },
  },
  setup(props) {
    const task = ref({
      title: '',
      description: '',
      status: 'pending',
    });

    const fetchTask = async () => {
      if (props.taskId) {
        const response = await axios.get(`/api/tasks/${props.taskId}`);
        task.value = response.data;
      }
    };

    const submitForm = async () => {
      if (task.value.id) {
        await axios.put(`/api/tasks/${task.value.id}`, task.value);
      } else {
        await axios.post('/api/tasks', task.value);
      }
      task.value = {
        title: '',
        description: '',
        status: 'pending',
      };
    };

    fetchTask();

    return {
      task,
      submitForm,
    };
  },
};
</script>

<style scoped>
/* Add any necessary styles */
</style>
