<!DOCTYPE html>
<html style="background: none;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>だｓｈぼあｒｄ</title>
      <!-- Fontawsome CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <!-- UIkit CSS -->
      <link rel="stylesheet" href="{{ asset('css/uikit.min.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- UIkit JS -->
      <script src="{{ asset('js/uikit.min.js')}}"></script>
      <script src="{{ asset('js/uikit-icons.min.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="{{ asset('js/script.js')}}"></script>
   </head>
   <body style="background:#fff;">
      <div class="uk-offcanvas-content">
         <header  uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav class="uk-navbar-container dashboard-navbar uk-position-fixed-top uk-secondary" uk-navbar>
               <div class="uk-navbar-left">
                  <a class="uk-navbar-item uk-logo" href="#">Logo</a>
                  <div class="uk-navbar-item">
                  </div>
               </div>
               <div class="uk-navbar-center dashboard-navbar-center">
                  <div class="uk-navbar-item">
                     <form action="javascript:void(0)">
                        <div class="uk-inline">
                           <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search" style="right:8px;"></span>
                           <input class="uk-input dashboard-input" type="text" placeholder="Search">
                        </div>
                        <!--                        <a href="#" class="uk-icon uk-margin-small-left dashboard-btn" uk-icon="icon:search;" uk-tooltip="title: Search; delay: 700; pos: bottom"></a> -->
                     </form>
                  </div>
               </div>
               <div class="uk-navbar-right dashboard-navbar-right">
                  <ul class="uk-navbar-nav">
                     <li>
                        <!-- dashboard active -> -->
                        <a href="#" type="button" class="uk-icon" uk-icon="icon: grid;"  uk-tooltip="title: Wekonek apps; delay: 700; pos: bottom"></a>
                        <div class="uk-width-large" uk-dropdown="mode:click;">
                           <div class="uk-dropdown-grid uk-child-width-1-2@m" uk-grid>
                              <div>
                                 <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                 </ul>
                              </div>
                              <div>
                                 <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="#" class="uk-icon" uk-icon="icon: bell;"  uk-tooltip="title: Notifications; delay: 700; pos: bottom"></a>
                     </li>
                     <li>
                        <a href="#" type="button" uk-tooltip="title: Profile; delay: 700; pos: bottom">
                        <img class="dashboard-profile uk-border-circle uk-margin-small-right" src="images/avatar.jpg">
                        </a>
                        <div uk-dropdown="mode: click;">
                           <ul class="uk-nav uk-dropdown-nav">
                              <li class="uk-active"><a href="#">Active</a></li>
                              <li><a href="#">Item</a></li>
                              <li class="uk-nav-header">Header</li>
                              <li><a href="#">Item</a></li>
                              <li><a href="#">Item</a></li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="#">Item</a></li>
                           </ul>
                           <span class="uk-icon dashboard-drop-down-arrow" uk-icon="icon:triangle-up; ratio: 2;"></span>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="uk-navbar-right dashboard-navbar-right-show">
                  <ul class="uk-navbar-nav">
                     <li>
                        <a class="uk-navbar-toggle uk-margin-small-right" uk-toggle="target: #offcanvas-push" uk-navbar-toggle-icon href="#"></a>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- nav 2 -->
            <nav class="uk-navbar-container uk-background-primary uk-light uk-position-fixed-top uk-secondary" uk-navbar>
               <div class="uk-navbar-center dashboard-navbar-center">
                    <h4>Please notify us for any concerns !</h4>
               </div>

            </nav>
         </header>

         <!-- Dashboard-content -->
         <div class="dashboard-content">
         <!-- Sidebar -->
         <!-- Sidenav -->
         <div class="uk-card uk-card-default uk-card-body uk-secondary dashboard-sidenav" style="position: fixed; z-index: 1000;" >
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
               <li class="uk-nav-header">General</li>
               <li><a href="admin-dashboard.html">Dashboard</a></li>
               <li><a href="#">Message</a></li>
               <li><a href="notification">Notification</a></li>
               <li><a href="#">Settings</a></li>
               <li class="uk-nav-header">Getting Started</li>
               <li><a href="admin-dashboard-users.html">Users</a></li>
               <li class="uk-active"><a href="admin-dashboard-students.html">Students</a></li>
               <li><a href="admin-dashboard-teachers.html">Teachers</a></li>
               <li><a href="admin-dashboard-parents.html">Parents</a></li>
               <li><a href="#">Library</a></li>
               <li><a href="#">Account</a></li>
               <li><a href="#">Class</a></li>
               <li><a href="#">Subject</a></li>
               <li><a href="#">Attendance</a></li>
               <li><a href="#">Exam</a></li>
               <li class="uk-nav-header">Components</li>
               <li><a href="#">Map</a></li>
               <li><a href="#">Reports</a></li>
               <li class="uk-parent">
                  <a href="#">Parent</a>
                  <ul class="uk-nav-sub">
                     <li><a href="#">Sub item</a></li>
                     <li><a href="#">Sub item</a></li>
                  </ul>
               </li>
               <li class="uk-parent">
                  <a href="#">Parent</a>
                  <ul class="uk-nav-sub">
                     <li><a href="#">Sub item</a></li>
                     <li><a href="#">Sub item</a></li>
                  </ul>
               </li>
               <li class="uk-nav-header">Header</li>
               <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
               <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
               <li class="uk-nav-divider"></li>
               <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
            </ul>
         </div>
         <div class="uk-card uk-card-default uk-card-body uk-secondary dashboard-sidenav" style="opacity: 0;">
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav uk-switcher="connect: #component-nav; animation: uk-animation-fade; toggle: > :not(.uk-nav-header)">
               <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
            </ul>
         </div>
            <!-- Dashboard inner content -->
                  <div class="dashboard-inner" style="background: #fff;" uk-grid>

                     <!-- end of grid 3 -->
                     <!-- start of grid 2 -->
                     <div class="dashboard-content-header">
                      <h3><span class="uk-icon uk-margin-small-right" uk-icon="icon: list;"></span>Students</h3>
                      <ul class="uk-breadcrumb">
                <li><a class="uk-text-primary" href="admin-dashboard.html">Dashboard</a></li>
                <li><a class="uk-text-primary" href="admin-dashboard-users.html">Users</a></li>
                <li><span>Students</span></li>
            </ul>
                     </div>
                     <div class="dashboard-width-100">
              <div class="dashboard-float-right">
                        <button class="uk-button uk-button-primary uk-margin-small-right dashboard-icon-button"><span class="uk-icon dashboard-custom-icon" uk-icon="icon: plus;"></span></button>
                        <button class="uk-button dashboard-danger dashboard-light dashboard-icon-button"><span class="uk-icon dashboard-custom-icon" uk-icon="icon: trash;"></span></button>
                        </div>
                      </div>
                     <div class="uk-overflow-auto dashboard-width-100">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink"><input class="uk-checkbox" id="dashboard-checkbox" type="checkbox"></th>
                <th class="uk-table-shrink">Profile</th>
                <th class="uk-table-expand">Users</th>
                <th class="uk-table-expand">Status</th>
                <th class="uk-width-small">Date Added</th>
                <th class="uk-table-shrink uk-text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td><span>Offline</span></td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-primary dashboard-icon-button"><span class="uk-icon dashboard-custom-icon" uk-icon="icon: pencil;"></span></button></td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td><span>Offline</span></td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-primary dashboard-icon-button"><span class="uk-icon dashboard-custom-icon" uk-icon="icon: pencil;"></span></button></td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td><span>Offline</span></td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-primary dashboard-icon-button"><span class="uk-icon dashboard-custom-icon" uk-icon="icon: pencil;"></span></button></td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td><span>Offline</span></td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-primary dashboard-icon-button"><span class="uk-icon dashboard-custom-icon" uk-icon="icon: pencil;"></span></button></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="dashboard-pagination">
  <ul class="uk-pagination" uk-margin>
    <li><a href="#"><span uk-pagination-previous></span></a></li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span>7</span></li>
    <li><a href="#">8</a></li>
    <li><a href="#">9</a></li>
    <li><a href="#">10</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li><a href="#"><span uk-pagination-next></span></a></li>
</ul>
</div>
                  </div>

        <ul id="component-nav" class="uk-switcher">
               <li>
               </li>
            </ul>
         </div>
         <!-- Message button -->
         <a href="#" class="uk-position-fixed uk-position-bottom-right uk-margin-small-bottom uk-margin-small-right uk-button-primary dashboard-messenger messenger-hide" uk-tooltip="title: Messenger; delay: 700; pos: left">
            <div class="dashboard-messenger-ring">
               <span>Question? Send us a message.</span>
            </div>
         </a>
         <a href="#" class="uk-position-fixed uk-position-bottom-right uk-margin-small-bottom uk-margin-small-right uk-button-primary dashboard-messenger messenger-show" uk-tooltip="title: Messenger; delay: 700; pos: left">
            <div class="dashboard-messenger-ring">
               <span class="uk-icon" uk-icon="icon: comment;"></span>
            </div>
         </a>
      </div>
      <!-- Mobile responsive sidebar push -->
      <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
      <div class="uk-offcanvas-bar">
         <button class="uk-offcanvas-close" type="button" uk-close></button>
         <div class="uk-nav">
            <div class="uk-panel">
               <ul class="uk-nav uk-nav-default" uk-switcher="connect: #component-nav; animation: uk-animation-fade; toggle: > :not(.uk-nav-header)">
                  <li class="uk-nav-header">General</li>
                  <li><a href="../index">Dashboard</a></li>
                  <li><a href="../pro">Messages</a></li>
                  <li><a href="../changelog">Notification</a></li>
                  <li><a href="../download">Settings</a></li>
                  <li class="uk-nav-header">Getting started</li>
                  <li exact=""><a href="./introduction">Students</a></li>
                  <li exact=""><a href="./installation">Teachers</a></li>
                  <li exact=""><a href="./less">Parents</a></li>
                  <li exact=""><a href="./sass">Library</a></li>
                  <li exact=""><a href="./javascript">Account</a></li>
                  <li exact=""><a href="./webpack">Class</a></li>
                  <li exact=""><a href="./custom-icons">Subject</a></li>
                  <li exact=""><a href="./avoiding-conflicts">Attendance</a></li>
                  <li exact=""><a href="./rtl">Exam</a></li>
                  <li class="uk-nav-header">Components</li>
                  <li exact=""><a href="./accordion">Map</a></li>
                  <li exact=""><a href="./alert">Report</a></li>
                  <li exact=""><a href="./alert">Settings</a></li>
               </ul>
            </div>
         </div>
      </div>
   </body>

</html>