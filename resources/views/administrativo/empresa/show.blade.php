@extends('layout.v1.default')

@section('title.page', 'Administrativo - Empresa')
@section('menu1', 'Administrativo')
@section('menu2', 'Empresa / Visualizar')
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
                    <a href="{{route('empresa')}}" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-feather="briefcase"></i> </div>
                        <div class="side-menu__title"> Empresa </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('funcionarios')}}" class="side-menu">
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
<div class="col-span-12 mt-8">
    <form class="validate-form"> 
        <div class="input-form"> 
             <label for="empresa_nome_fantasia" class="form-label w-full flex flex-col sm:flex-row"> Nome Fantasia </label> 
             <input id="empresa_nome_fantasia" type="text" name="empresa_nome_fantasia" class="form-control" placeholder="Nome Fantasia" minlength="2" disabled> 
        </div>
        <div class="input-form mt-4"> 
            <label for="empresa_razao_social" class="form-label w-full flex flex-col sm:flex-row"> Razão Social </label> 
            <input id="empresa_razao_social" type="text" name="empresa_razao_social" class="form-control" placeholder="Nome Fantasia" minlength="2" disabled> 
        </div> 
        <div class="input-form mt-4"> 
        <label for="empresa_cnpj" class="form-label w-full flex flex-col sm:flex-row"> CNPJ </label> 
        <input id="empresa_cnpj" type="text" name="empresa_cnpj" class="form-control" placeholder="CNPJ" minlength="2" disabled> 
        </div>
        <div class="input-form mt-4 "> 
            <label for="empresa_endereco" class="form-label w-full flex flex-col sm:flex-row"> Endereço Completo </label> 
            <input id="empresa_endereco" type="text" name="empresa_endereco" class="form-control" placeholder="Endereço" minlength="2" disabled> 
        </div>

        <div class="grid grid-cols-12 gap-2 mt-1"> 
            <input type="text" id="empresa_cep" class="form-control col-span-2" placeholder="CEP" aria-label="default input inline 1" disabled> 
            <input type="text" id="empresa_bairro" class="form-control col-span-4" placeholder="Bairro" aria-label="default input inline 2" disabled> 
            <input type="text" id="empresa_cidade" class="form-control col-span-4" placeholder="Cidade" aria-label="default input inline 3" disabled>
                <div class="col-span-2"> 
                    <select id="empresa_estado" data-search="true" class="tail-select w-full">
                        <option value="AC" disabled>Acre</option>
                        <option value="AL" disabled>Alagoas</option>
                        <option value="AP" disabled>Amapá</option>
                        <option value="AM" disabled>Amazonas</option>
                        <option value="BA" disabled>Bahia</option>
                        <option value="CE" disabled>Ceará</option>
                        <option value="DF" disabled>Distrito Federal</option>
                        <option value="ES" disabled>Espírito Santo</option>
                        <option value="GO" disabled>Goiás</option>
                        <option value="MA" disabled>Maranhão</option>
                        <option value="MT" disabled>Mato Grosso</option>
                        <option value="MS" disabled>Mato Grosso do Sul</option>
                        <option value="MG" disabled>Minas Gerais</option>
                        <option value="PA" disabled>Pará</option>
                        <option value="PB" disabled>Paraíba</option>
                        <option value="PR" disabled>Paraná</option>
                        <option value="PE" disabled>Pernambuco</option>
                        <option value="PI" disabled>Piauí</option>
                        <option value="RJ" disabled selected>Rio de Janeiro</option>
                        <option value="RN" disabled>Rio Grande do Norte</option>
                        <option value="RS" disabled>Rio Grande do Sul</option>
                        <option value="RO" disabled>Rondônia</option>
                        <option value="RR" disabled>Roraima</option>
                        <option value="SC" disabled>Santa Catarina</option>
                        <option value="SP" disabled>São Paulo</option>
                        <option value="SE" disabled>Sergipe</option>
                        <option value="TO" disabled>Tocantins</option>
                    </select> 
                </div>
            </div> 
            <div class="mt-4">
                <label for="empresa_contato" class="form-label w-full flex flex-col sm:flex-row"> Meios de contato </label> 
            </div>
            <div class="grid grid-cols-12 gap-2 mt-1"> 
                <input id="empresa-email" type="email" name="empresa-email" class="form-control col-span-4" placeholder="E-mail" minlength="2" disabled>
                <input id="empresa-telefone" type="text" name="empresa-telefone" class="form-control col-span-4" placeholder="telefone" minlength="2" disabled>
                <input id="empresa-whatsapp" type="text" name="empresa-whatsapp" class="form-control col-span-4" placeholder="WhatsApp" minlength="2" disabled>
            </div>
</div> 
        <a href="/empresaedit">
            <input type="button" value="Editar" class="btn btn-primary mt-5">
        </a>
    </form> 
</div>
@endsection