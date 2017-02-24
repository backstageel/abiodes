    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>PRINCIPAL</h3>
            <ul class="nav side-menu">
                <li><a href="<?= $this->Url->build('/')?>"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                </li>
                <li><a><i class="fa fa-edit"></i> Cadastros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= $this->Url->build(['controller'=>'organizacaos','action'=>'index'])?>">Organizadores</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'liderancas','action'=>'index'])?>">Líderes</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'membros','action'=>'index'])?>">Membros</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'pessoas','action'=>'index'])?>">Pessoas</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'produtos','action'=>'index'])?>">Produtos</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Actividades <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= $this->Url->build(['controller'=>'actividades','action'=>'index'])?>">Todas Actividades</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'actividades','action'=>'index'])?>">Registar Actividades</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Materiais <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= $this->Url->build(['controller'=>'materials','action'=>'index'])?>">Todos Materiais</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'materials','action'=>'index'])?>">Registo de Materiais</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'materials','action'=>'index'])?>">Alocação de Materiais</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Administração <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= $this->Url->build(['controller'=>'users','action'=>'index'])?>">Utilizadores</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'groups','action'=>'index'])?>">Grupos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu_section">
            <h3>Mais...</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= $this->Url->build(['controller'=>'reports','action'=>'index'])?>">Relatórios Personalizados</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'reports','action'=>'index'])?>">Membros</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'reports','action'=>'index'])?>">Actividades</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'reports','action'=>'index'])?>">Produção</a></li>
                        <li><a href="<?= $this->Url->build(['controller'=>'reports','action'=>'index'])?>">Materiais</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->
