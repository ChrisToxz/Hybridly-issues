<script setup lang="ts">
const $props = defineProps<{
  users: Table<{
    id: number
    full_name: string
  }>
}>()

const users = useTable($props, 'users')
</script>

<template>
  <tr v-for="{ key, record, actions } in users.records" :key="key">
    <!-- Data columns -->
    <td v-for="column in users.columns" :key="column.name" v-text="record[column.name]" />

    <!-- Action column -->
    <td>
      <button v-for="action in actions" :key="action.name" @click="action.execute()" v-text="action.label" />
    </td>
  </tr>
</template>
