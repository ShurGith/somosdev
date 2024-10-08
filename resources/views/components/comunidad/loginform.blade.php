<div class="flex flex-col w-full md:w-1/2 xl:w-2/5 2xl:w-2/5 3xl:w-1/3 mx-auto p-8 md:p-10 2xl:p-12 3xl:p-14 bg-[#ffffff] rounded-2xl shadow-xl">
    <div class="flex flex-row gap-3 pb-4">
        <div>
            <img src="{{ asset('images/somosdevslogo.png') }}" width="150" alt="Logo">
        </div>
         <h1 class="text-3xl font-bold text-gray-500 my-auto">SomosDevs</h1>

    </div>
    <div class="text-sm font-light text-gray-400 pb-8 ">Logueate para acceder a todos los servicios.</div>
    <form class="flex flex-col" data-bitwarden-watching="1">
        <div class="pb-2">
            <label for="email" class="block mb-2 text-sm font-medium text-black/80">Email</label>
            <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></span>
                <input type="email" name="email" id="email" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" placeholder="tuemail@tudominio.ext" autocomplete="off">
            </div>
        </div>
        <div class="pb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-black/80">Password</label>
            <div class="relative text-gray-400"><span class="absolute inset-y-0 left-0 flex items-center p-1 pl-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-asterisk"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M12 8v8"></path><path d="m8.5 14 7-4"></path><path d="m8.5 10 7 4"></path></svg></span>
                <input type="password" name="password" id="password" placeholder="••••••••••" class="pl-12 mb-2 bg-gray-50 text-gray-600 border focus:border-transparent border-gray-300 sm:text-sm rounded-lg ring ring-transparent focus:ring-1 focus:outline-none focus:ring-gray-400 block w-full p-2.5 rounded-l-lg py-3 px-4" autocomplete="new-password">
            </div>
        </div>
        <button type="submit" class="w-full text-white bg-violet-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-6">Login</button>
        <div class="text-sm font-light text-[#6B7280] ">¿No tienes cuenta?<a href="#" class="font-medium text-violet-700 hover:underline">Registrate aquí</a>

        </div>
    </form>
    <div class="relative flex py-8 items-center">
        <div class="flex-grow border-t border-[1px] border-gray-200"></div> <span class="flex-shrink mx-4 font-medium text-gray-500">O Bien</span>
        <div class="flex-grow border-t border-[1px] border-gray-200"></div>
    </div>
    <form>
        <div class="flex flex-row gap-2 justify-center">
            <button class="cursor-not-allowed flex flex-row w-32 gap-2 bg-gray-600 p-2 rounded-md text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github">
                    <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                </svg> <span class="font-medium mx-auto">Github</span>
            </button>
            <button class="cursor-not-allowed flex flex-row w-32 gap-2 bg-gray-600 p-2 rounded-md text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter">
                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                </svg> <span class="font-medium mx-auto">Twitter</span>
            </button>
        </div>
        <div id="avisoLogin" class="hidden bg-red-500 text-center py-4 border mb-4 rounded text-xl font-bold text-white">
            <p>Estamos en el proceso de implementado de estas opciones</p>
        </div>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
  const aviso =  document.querySelector('#avisoLogin'),
  botones = document.querySelectorAll('.cursor-not-allowed')

  botones.forEach(boton => {
    boton.addEventListener('mouseover', () => {
        aviso.classList.remove('hidden')
        })
    boton.addEventListener('mouseleave', ()=>{
        setTimeout(() => {
            aviso.classList.add('hidden')
        }, 3000);
    })

  })

})

</script>
