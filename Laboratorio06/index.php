<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Clínica | Est. Salud</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-100 p-6">
<!-- Barra de Navegación -->
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Est. de Salud</span>
    </a>
    <div class="flex items-center space-x-6 rtl:space-x-reverse">
      <p class="block font-sans text-sm antialiased font-medium leading-normal text-inherit">
        N° H.C.
      </p>
      <p class="block font-sans text-sm antialiased font-medium leading-normal text-inherit">
        Usuario
      </p>
      <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="focus:outline-none">
          <img src="user.png" alt="Profile" class="w-8 h-8 rounded-full">
        </button>
        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
          <div class="py-1">
            <a onclick="mostrarSeccion('micuenta')" href="#" class="flex items-center block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">
              <i class="fas fa-user mr-2"></i> Mi cuenta
            </a>
            <a onclick="mostrarSeccion('editarcuenta')" href="#" class="flex items-center block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">
              <i class="fas fa-edit mr-2"></i> Editar cuenta
            </a>
            <a onclick="mostrarSeccion('contraseña')" href="#" class="flex items-center block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">
              <i class="fas fa-key mr-2"></i> Cambiar contraseña
            </a>
            <a onclick="mostrarSeccion('ayuda')" href="#" class="flex items-center block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">
              <i class="fas fa-question-circle mr-2"></i> Ayuda
            </a>
            <div class="border-t border-gray-100 dark:border-gray-600"></div>
            <a href="index.php" class="flex items-center block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600">
              <i class="fas fa-sign-out-alt mr-2"></i> Salir
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<nav class="bg-gray-50 dark:bg-gray-700">
  <div class="max-w-screen-xl px-4 py-3 mx-auto">
    <div class="flex items-center">
      <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
        <li>
          <a href="#" class="text-gray-900 dark:text-white hover:underline">Personas</a>
        </li>
        <li>
          <a onclick="mostrarSeccion('historiaclinica')" href="#" class="text-gray-900 dark:text-white hover:underline" >Historias Clínicas</a>
        </li>
        <li>
          <a onclick="mostrarSeccion('triaje')" href="#" class="text-gray-900 dark:text-white hover:underline">Triajes</a>
        </li>
        <li>
          <a onclick="mostrarSeccion('citas')" href="#" class="text-gray-900 dark:text-white hover:underline">Citas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Secciones -->
    <div id="personas" class="mt-6 hidden">
        <h2 class="text-2xl font-bold mb-4">Personas</h2>
        <p>Aquí muestras personas</p>
    </div>

    <div id="historiaclinica" class="mt-6 hidden">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Selecciona tu Ubicación</h2>
        <form id="ubicacionForm">
          <div class="mb-4">
            <label for="departamento" class="block text-gray700"
              >Departamento</label
            >
            <select
              id="departamento"
              name="departamento"
              class="w-full mt-1 p-2 border border-gray-300 rounded-md"
            >
              <option value="">Seleccione un departamento</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="provincia" class="block text-gray700">Provincia</label>
            <select
              id="provincia"
              name="provincia"
              class="w-full mt-1 p-2 border border-gray-300 rounded-md"
            >
              <option value="">Seleccione una provincia</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="distrito" class="block text-gray700">Distrito</label>
            <select
              id="distrito"
              name="distrito"
              class="w-full mt-1 p-2 border border-gray-300 rounded-md"
            >
              <option value="">Seleccione un distrito</option>
            </select>
          </div>
        </form>
      </div>
    </div>

    <div id="triaje" class="mt-6 hidden">
        <h2 class="text-2xl font-bold mb-4">Triaje</h2>
        <p>Aquí muestras los triajes</p>
    </div>

    <div id="citas" class="mt-6 hidden">
        <h2 class="text-2xl font-bold mb-4">Citas</h2>
        <p>Aquí puedes ver las citas</p>
    </div>

    <div id="micuenta" class="mt-6 hidden">
        <h2 class="text-2xl font-bold mb-4">Mi Cuenta</h2>
        <p>Aquí puedes gestionar mi cuenta</p>
    </div>

    <div id="editarcuenta" class="mt-6 hidden">
        <h2 class="text-2xl font-bold mb-4">Editar mi Cuenta</h2>
        <p>Aquí puedes gestionar la edición de mi cuenta</p>
    </div>

    <div id="contraseña" class="mt-6 hidden">
        <h2 class="text-2xl font-bold mb-4">Contraseña</h2>
        <p>Aquí puedes se gestiona las contraseñas</p>
    </div>

    <div id="ayuda" class="mt-6 hidden">
        <h2 class="text-2xl font-bold mb-4">Ayuda</h2>
        <p>Aquí puedes gestionar la ayuda</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="historiaclinica.js"></script>
    
</body>
</html>
