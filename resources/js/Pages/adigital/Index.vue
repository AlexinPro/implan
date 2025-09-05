<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Archivo Digital</h1>
 <div className="flex justify-between items-center mb-4">
        <button
          className="px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-black focus:outline-none"
        >
          + Nuevo expediente
        </button>
      </div>
    <!-- Botones principales -->
    <div class="grid grid-cols-2 gap-4">
      <!-- Botón Consejos -->
      <Link
        :href="route('consejos.index')"
        class="flex items-center justify-center p-4 bg-gray-600 text-white rounded-lg hover:bg-black"
      >
        <!-- icono con heroicons -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2a3 3 0 00-5.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2a3 3 0 015.356-1.857M12 4a3 3 0 110 6 3 3 0 010-6z" />
        </svg>
        Consejos
      </Link>
    </div>
  </div>
</template>
