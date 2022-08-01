
        <div class="horizontal-bar-wrap">
            <div class="header-topnav">
                <div class="container-fluid">
                    <div class=" topnav rtl-ps-none" id="" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <ul class="menu float-left">
                            <li class="{{ request()->is('dashboard/*') ? 'active' : '' }}">

                                <div>


                                    <div>
                                        <label class="toggle" for="drop-2">

                                        Dashboard
                                    </label>
                                        <a href="#">
                                            <i class="nav-icon mr-2 i-Bar-Chart"></i>
                                             Dashboard
                                        </a>

                                        <input type="checkbox" id="drop-2">
                                        <ul>

                                            <li class="nav-item ">
                        <a class="{{ Route::currentRouteName()=='dashboard_version_1' ? 'open' : '' }}" href="{{route('dashboard_version_1')}}">
                            <i class="nav-icon mr-2 i-Clock-3"></i>
                            <span class="item-name">Version 1</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dashboard_version_2')}}" class="{{ Route::currentRouteName()=='dashboard_version_2' ? 'open' : '' }}">
                            <i class="nav-icon mr-2 i-Clock-4"></i>
                            <span class="item-name">Version 2</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='dashboard_version_3' ? 'open' : '' }}" href="{{route('dashboard_version_3')}}" >
                            <i class="nav-icon mr-2 i-Over-Time"></i>
                            <span class="item-name">Version 3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='dashboard_version_4' ? 'open' : '' }}" href="{{route('dashboard_version_4')}}">
                            <i class="nav-icon mr-2 i-Clock"></i>
                            <span class="item-name">Version 4</span>
                        </a>
                    </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="{{ request()->is('uikits/*') ? 'active' : '' }}">

                                <div>


                                    <div>
                                        <label class="toggle" for="drop-2">

UI kits
                                        </label>
                                        <a href="#">
                                            <i class="nav-icon mr-2 i-Suitcase"></i> UI kits
                                        </a><input type="checkbox" id="drop-2">
                                        <ul>

                                           <li class="nav-item">
                    <a class="{{ Route::currentRouteName()=='alerts' ? 'open' : '' }}" href="{{route('alerts')}}">
                            <i class="nav-icon mr-2 i-Bell1"></i>
                            <span class="item-name">Alerts</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='badges' ? 'open' : '' }}" href="{{route('badges')}}">
                            <i class="nav-icon mr-2 i-Medal-2"></i>
                            <span class="item-name">Badges</span>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='bootstrap-tab' ? 'open' : '' }}" href="{{route('bootstrap-tab')}}">
                            <i class="nav-icon mr-2 i-Cursor-Click"></i>
                            <span class="item-name">Bootstrap tab</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='buttons' ? 'open' : '' }}" href="{{route('buttons')}}">
                            <i class="nav-icon mr-2 i-Cursor-Click"></i>
                            <span class="item-name">Buttons</span>
                        </a>
                    </li>
                          <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='accordion' ? 'open' : '' }}" href="{{route('accordion')}}">
                            <i class="nav-icon mr-2 i-Split-Horizontal-2-Window"></i>
                            <span class="item-name">Accordion</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='lists' ? 'open' : '' }}" href="{{route('lists')}}">
                            <i class="nav-icon mr-2 i-Belt-3"></i>
                            <span class="item-name">Lists</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='pagination' ? 'open' : '' }}" href="{{route('pagination')}}">
                            <i class="nav-icon mr-2 i-Arrow-Next"></i>
                            <span class="item-name">Paginations</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='popover' ? 'open' : '' }}" href="{{route('popover')}}">
                            <i class="nav-icon mr-2 i-Speach-Bubble-2"></i>
                            <span class="item-name">Popover</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='progressbar' ? 'open' : '' }}" href="{{route('progressbar')}}">
                            <i class="nav-icon mr-2 i-Loading"></i>
                            <span class="item-name">Progressbar</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='tabs' ? 'open' : '' }}" href="{{route('tabs')}}">
                            <i class="nav-icon mr-2 i-New-Tab"></i>
                            <span class="item-name">Tabs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='tooltip' ? 'open' : '' }}" href="{{route('tooltip')}}">
                            <i class="nav-icon mr-2 i-Speach-Bubble-8"></i>
                            <span class="item-name">Tooltip</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='modals' ? 'open' : '' }}" href="{{route('modals')}}">
                            <i class="nav-icon mr-2 i-Duplicate-Window"></i>
                            <span class="item-name">Modals</span>
                        </a>
                    </li>


                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- end ui kits -->

                            <li class="{{ request()->is('extrakits/*') ? 'active' : '' }}">

                                <div>


                                    <div>
                                        <label class="toggle" for="drop-2">

                Extra UI kits
            </label>
                                        <a href="#">
                                            <i class="nav-icon i-Library mr-2"></i> Extra UI kits
                                        </a><input type="checkbox" id="drop-2">
                                        <ul>
                                              <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='dropDown' ? 'open' : '' }}" href="{{route('dropDown')}}">
                            <i class="nav-icon mr-2 i-Arrow-Down-in-Circle"></i>
                            <span class="item-name">Dropdown</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='cards' ? 'open' : '' }}" href="{{route('cards')}}">
                            <i class="nav-icon mr-2 i-Line-Chart-2"></i>
                            <span class="item-name">Cards</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='cards-metrics' ? 'open' : '' }}" href="{{route('cards-metrics')}}">
                            <i class="nav-icon mr-2 i-ID-Card"></i>
                            <span class="item-name">Card Metrics</span>
                        </a>
                    </li>
   <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='carousel' ? 'open' : '' }}" href="{{route('carousel')}}">
                            <i class="nav-icon mr-2 i-Video-Photographer"></i>
                            <span class="item-name">Carousels</span>
                        </a>
                    </li>
  <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='tables' ? 'open' : '' }}" href="{{route('tables')}}">
                            <i class="nav-icon mr-2 i-File-Horizontal-Text"></i>
                            <span class="item-name">Tables</span>
                        </a>
                    </li>
  <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='NoUislider' ? 'open' : '' }}" href="{{route('NoUislider')}}">
                            <i class="nav-icon mr-2 i-Width-Window"></i>
                            <span class="item-name">Sliders</span>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='imageCroper' ? 'open' : '' }}" href="{{route('imageCroper')}}">
                            <i class="nav-icon mr-2 i-Crop-2"></i>
                            <span class="item-name">Image Cropper</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='loader' ? 'open' : '' }}" href="{{route('loader')}}">
                            <i class="nav-icon mr-2 i-Loading-3"></i>
                            <span class="item-name">Loaders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='laddaButton' ? 'open' : '' }}" href="{{route('laddaButton')}}">
                            <i class="nav-icon mr-2 i-Loading-2"></i>
                            <span class="item-name">Ladda Buttons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='toastr' ? 'open' : '' }}" href="{{route('toastr')}}">
                            <i class="nav-icon mr-2 i-Bell"></i>
                            <span class="item-name">Toastr</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='sweetAlert' ? 'open' : '' }}" href="{{route('sweetAlert')}}">
                            <i class="nav-icon mr-2 i-Approved-Window"></i>
                            <span class="item-name">Sweet Alerts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='tour' ? 'open' : '' }}" href="{{route('tour')}}">
                            <i class="nav-icon mr-2 i-Plane"></i>
                            <span class="item-name">User Tour</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='upload' ? 'open' : '' }}" href="{{route('upload')}}">
                            <i class="nav-icon mr-2 i-Data-Upload"></i>
                            <span class="item-name">Upload</span>
                        </a>
                    </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- end extra uikits -->

                            <li class="{{ request()->is('apps/*') ? 'active' : '' }}">

                                <div>


                                    <div>
                                        <label class="toggle" for="drop-2">

Apps
            </label>
                                        <a href="#">
                                            <i class="nav-icon mr-2 i-Computer-Secure"></i> Apps
                                        </a><input type="checkbox" id="drop-2">
                                        <ul>

                                           <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='invoice' ? 'open' : '' }}" href="{{route('invoice')}}">
                            <i class="nav-icon mr-2 i-Add-File"></i>
                            <span class="item-name">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='inbox' ? 'open' : '' }}" href="{{route('inbox')}}">
                            <i class="nav-icon mr-2 i-Email"></i>
                            <span class="item-name">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='chat' ? 'open' : '' }}" href="{{route('chat')}}">
                            <i class="nav-icon mr-2 i-Speach-Bubble-3"></i>
                            <span class="item-name">Chat</span>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='calendar' ? 'open' : '' }}" href="{{route('calendar')}}">
                            <i class="nav-icon mr-2 i-Calendar-4"></i>
                            <span class="item-name">Calendar</span>
                        </a>
                    </li>
                           <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='task-manager' ? 'open' : '' }}" href="{{route('task-manager')}}">
                            <i class="nav-icon mr-2 i-Receipt"></i>
                            <span class="item-name">Task manager</span>
                        </a>
                    </li>
                       <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='task-manager-list' ? 'open' : '' }}" href="{{route('task-manager-list')}}">
                            <i class="nav-icon mr-2 i-Receipt-4"></i>
                            <span class="item-name">Task  list</span>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='toDo' ? 'open' : '' }}" href="{{route('toDo')}}">
                            <i class="nav-icon mr-2 i-Receipt-4"></i>
                            <span class="item-name">Minimal ToDo</span>
                        </a>
                    </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- end apps -->

                            <li class="{{ request()->is('forms/*') ? 'active' : '' }}">

                                <div>


                                    <div>
                                        <label class="toggle" for="drop-2">

Forms
            </label>
                                        <a href="#">
                                            <i class="nav-icon mr-2 i-File-Clipboard-File--Text"></i> Forms
                                        </a><input type="checkbox" id="drop-2">
                                        <ul>

                                            <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='forms-basic' ? 'open' : '' }}" href="{{route('forms-basic')}}">
                            <i class="nav-icon mr-2 i-File-Clipboard-Text--Image"></i>
                            <span class="item-name">Basic Elements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='form-layouts' ? 'open' : '' }}" href="{{route('form-layouts')}}">
                            <i class="nav-icon mr-2 i-Split-Vertical"></i>
                            <span class="item-name">Form Layouts</span>
                        </a>
                    </li>
                       <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='basic-action-bar' ? 'open' : '' }}" href="{{route('basic-action-bar')}}">
                            <i class="nav-icon mr-2 i-File-Clipboard-Text--Image"></i>
                            <span class="item-name">Basic action bar </span>
                        </a>
                    </li>
  <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='multi-column-forms' ? 'open' : '' }}" href="{{route('multi-column-forms')}}">
                            <i class="nav-icon mr-2 i-Split-Vertical"></i>
                            <span class="item-name">Multi column forms</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='form-input-group' ? 'open' : '' }}" href="{{route('form-input-group')}}">
                            <i class="nav-icon mr-2 i-Receipt-4"></i>
                            <span class="item-name">Input Groups</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='form-validation' ? 'open' : '' }}" href="{{route('form-validation')}}">
                            <i class="nav-icon mr-2 i-Close-Window"></i>
                            <span class="item-name">Form Validation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='smartWizard' ? 'open' : '' }}" href="{{route('smartWizard')}}">
                            <i class="nav-icon mr-2 i-Width-Window"></i>
                            <span class="item-name">Smart Wizard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='tagInput' ? 'open' : '' }}" href="{{route('tagInput')}}">
                            <i class="nav-icon mr-2 i-Tag-2"></i>
                            <span class="item-name">Tag Input</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='form-editor' ? 'open' : '' }}" href="{{route('form-editor')}}">
                            <i class="nav-icon mr-2 i-Pen-2"></i>
                            <span class="item-name">Rich Editor</span>
                        </a>
                    </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- end Forms -->


                                <li class="{{ request()->is('charts/*') ? 'active' : '' }}">

                                <div>


                                    <div>
                                        <label class="toggle" for="drop-2">

Charts
            </label>
                                        <a href="#">
                                            <i class="nav-icon mr-2 i-Bar-Chart-5"></i> Charts
                                        </a><input type="checkbox" id="drop-2">
                                        <ul>

                          <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='echarts' ? 'open' : '' }}" href="{{route('echarts')}}" title='charts'>
                            <i class="nav-icon mr-2 i-Bar-Chart-2"></i>
                            <span class="item-name">echarts</span>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a class="{{ Route::currentRouteName()=='chartjs' ? 'open' : '' }}" href="{{route('chartjs')}}">
                            <i class="nav-icon mr-2 i-File-Clipboard-Text--Image"></i>
                            <span class="item-name">ChartJs</span>
                        </a>
                    </li>


                          <li><a  class="{{ Route::currentRouteName()=='apexAreaCharts' ? 'open' : '' }}" href="{{route('apexAreaCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Area </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexBarCharts' ? 'open' : '' }}" href="{{route('apexBarCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Bar </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexBubbleCharts' ? 'open' : '' }}" href="{{route('apexBubbleCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Bubble </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexColumnCharts' ? 'open' : '' }}" href="{{route('apexColumnCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Column </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexCandleStickCharts' ? 'open' : '' }}" href="{{route('apexCandleStickCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>CandleStick </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexLineCharts' ? 'open' : '' }}" href="{{route('apexLineCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Line </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexMixCharts' ? 'open' : '' }}" href="{{route('apexMixCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Mix </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexPieDonutCharts' ? 'open' : '' }}" href="{{route('apexPieDonutCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>PieDonut </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexRadarCharts' ? 'open' : '' }}" href="{{route('apexRadarCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Radar </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexRadialBarCharts' ? 'open' : '' }}" href="{{route('apexRadialBarCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>RadialBar </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexScatterCharts' ? 'open' : '' }}" href="{{route('apexScatterCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Scatter </a></li>
                          <li><a  class="{{ Route::currentRouteName()=='apexSparklineCharts' ? 'open' : '' }}" href="{{route('apexSparklineCharts')}}">  <i class="nav-icon mr-2 i-Bar-Chart-2"></i>Sparkline </a></li>

                                  </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- end charts -->



                        </ul>


                    </div>
                </div>
            </div>

        </div>
        <!--=============== Horizontal bar End ================-->
