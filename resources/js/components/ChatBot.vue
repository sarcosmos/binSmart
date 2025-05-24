<template>
  <div class="fixed bottom-4 right-4 z-[9999]">
    <!-- Botón flotante para mostrar el chat cuando está minimizado -->
    <div
      v-if="minimizado"
      @click="minimizado = false"
      class="bg-green-600 text-white p-3 rounded-full shadow-lg cursor-pointer flex items-center gap-2"
    >
      <BotIcon class="w-5 h-5" />
      <span class="font-semibold">Chat</span>
    </div>

    <!-- Ventana de chat cuando está abierto -->
    <div
      v-else
      class="w-80 bg-white border border-gray-300 rounded-xl shadow-lg overflow-hidden"
    >
      <!-- Encabezado del chat -->
      <div class="bg-green-600 text-white p-3 flex items-center justify-between">
        <div class="flex items-center gap-2">
          <BotIcon class="w-5 h-5" />
          <span class="font-semibold">SmartBinBot</span>
        </div>
        <!-- Botón para minimizar -->
        <button
          @click="minimizado = true"
          class="text-white text-xl hover:text-gray-200 leading-none"
          title="Minimizar"
        >−</button>
      </div>

      <!-- Mensajes -->
      <div class="h-64 overflow-y-auto p-3 space-y-2">
        <div
          v-for="(msg, index) in messages"
          :key="index"
          class="text-sm"
        >
          <div
            :class="msg.isBot ? 'text-left text-green-800' : 'text-right text-gray-700'"
          >
            {{ msg.text }}
          </div>
        </div>
      </div>

      <!-- Entrada de texto -->
      <div class="p-2 border-t">
        <input
          v-model="userInput"
          @keydown.enter="sendMessage"
          placeholder="Escribe tu mensaje..."
          class="w-full p-2 text-sm border rounded"
        />
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { BotIcon } from 'lucide-vue-next';

const messages = ref([
  {
    text: '¡Hola! Soy SmartBinBot 🤖. Pregúntame sobre el sistema de residuos o las vistas del sistema.',
    isBot: true
  }
]);

const userInput = ref('');
const minimizado = ref(true);

function sendMessage() {
  if (!userInput.value.trim()) return;

  const userMsg = userInput.value.trim();
  messages.value.push({ text: userMsg, isBot: false });

  let response = 'Lo siento, no entiendo tu mensaje. ¿Puedes intentar con otra pregunta?';
  const msg = userMsg.toLowerCase();

  if (msg.includes('trash')) {
    response = 'La vista "Trash" identifica la dirección de las canecas inteligentes.';
  } else if (msg.includes('dashboard')) {
    response = 'La vista "Dashboard" muestra gráficas generadas con los datos recopilados por los sensores.';
  } else if (msg.includes('informacion') || msg.includes('información')) {
    response = 'La vista "Información" muestra los detalles generales del proyecto y su funcionamiento.';
  } else if (msg.includes('hola')) {
    response = '¡Hola! ¿En qué puedo ayudarte? Puedes preguntarme por las vistas como "trash", "dashboard" o "informacion".';
  }

  setTimeout(() => {
    messages.value.push({ text: response, isBot: true });
  }, 500);

  userInput.value = '';
}
</script>



