<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  consejos: Array
})
</script>

<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Consejos de Participación Ciudadana</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <div v-for="consejo in consejos" :key="consejo.id" class="p-4 bg-white shadow rounded-lg">
        <h2 class="font-semibold mb-2">{{ consejo.nombre }}</h2>
        <Link
          :href="route('consejos.show', consejo.id)"
          class="px-3 py-1 bg-gray-600 text-white rounded hover:bg-black"
        >
          Ver integrantes
        </Link>
      </div>
    </div>
  </div>
</template>
