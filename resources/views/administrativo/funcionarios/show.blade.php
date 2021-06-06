@extends('layout.v1.default')

@section('title.page', 'Administrativo - Funcionários')
@section('menu1', 'Administrativo')
@section('menu2', 'Funcionários / Lista')
@section('menu_principal')
@section('menu_principal')
<nav class="side-nav">
    <a href="{{route('home')}}" class="intro-x flex items-center pl-5 pt-4">
        <img class="w-6" src="dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> Click<span class="font-medium">Manager</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="javascript:;.html" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Administrativo 
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="side-menu__sub-open">
                <li>
                    <a href="{{route('empresa')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="briefcase"></i> </div>
                        <div class="side-menu__title"> Empresa </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('funcionarios')}}" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                        <div class="side-menu__title"> Funcionários </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                <div class="side-menu__title">
                    Inventário
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('inventario.lista')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                        <div class="side-menu__title"> Listagem </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="side-nav__devider my-6"></li>
    </ul>
</nav>
@endsection    
@endsection
@section('content')

<h2 class="intro-y text-lg font-medium mt-10">
    Lista de Funcionários
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#basic-modal-preview" class="btn btn-primary">Adicionar Novo Funcionário</a> </div> <!-- END: Modal Toggle -->
         <!-- BEGIN: Modal Content --> 
         <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true"> 
             <div class="modal-dialog"> 
                 <div class="modal-content"> 
                     <div class="modal-body p-10 text-center">
                        <form action="">
                            <div class="mt-3 col-span-2">
                                <label for="empresa_endereco" class="form-label w-full flex flex-col sm:flex-row">Nome Completo </label> 
                                <input type="text" class="form-control col-span-4" placeholder="Nome Completo">
                            </div>
                            <div class="mt-3 col-span-2">
                                <label for="empresa_endereco" class="form-label w-full flex flex-col sm:flex-row">CPF</label> 
                                <input type="text" class="form-control col-span-4" placeholder="CPF">
                            </div>
                            <a href="/empresaedit">
                                <input type="button" value="Salvar" class="btn btn-primary mt-5">
                            </a>
                        </form>
                     </div> 
                 </div> 
            </div> 
        </div> <!-- END: Modal Content --> 
        <!-- DIV Somente para dar a margem de 600PX e fazer que o Search fique na direita da pagina-->
        <div class="hidden md:block mx-auto text-gray-600"></div>
        <!-- END DIV Somente para dar a margem de 600PX e fazer que o Search fique na direita da pagina-->
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input type="text" class="form-control w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
            </div>
        </div>
    </div>
    <!-- BEGIN: Users Layout -->
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/aquino.jpg">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">Felipe Aquino</a> 
                    <div class="text-gray-600 text-xs mt-0.5">SysAdmin</div>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <a href="{{route('funcionarios.edit')}}"><button class="btn btn-primary py-1 px-2 mr-2">Editar</button></a>
                    <a href="{{route('funcionarios.profile')}}" ><button class="btn btn-outline-secondary py-1 px-2">Visualizar Perfil</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">Leonardo DiCaprio</a> 
                    <div class="text-gray-600 text-xs mt-0.5">DevOps Engineer</div>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <button class="btn btn-primary py-1 px-2 mr-2">Editar</button>
                    <button class="btn btn-outline-secondary py-1 px-2">Visualizar Perfil</button>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">Robert De Niro</a> 
                    <div class="text-gray-600 text-xs mt-0.5">DevOps Engineer</div>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <button class="btn btn-primary py-1 px-2 mr-2">Editar</button>
                    <button class="btn btn-outline-secondary py-1 px-2">Visualizar Perfil</button>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">Angelina Jolie</a> 
                    <div class="text-gray-600 text-xs mt-0.5">Frontend Engineer</div>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <button class="btn btn-primary py-1 px-2 mr-2">Editar</button>
                    <button class="btn btn-outline-secondary py-1 px-2">Visualizar Perfil</button>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">Denzel Washington</a> 
                    <div class="text-gray-600 text-xs mt-0.5">DevOps Engineer</div>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <button class="btn btn-primary py-1 px-2 mr-2">Editar</button>
                    <button class="btn btn-outline-secondary py-1 px-2">Visualizar Perfil</button>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">Johnny Depp</a> 
                    <div class="text-gray-600 text-xs mt-0.5">DevOps Engineer</div>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <button class="btn btn-primary py-1 px-2 mr-2">Editar</button>
                    <button class="btn btn-outline-secondary py-1 px-2">Visualizar Perfil</button>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-5">
                <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                </div>
                <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                    <a href="" class="font-medium">Kevin Spacey</a> 
                    <div class="text-gray-600 text-xs mt-0.5">DevOps Engineer</div>
                </div>
                <div class="flex mt-4 lg:mt-0">
                    <button class="btn btn-primary py-1 px-2 mr-2">Editar</button>
                    <button class="btn btn-outline-secondary py-1 px-2">Visualizar Perfil</button>
                </div>
            </div>
        </div>
    </div>

@endsection