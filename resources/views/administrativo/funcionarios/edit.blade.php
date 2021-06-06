@extends('layout.v1.default')

@section('title.page', 'Administrativo - Funcionários')
@section('menu1', 'Administrativo')
@section('menu2', 'Funcionários / dados-pessoais')
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
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/aquino.jpg">
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Felipe Aquino</div>
                <div class="text-gray-600">SysAdmin</div>
            </div>
        </div>
        <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Contatos</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> contato@felipeaquino.eti.br </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> @akino0o </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="phone" class="w-4 h-4 mr-2"></i> +55 (21) 98272-1520 </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <form class="grid grid-cols-12 mt-1"> 
            <input type="text" class="form-control col-span-6" placeholder="Felipe da Silva Aquino">
            <input type="text" class="form-control col-span-4" placeholder="Aquino">
            <input type="text" class="form-control col-span-2" placeholder="161.088.377-21">
            <div class="mt-3 col-span-2">
                <label for="empresa_endereco" class="form-label w-full flex flex-col sm:flex-row">SEXO</label> 
                <select class="tail-select w-full"> 
                    <option value="FEMININO">FEMININO</option> 
                    <option selected value="MASCULINO">MASCULINO</option>
                </select> 
            </div>

            <div class="relative w-70 mt-3 px-3 col-span-3"> 
                <label for="empresa_endereco" class="form-label w-full flex flex-col sm:flex-row">Data de Nascimento </label> 
                <div class="absolute rounded-l w-10 h-10 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4"> 
                    <i data-feather="calendar" class="w-4 h-4"></i> 
                </div> 
                <input value="08/08/1996" type="text" class="datepicker form-control h-10 pl-12" data-single-mode="true"> 
            </div> 

            <div class="mt-3 col-span-2">
            <label for="empresa_endereco" class="form-label w-full flex flex-col sm:flex-row">Telefone Residencial </label> 
            <input type="text" class="form-control col-span-4" placeholder="(21) 0000-0000">
            </div>
            
            <div class="mt-3 col-span-2 px-3">
                <label for="empresa_endereco" class="form-label w-full flex flex-col sm:flex-row">Telefone Celular </label> 
                <input type="text" class="form-control col-span-4" placeholder="(21) 98272-1520">
            </div>

            <div class="mt-3 col-span-3 px-3">
                <label class="form-label w-full flex flex-col sm:flex-row">E-mail</label> 
                <input type="email" class="form-control col-span-4" placeholder="contato@felipeaquino.eti.br">
            </div>

            <div class="mt-3 col-span-3">
                <label class="form-label w-full flex flex-col sm:flex-row">Endereço</label> 
                <input type="email" class="form-control col-span-6" placeholder="Endereço Completo">
            </div>
            <div class="mt-3 col-span-1 px-2">
                <label class="form-label w-full flex flex-col sm:flex-row">Número</label> 
                <input type="email" class="form-control" placeholder="Nun">
            </div>
            <div class="mt-3 col-span-2">
                <label class="form-label w-full flex flex-col sm:flex-row">Complemento</label> 
                <input type="email" class="form-control" placeholder="Completo">
            </div>
            <div class="mt-3 col-span-2 px-2">
                <label class="form-label w-full flex flex-col sm:flex-row">Bairro</label> 
                <input type="email" class="form-control" placeholder="Bairro">
            </div>
            <div class="mt-3 col-span-2">
                <label class="form-label w-full flex flex-col sm:flex-row">Cidade</label> 
                <input type="email" class="form-control" placeholder="Bairro">
            </div>
            <div class="mt-3 col-span-2">
                <label class="form-label w-full flex flex-col sm:flex-row">Estado</label> 
                <select class="tail-select w-full"> 
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>

                </select> 
            </div>


            <a href="">
                <input type="button" value="Salvar" class="btn btn-primary mt-5">
            </a>

        </form> <br>
</div>
@endsection