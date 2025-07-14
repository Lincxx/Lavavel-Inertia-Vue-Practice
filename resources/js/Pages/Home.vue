<script setup>
import { ref, watch } from "vue";
import PaginationLinks from "./Components/PaginationLinks.vue";
import { router } from "@inertiajs/vue3";
import { debounce } from "lodash";

const props = defineProps({
  users: Object,
  searchTerm: String,
  can: Object,
});

const search = ref(props.searchTerm);


// Format date
const getDate = (date) =>
  new Date(date).toLocaleDateString("en-us", {
    year: "numeric",
    month: "long",
    day: "numeric",
  });
</script>

<template>
  <Head :title="` | ${$page.component}`" />


    <table>
      <thead>
        <tr class="bg-slate-300">
          <th>Avatar</th>
          <th>Name</th>
          <th>Email</th>
          <th>Registration Date</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="user in users.data" :key="user.id">
          <td>
            <img
              class="avatar"
            />
          </td>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
          <td>{{ getDate(user.created_at) }}</td>
        </tr>
      </tbody>
    </table>

  
    <div>
      <PaginationLinks :paginator="users" />
    </div> 
</template>