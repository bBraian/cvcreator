<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap 4.3.1 -->
  <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
  <!-- styles -->
  <link rel="stylesheet" href="../assets/css/styles.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <!-- simplebar styles -->
  <link rel="stylesheet" href="../assets/css/vendor/simplebar.css">
  <!-- favicon -->
  <link rel="icon" href="../assets/img/favicon.ico">
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Resume | Form create</title>
</head>
<body>

  <!-- PAGE LOADER -->
  <div class="page-loader">
    <!-- PAGE LOADER DECORATION -->
    <div class="page-loader-decoration">
      <!-- ICON LOGO -->
      <svg class="icon-logo" viewBox="0 0 28 40" preserveAspectRatio="xMinYMin meet">
        <path d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z"/>
      </svg>
      <!-- /ICON LOGO -->
    </div>
    <!-- /PAGE LOADER DECORATION -->

    <!-- PAGE LOADER INFO -->
    <div class="page-loader-info">
      <!-- PAGE LOADER INFO TITLE -->
      <p class="page-loader-info-title">Vikinger</p>
      <!-- /PAGE LOADER INFO TITLE -->

      <!-- PAGE LOADER INFO TEXT -->
      <p class="page-loader-info-text">Loading...</p>
      <!-- /PAGE LOADER INFO TEXT -->
    </div>
    <!-- /PAGE LOADER INFO -->
    
    <!-- PAGE LOADER INDICATOR -->
    <div class="page-loader-indicator loader-bars">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
    <!-- /PAGE LOADER INDICATOR -->
  </div>
  <!-- /PAGE LOADER -->

  <!-- CONTENT GRID -->
  <div class="content-grid" style="padding: 4% 0px !important; width: 95%">
    <!-- SECTION BANNER -->
    <div class="section-banner">
      <!-- SECTION BANNER ICON -->
      <img class="section-banner-icon" src="../assets/img/banner/groups-icon.png" alt="accounthub-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Criador de currículos</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">Crie o currículo mais pika das galáxias!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- GRID -->
    <div class="grid grid-3-9 medium-space">

      <!-- MENU SELECT LATERAL -->
      <div class="account-hub-sidebar">
        <!-- SIDEBAR BOX -->
        <div class="sidebar-box no-padding">
          <!-- SIDEBAR MENU -->
          <div class="sidebar-menu">

            <!-- MENU SOBRE MIM -->
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <a href="javascript:void(0)" onclick="changePage('sobreMim')">
                <div class="sidebar-menu-header accordion-trigger-linked">
                  <!-- SIDEBAR MENU HEADER ICON -->
                  <svg class="sidebar-menu-header-icon icon-profile">
                    <use xlink:href="#svg-profile"></use>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER ICON -->

                  <!-- SIDEBAR MENU HEADER TITLE -->
                  <p class="sidebar-menu-header-title">Sobre mim</p>
                  <!-- /SIDEBAR MENU HEADER TITLE -->

                  <!-- SIDEBAR MENU HEADER TEXT -->
                  <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read messages and more!</p>
                  <!-- /SIDEBAR MENU HEADER TEXT -->
                </div>
              </a>
              <!-- /SIDEBAR MENU HEADER -->
            </div>
            <!-- /MENU SOBRE MIM -->

            <!-- MENU EDUCAÇÃO -->
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <a href="javascript:void(0)" onclick="changePage('educacao')">
                <div class="sidebar-menu-header accordion-trigger-linked">
                  <!-- SIDEBAR MENU HEADER ICON -->
                  <svg viewBox="0 0 640 512" class="sidebar-menu-header-icon icon-settings">
                    <path d="M623.1 136.9l-282.7-101.2c-13.73-4.91-28.7-4.91-42.43 0L16.05 136.9C6.438 140.4 0 149.6 0 160s6.438 19.65 16.05 23.09L76.07 204.6c-11.89 15.8-20.26 34.16-24.55 53.95C40.05 263.4 32 274.8 32 288c0 9.953 4.814 18.49 11.94 24.36l-24.83 149C17.48 471.1 25 480 34.89 480H93.11c9.887 0 17.41-8.879 15.78-18.63l-24.83-149C91.19 306.5 96 297.1 96 288c0-10.29-5.174-19.03-12.72-24.89c4.252-17.76 12.88-33.82 24.94-47.03l190.6 68.23c13.73 4.91 28.7 4.91 42.43 0l282.7-101.2C633.6 179.6 640 170.4 640 160S633.6 140.4 623.1 136.9zM351.1 314.4C341.7 318.1 330.9 320 320 320c-10.92 0-21.69-1.867-32-5.555L142.8 262.5L128 405.3C128 446.6 213.1 480 320 480c105.1 0 192-33.4 192-74.67l-14.78-142.9L351.1 314.4z"/>
                  </svg>
                  <!-- /SIDEBAR MENU HEADER ICON -->

                  <!-- SIDEBAR MENU HEADER TITLE -->
                  <p class="sidebar-menu-header-title">Educação</p>
                  <!-- /SIDEBAR MENU HEADER TITLE -->

                  <!-- SIDEBAR MENU HEADER TEXT -->
                  <p class="sidebar-menu-header-text">Change settings, configure notifications, and review your privacy</p>
                  <!-- /SIDEBAR MENU HEADER TEXT -->
                </div>
              </a>
              <!-- /SIDEBAR MENU HEADER -->
            </div>
            <!-- /MENU EDUCAÇÃO -->

            <!-- SIDEBAR MENU ITEM -->
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <div class="sidebar-menu-header accordion-trigger-linked">
                <!-- SIDEBAR MENU HEADER ICON -->
                <svg class="sidebar-menu-header-icon icon-group">
                  <use xlink:href="#svg-group"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER ICON -->

                <!-- SIDEBAR MENU HEADER TITLE -->
                <p class="sidebar-menu-header-title">Groups</p>
                <!-- /SIDEBAR MENU HEADER TITLE -->

                <!-- SIDEBAR MENU HEADER TEXT -->
                <p class="sidebar-menu-header-text">Create new groups, manage the ones you created or accept invites!</p>
                <!-- /SIDEBAR MENU HEADER TEXT -->
              </div>
              <!-- /SIDEBAR MENU HEADER -->
            </div>
            <!-- /SIDEBAR MENU ITEM -->

            <!-- SIDEBAR MENU ITEM -->
            <div class="sidebar-menu-item">
              <!-- SIDEBAR MENU HEADER -->
              <div class="sidebar-menu-header accordion-trigger-linked">
                <!-- SIDEBAR MENU HEADER ICON -->
                <svg class="sidebar-menu-header-icon icon-store">
                  <use xlink:href="#svg-store"></use>
                </svg>
                <!-- /SIDEBAR MENU HEADER ICON -->

                <!-- SIDEBAR MENU HEADER TITLE -->
                <p class="sidebar-menu-header-title">My Store</p>
                <!-- /SIDEBAR MENU HEADER TITLE -->

                <!-- SIDEBAR MENU HEADER TEXT -->
                <p class="sidebar-menu-header-text">Review your account, manage products check stats and much more!</p>
                <!-- /SIDEBAR MENU HEADER TEXT -->
              </div>
              <!-- /SIDEBAR MENU HEADER -->

            </div>
            <!-- /SIDEBAR MENU ITEM -->
          </div>
          <!-- /SIDEBAR MENU -->

          <!-- SIDEBAR BOX FOOTER -->
          <div class="sidebar-box-footer">
            <!-- BUTTON -->
            <p class="button primary">Salvar!</p>
            <!-- /BUTTON -->

            <!-- BUTTON -->
            <p class="button white small-space">Discard All</p>
            <!-- /BUTTON -->
          </div>
          <!-- /SIDEBAR BOX FOOTER -->
        </div>
        <!-- /SIDEBAR BOX -->
      </div>
      <!-- /MENU SELECT LATERAL -->

      <!-- SOBRE MIM -->
        <!-- GRID COLUMN -->
        <div class="account-hub-content" id="sobreMim">

          <!-- TÍTULO -->
          <div class="section-header">
            <!-- SECTION HEADER INFO -->
            <div class="section-header-info">
              <!-- SECTION PRETITLE -->
              <p class="section-pretitle">Sobre mim</p>
              <!-- /SECTION PRETITLE -->

              <!-- SECTION TITLE -->
              <h2 class="section-title">
                <svg class="sidebar-menu-header-icon icon-profile">
                  <use xlink:href="#svg-profile"></use>
                </svg>
                Conte sobre você
              </h2>
              <!-- /SECTION TITLE -->
            </div>
            <!-- /SECTION HEADER INFO -->
          </div>
          <!-- /TÍTULO -->

          <!-- GRID COLUMN -->
          <div class="grid-column">
            <!-- GRID -->
            <div class="grid grid-3-3-3 centered" style="grid-template-columns: repeat(auto-fit, 30%) !important;">
              <!-- USER PREVIEW -->
              <div class="user-preview small fixed-height">
                <!-- USER PREVIEW COVER -->
                <figure class="user-preview-cover liquid">
                  <img src="img/cover/01.jpg" alt="cover-01">
                </figure>
                <!-- /USER PREVIEW COVER -->
            
                <!-- USER PREVIEW INFO -->
                <div class="user-preview-info">
                  <!-- USER SHORT DESCRIPTION -->
                  <div class="user-short-description small">
                    <!-- USER SHORT DESCRIPTION AVATAR -->
                    <div class="user-short-description-avatar user-avatar">
                      <!-- USER AVATAR BORDER -->
                      <div class="user-avatar-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-100-110"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR BORDER -->
                  
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-68-74" data-src="../assets/img/avatar/01.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-84-92"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-84-92"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-28-32"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">24</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER SHORT DESCRIPTION AVATAR -->
                  </div>
                  <!-- /USER SHORT DESCRIPTION -->
                </div>
                <!-- /USER PREVIEW INFO -->
              </div>
              <!-- /USER PREVIEW -->

              <!-- UPLOAD BOX -->
              <div class="upload-box">
                <!-- UPLOAD BOX ICON -->
                <svg class="upload-box-icon icon-members">
                  <use xlink:href="#svg-members"></use>
                </svg>
                <!-- /UPLOAD BOX ICON -->
            
                <!-- UPLOAD BOX TITLE -->
                <p class="upload-box-title">Foto de perfil</p>
                <!-- /UPLOAD BOX TITLE -->
            
                <!-- UPLOAD BOX TEXT -->
                <p class="upload-box-text">500x500px (5MB)</p>
                <!-- /UPLOAD BOX TEXT -->
              </div>
              <!-- /UPLOAD BOX -->
            
              <!-- UPLOAD BOX -->
              <div class="upload-box">
                <!-- UPLOAD BOX ICON -->
                <svg class="upload-box-icon icon-photos">
                  <use xlink:href="#svg-photos"></use>
                </svg>
                <!-- /UPLOAD BOX ICON -->
            
                <!-- UPLOAD BOX TITLE -->
                <p class="upload-box-title">Capa</p>
                <!-- /UPLOAD BOX TITLE -->
            
                <!-- UPLOAD BOX TEXT -->
                <p class="upload-box-text">1184x300px (10MB)</p>
                <!-- /UPLOAD BOX TEXT -->
              </div>
              <!-- /UPLOAD BOX -->
            </div>
            <!-- /GRID -->

            <!-- WIDGET BOX -->
            <div class="widget-box">
              <!-- WIDGET BOX TITLE -->
              <p class="widget-box-title">Sobre você</p>
              <!-- /WIDGET BOX TITLE -->
          
              <!-- WIDGET BOX CONTENT -->
              <div class="widget-box-content">
                <!-- FORM -->
                <form class="form">
                  <!-- FORM ROW -->
                  <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="profile-name">Nome completo</label>
                        <input type="text" id="profile-name" name="profile_name">
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ITEM -->
                    <div class="form-row split">
                      <!-- FORM ITEM -->
                      <div class="form-item">
                        <!-- FORM INPUT DECORATED -->
                        <div class="form-input-decorated">
                          <!-- FORM INPUT -->
                          <div class="form-input small active">
                            <label for="profile-birthday">Data de Nascimento</label>
                            <input type="text" id="profile-birthday" name="profile_birthday" value="August 24th, 1987">
                          </div>
                          <!-- /FORM INPUT -->
              
                          <!-- FORM INPUT ICON -->
                          <svg class="form-input-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                          </svg>
                          <!-- /FORM INPUT ICON -->
                        </div>
                        <!-- /FORM INPUT DECORATED -->
                      </div>
                      <!-- /FORM ITEM -->

                      
                      <!-- FORM ITEM -->
                      <div class="form-item">
                        <!-- FORM SELECT -->
                        <div class="form-select">
                          <label for="profile-country">Sexo</label>
                          <select id="profile-country" name="profile_country">
                            <option value="0">Selecione seu sexo</option>
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                            <option value="3">Outro</option>
                          </select>
                          <!-- FORM SELECT ICON -->
                          <svg class="form-select-icon icon-small-arrow">
                            <use xlink:href="#svg-small-arrow"></use>
                          </svg>
                          <!-- /FORM SELECT ICON -->
                        </div>
                        <!-- /FORM SELECT -->
                      </div>
                      <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ITEM -->
                    
                  </div>
                  <!-- /FORM ROW -->

                  <!-- FORM ROW -->
                  <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small full">
                        <label for="profile_description">Breve descrição</label>
                        <textarea id="profile-description" name="profile_description"></textarea>
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-item">
                      <!-- FORM SELECT -->
                      <div class="form-select">
                        <label for="profile-country">Nacionalidade</label>
                        <select id="profile-country" name="profile_country">
                          <option value="0">Brasileiro</option>
                          <option value="1">American</option>
                          <option value="1">Português</option>
                        </select>
                        <!-- FORM SELECT ICON -->
                        <svg class="form-select-icon icon-small-arrow">
                          <use xlink:href="#svg-small-arrow"></use>
                        </svg>
                        <!-- /FORM SELECT ICON -->
                      </div>
                      <!-- /FORM SELECT -->
                    </div>
                    <!-- /FORM INPUT -->

                      <!-- FORM INPUT -->
                      <div class="form-input small">
                        <label for="profile-public-website">Site pessoal</label>
                        <input type="text" id="profile-public-website" name="profile_public_website">
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->

                  <!-- FORM ROW -->
                  <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM SELECT -->
                      <div class="form-select">
                        <label for="profile-country">Estado</label>
                        <select id="profile-country" name="profile_country">
                          <option value="0">Selecione seu estado</option>
                          <option value="1">Rio Grande do Sul</option>
                        </select>
                        <!-- FORM SELECT ICON -->
                        <svg class="form-select-icon icon-small-arrow">
                          <use xlink:href="#svg-small-arrow"></use>
                        </svg>
                        <!-- /FORM SELECT ICON -->
                      </div>
                      <!-- /FORM SELECT -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM SELECT -->
                      <div class="form-select">
                        <label for="profile-city">Cidade</label>
                        <select id="profile-city" name="profile_city">
                          <option value="0">Selecione sua cidade</option>
                          <option value="1">Porto Alegre</option>
                          <option value="2">Brochier</option>
                        </select>
                        <!-- FORM SELECT ICON -->
                        <svg class="form-select-icon icon-small-arrow">
                          <use xlink:href="#svg-small-arrow"></use>
                        </svg>
                        <!-- /FORM SELECT ICON -->
                      </div>
                      <!-- /FORM SELECT -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->
              </div>
              <!-- WIDGET BOX CONTENT -->
            </div>
            <!-- /WIDGET BOX -->
          </div>
          <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID COLUMN -->
      <!-- /SOBRE MIM -->


      <!-- EDUCAÇÃO -->
        <!-- GRID COLUMN -->
        <div class="account-hub-content" id="educacao" style="display: none;">


          <!-- TÍTULO -->
          <div class="section-header">
            <!-- SECTION HEADER INFO -->
            <div class="section-header-info">
              <!-- SECTION PRETITLE -->
              <p class="section-pretitle">Formação academica</p>
              <!-- /SECTION PRETITLE -->

              <!-- SECTION TITLE -->
              <h2 class="section-title">
                <svg viewBox="0 0 640 512" class="sidebar-menu-header-icon icon-settings">
                  <path d="M623.1 136.9l-282.7-101.2c-13.73-4.91-28.7-4.91-42.43 0L16.05 136.9C6.438 140.4 0 149.6 0 160s6.438 19.65 16.05 23.09L76.07 204.6c-11.89 15.8-20.26 34.16-24.55 53.95C40.05 263.4 32 274.8 32 288c0 9.953 4.814 18.49 11.94 24.36l-24.83 149C17.48 471.1 25 480 34.89 480H93.11c9.887 0 17.41-8.879 15.78-18.63l-24.83-149C91.19 306.5 96 297.1 96 288c0-10.29-5.174-19.03-12.72-24.89c4.252-17.76 12.88-33.82 24.94-47.03l190.6 68.23c13.73 4.91 28.7 4.91 42.43 0l282.7-101.2C633.6 179.6 640 170.4 640 160S633.6 140.4 623.1 136.9zM351.1 314.4C341.7 318.1 330.9 320 320 320c-10.92 0-21.69-1.867-32-5.555L142.8 262.5L128 405.3C128 446.6 213.1 480 320 480c105.1 0 192-33.4 192-74.67l-14.78-142.9L351.1 314.4z"/>
                </svg> 
                Educação
              </h2>
              <!-- /SECTION TITLE -->
            </div>
            <!-- /SECTION HEADER INFO -->
          </div>
          <!-- /TÍTULO -->

          <!-- GRID COLUMN -->
          <div class="grid-column">

            <!-- WIDGET BOX -->
            <div class="widget-box">
              <!-- WIDGET BOX TITLE -->
              <p class="widget-box-title">Educação</p>
              <!-- /WIDGET BOX TITLE -->
          
              <!-- WIDGET BOX CONTENT -->
              <div class="widget-box-content">
                <!-- FORM -->
                <form class="form">
                  <!-- FORM ROW -->
                  <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="profile-job-1-title">Curso</label>
                        <input type="text" id="profile-job-1-title" name="profile_job_1_title">
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="profile-job-1-title">Local</label>
                        <input type="text" id="profile-job-1-title" name="profile_job_1_title">
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ROW -->
                    <div class="form-row split">
                      <div class="form-item">
                        <!-- FORM INPUT DECORATED -->
                        <div class="form-input-decorated">
                          <!-- FORM INPUT -->
                          <div class="form-input small active">
                            <label for="profile-birthday">Data de início</label>
                            <input type="text" id="profile-birthday" name="profile_birthday" value="August 24th, 1987">
                          </div>
                          <!-- /FORM INPUT -->
              
                          <!-- FORM INPUT ICON -->
                          <svg class="form-input-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                          </svg>
                          <!-- /FORM INPUT ICON -->
                        </div>
                        <!-- /FORM INPUT DECORATED -->
                      </div>

                      <div class="form-item">
                        <!-- FORM INPUT DECORATED -->
                        <div class="form-input-decorated">
                          <!-- FORM INPUT -->
                          <div class="form-input small active">
                            <label for="profile-birthday">Data do fim</label>
                            <input type="text" id="profile-birthday" name="profile_birthday" value="August 24th, 1987">
                          </div>
                          <!-- /FORM INPUT -->
              
                          <!-- FORM INPUT ICON -->
                          <svg class="form-input-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                          </svg>
                          <!-- /FORM INPUT ICON -->
                        </div>
                        <!-- /FORM INPUT DECORATED -->
                      </div>
                    </div>
                    <!-- /FORM ROW -->
                  </div>
                  <!-- /FORM ROW -->

                  <!-- FORM ROW -->
                  <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small mid-textarea active">
                        <label for="profile-job-1-description">Descrição</label>
                        <textarea id="profile-job-1-description" name="profile_job_1_description"></textarea>
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->
                  
                </form>
                <!-- /FORM -->

                <!-- BUTTON -->
                <p class="button small white add-field-button">Adicionar</p>
                <!-- /BUTTON -->
              </div>
              <!-- WIDGET BOX CONTENT -->
            </div>
            <!-- /WIDGET BOX -->
          </div>
          <!-- /GRID COLUMN -->

          <!-- REGISTROS -->
            <!-- TABLE -->
            <?php if(1==2) { ?>
            <div class="table table-forum-discussion">
              <!-- TABLE HEADER -->
              <div class="table-header">
                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column">
                  <!-- TABLE HEADER TITLE -->
                  <p class="table-header-title">Curso - Local</p>
                  <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->
          
                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column centered padded-medium">
                  <!-- TABLE HEADER TITLE -->
                  <p class="table-header-title">Data Início</p>
                  <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->
          
                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column centered padded-medium">
                  <!-- TABLE HEADER TITLE -->
                  <p class="table-header-title">Data Fim</p>
                  <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->
          
                <!-- TABLE HEADER COLUMN -->
                <div class="table-header-column padded-big-left">
                  <!-- TABLE HEADER TITLE -->
                  <!-- <p class="table-header-title">Activity</p> -->
                  <!-- /TABLE HEADER TITLE -->
                </div>
                <!-- /TABLE HEADER COLUMN -->
              </div>
              <!-- /TABLE HEADER -->
          
              <!-- TABLE BODY -->
              <div class="table-body">
                <!-- TABLE ROW -->
                <div class="table-row medium">
                  <!-- TABLE COLUMN -->
                  <div class="table-column">
                    <!-- DISCUSSION PREVIEW -->
                    <div class="discussion-preview">
          
                      <!-- DISCUSSION PREVIEW META -->
                      <div class="discussion-preview-meta">
          
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text">
                          <a href="profile-timeline.html">Analise e Desenvolvimento de Sistemas</a>
                          <span class="separator">-</span>
                          <a class="highlighted" href="forums-category.html">Unisinos</a>
                        </p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
                      </div>
                      <!-- /DISCUSSION PREVIEW META -->
                    </div>
                    <!-- /DISCUSSION PREVIEW -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">18/10/2001</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">01/05/2020</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column padded-big-left">
                    <!-- USER STATUS -->
                    <div class="user-status">
                      <!-- USER STATUS AVATAR -->
                      <a class="user-status-avatar" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                      
                          <!-- USER AVATAR PROGRESS -->
                          <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS -->
                      
                          <!-- USER AVATAR PROGRESS BORDER -->
                          <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS BORDER -->
                      
                          <!-- USER AVATAR BADGE -->
                          <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                              <!-- HEXAGON -->
                              <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->
                      
                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                              <!-- HEXAGON -->
                              <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->
                      
                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">6</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                          </div>
                          <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                      </a>
                      <!-- /USER STATUS AVATAR -->
                  
                      <!-- USER STATUS TITLE -->
                      <p class="user-status-title"><a class="bold" href="profile-timeline.html">Bearded Wonder</a></p>
                      <!-- /USER STATUS TITLE -->
                  
                      <!-- USER STATUS TEXT -->
                      <p class="user-status-text small">3 hours, 22 minutes ago</p>
                      <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->
                  </div>
                  <!-- /TABLE COLUMN -->
                </div>
                <!-- /TABLE ROW -->

                <!-- TABLE ROW -->
                <div class="table-row medium">
                  <!-- TABLE COLUMN -->
                  <div class="table-column">
                    <!-- DISCUSSION PREVIEW -->
                    <div class="discussion-preview">
                      <!-- DISCUSSION PREVIEW TITLE -->
                      <a class="discussion-preview-title" href="forums-discussion.html">I played the new "Monstermon: Vibranium" and it's awesome!</a>
                      <!-- /DISCUSSION PREVIEW TITLE -->
          
                      <!-- DISCUSSION PREVIEW META -->
                      <div class="discussion-preview-meta">
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text">Started by</p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
          
                        <!-- USER AVATAR -->
                        <a class="user-avatar micro no-border" href="profile-timeline.html">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg" style="width: 18px; height: 20px; position: relative;"><canvas width="18" height="20" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </a>
                        <!-- /USER AVATAR -->
          
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Marina Valentine</a> 6 hours ago<span class="separator">-</span><a class="highlighted" href="forums-category.html">The Arcade</a></p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
                      </div>
                      <!-- /DISCUSSION PREVIEW META -->
                    </div>
                    <!-- /DISCUSSION PREVIEW -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">7</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">19</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column padded-big-left">
                    <!-- USER STATUS -->
                    <div class="user-status">
                      <!-- USER STATUS AVATAR -->
                      <a class="user-status-avatar" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                      
                          <!-- USER AVATAR PROGRESS -->
                          <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS -->
                      
                          <!-- USER AVATAR PROGRESS BORDER -->
                          <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS BORDER -->
                      
                          <!-- USER AVATAR BADGE -->
                          <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                              <!-- HEXAGON -->
                              <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->
                      
                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                              <!-- HEXAGON -->
                              <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->
                      
                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">16</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                          </div>
                          <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                      </a>
                      <!-- /USER STATUS AVATAR -->
                  
                      <!-- USER STATUS TITLE -->
                      <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
                      <!-- /USER STATUS TITLE -->
                  
                      <!-- USER STATUS TEXT -->
                      <p class="user-status-text small">23 minutes ago</p>
                      <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->
                  </div>
                  <!-- /TABLE COLUMN -->
                </div>
                <!-- /TABLE ROW -->

                <!-- TABLE ROW -->
                <div class="table-row medium">
                  <!-- TABLE COLUMN -->
                  <div class="table-column">
                    <!-- DISCUSSION PREVIEW -->
                    <div class="discussion-preview">
                      <!-- DISCUSSION PREVIEW TITLE -->
                      <a class="discussion-preview-title" href="forums-discussion.html">What do you like and dislike about the new forum looks?</a>
                      <!-- /DISCUSSION PREVIEW TITLE -->
          
                      <!-- DISCUSSION PREVIEW META -->
                      <div class="discussion-preview-meta">
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text">Started by</p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
          
                        <!-- USER AVATAR -->
                        <a class="user-avatar micro no-border" href="profile-timeline.html">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg" style="width: 18px; height: 20px; position: relative;"><canvas width="18" height="20" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </a>
                        <!-- /USER AVATAR -->
          
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Marina Valentine</a> 1 day ago<span class="separator">-</span><a class="highlighted" href="forums-category.html">Community Hangout</a></p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
                      </div>
                      <!-- /DISCUSSION PREVIEW META -->
                    </div>
                    <!-- /DISCUSSION PREVIEW -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">36</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">57</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column padded-big-left">
                    <!-- USER STATUS -->
                    <div class="user-status">
                      <!-- USER STATUS AVATAR -->
                      <a class="user-status-avatar" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                      
                          <!-- USER AVATAR PROGRESS -->
                          <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS -->
                      
                          <!-- USER AVATAR PROGRESS BORDER -->
                          <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS BORDER -->
                      
                          <!-- USER AVATAR BADGE -->
                          <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                              <!-- HEXAGON -->
                              <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->
                      
                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                              <!-- HEXAGON -->
                              <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->
                      
                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">24</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                          </div>
                          <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                      </a>
                      <!-- /USER STATUS AVATAR -->
                  
                      <!-- USER STATUS TITLE -->
                      <p class="user-status-title"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
                      <!-- /USER STATUS TITLE -->
                  
                      <!-- USER STATUS TEXT -->
                      <p class="user-status-text small">42 minutes ago</p>
                      <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->
                  </div>
                  <!-- /TABLE COLUMN -->
                </div>
                <!-- /TABLE ROW -->

                <!-- TABLE ROW -->
                <div class="table-row medium">
                  <!-- TABLE COLUMN -->
                  <div class="table-column">
                    <!-- DISCUSSION PREVIEW -->
                    <div class="discussion-preview">
                      <!-- DISCUSSION PREVIEW TITLE -->
                      <a class="discussion-preview-title" href="forums-discussion.html">Let's post photos of our workspaces!</a>
                      <!-- /DISCUSSION PREVIEW TITLE -->
          
                      <!-- DISCUSSION PREVIEW META -->
                      <div class="discussion-preview-meta">
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text">Started by</p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
          
                        <!-- USER AVATAR -->
                        <a class="user-avatar micro no-border" href="profile-timeline.html">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg" style="width: 18px; height: 20px; position: relative;"><canvas width="18" height="20" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </a>
                        <!-- /USER AVATAR -->
          
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Marina Valentine</a> 3 days ago<span class="separator">-</span><a class="highlighted" href="forums-category.html">Community Hangout</a></p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
                      </div>
                      <!-- /DISCUSSION PREVIEW META -->
                    </div>
                    <!-- /DISCUSSION PREVIEW -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">22</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">31</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column padded-big-left">
                    <!-- USER STATUS -->
                    <div class="user-status">
                      <!-- USER STATUS AVATAR -->
                      <a class="user-status-avatar" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                      
                          <!-- USER AVATAR PROGRESS -->
                          <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS -->
                      
                          <!-- USER AVATAR PROGRESS BORDER -->
                          <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS BORDER -->
                      
                          <!-- USER AVATAR BADGE -->
                          <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                              <!-- HEXAGON -->
                              <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->
                      
                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                              <!-- HEXAGON -->
                              <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->
                      
                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">12</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                          </div>
                          <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                      </a>
                      <!-- /USER STATUS AVATAR -->
                  
                      <!-- USER STATUS TITLE -->
                      <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a></p>
                      <!-- /USER STATUS TITLE -->
                  
                      <!-- USER STATUS TEXT -->
                      <p class="user-status-text small">1 hour, 35 minutes ago</p>
                      <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->
                  </div>
                  <!-- /TABLE COLUMN -->
                </div>
                <!-- /TABLE ROW -->

                <!-- TABLE ROW -->
                <div class="table-row medium">
                  <!-- TABLE COLUMN -->
                  <div class="table-column">
                    <!-- DISCUSSION PREVIEW -->
                    <div class="discussion-preview">
                      <!-- DISCUSSION PREVIEW TITLE -->
                      <a class="discussion-preview-title" href="forums-discussion.html">The new "Dragon Adventure" manga answers what happened with Spike</a>
                      <!-- /DISCUSSION PREVIEW TITLE -->
          
                      <!-- DISCUSSION PREVIEW META -->
                      <div class="discussion-preview-meta">
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text">Started by</p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
          
                        <!-- USER AVATAR -->
                        <a class="user-avatar micro no-border" href="profile-timeline.html">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg" style="width: 18px; height: 20px; position: relative;"><canvas width="18" height="20" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                        </a>
                        <!-- /USER AVATAR -->
          
                        <!-- DISCUSSION PREVIEW META TEXT -->
                        <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Marina Valentine</a> 1 week ago<span class="separator">-</span><a class="highlighted" href="forums-category.html">Anime &amp; Manga</a></p>
                        <!-- /DISCUSSION PREVIEW META TEXT -->
                      </div>
                      <!-- /DISCUSSION PREVIEW META -->
                    </div>
                    <!-- /DISCUSSION PREVIEW -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">40</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column centered padded-medium">
                    <!-- TABLE TITLE -->
                    <p class="table-title">105</p>
                    <!-- /TABLE TITLE -->
                  </div>
                  <!-- /TABLE COLUMN -->
          
                  <!-- TABLE COLUMN -->
                  <div class="table-column padded-big-left">
                    <!-- USER STATUS -->
                    <div class="user-status">
                      <!-- USER STATUS AVATAR -->
                      <a class="user-status-avatar" href="profile-timeline.html">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                          <!-- USER AVATAR CONTENT -->
                          <div class="user-avatar-content">
                            <!-- HEXAGON -->
                            <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR CONTENT -->
                      
                          <!-- USER AVATAR PROGRESS -->
                          <div class="user-avatar-progress">
                            <!-- HEXAGON -->
                            <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS -->
                      
                          <!-- USER AVATAR PROGRESS BORDER -->
                          <div class="user-avatar-progress-border">
                            <!-- HEXAGON -->
                            <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                            <!-- /HEXAGON -->
                          </div>
                          <!-- /USER AVATAR PROGRESS BORDER -->
                      
                          <!-- USER AVATAR BADGE -->
                          <div class="user-avatar-badge">
                            <!-- USER AVATAR BADGE BORDER -->
                            <div class="user-avatar-badge-border">
                              <!-- HEXAGON -->
                              <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE BORDER -->
                      
                            <!-- USER AVATAR BADGE CONTENT -->
                            <div class="user-avatar-badge-content">
                              <!-- HEXAGON -->
                              <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR BADGE CONTENT -->
                      
                            <!-- USER AVATAR BADGE TEXT -->
                            <p class="user-avatar-badge-text">16</p>
                            <!-- /USER AVATAR BADGE TEXT -->
                          </div>
                          <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                      </a>
                      <!-- /USER STATUS AVATAR -->
                  
                      <!-- USER STATUS TITLE -->
                      <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
                      <!-- /USER STATUS TITLE -->
                  
                      <!-- USER STATUS TEXT -->
                      <p class="user-status-text small">6 days ago</p>
                      <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->
                  </div>
                  <!-- /TABLE COLUMN -->
                </div>
                <!-- /TABLE ROW -->
              </div>
              <!-- /TABLE BODY -->
            </div>
            <?php } ?>
            <!-- /TABLE -->

            <div class="widget-box" style="margin-top: 15px">
              <!-- WIDGET BOX SETTINGS -->
              <div class="widget-box-settings">
                <!-- POST SETTINGS WRAP -->
                <div class="post-settings-wrap" style="position: relative;">
                  <!-- POST SETTINGS -->
                  <div class="post-settings widget-box-post-settings-dropdown-trigger">
                    <!-- POST SETTINGS ICON -->
                    <svg class="post-settings-icon icon-more-dots">
                      <use xlink:href="#svg-more-dots"></use>
                    </svg>
                    <!-- /POST SETTINGS ICON -->
                  </div>
                  <!-- /POST SETTINGS -->
          
                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown widget-box-post-settings-dropdown" style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 0; visibility: hidden; transform: translate(0px, -20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Widget Settings</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /POST SETTINGS WRAP -->
              </div>
              <!-- /WIDGET BOX SETTINGS -->
          
              <!-- WIDGET BOX TITLE -->
              <p class="widget-box-title">Jobs &amp; Education</p>
              <!-- /WIDGET BOX TITLE -->
          
              <!-- WIDGET BOX CONTENT -->
              <div class="widget-box-content">
                <!-- TIMELINE INFORMATION LIST -->
                <div class="timeline-information-list">
                  <!-- TIMELINE INFORMATION -->
                  <div class="timeline-information">
                    <!-- TIMELINE INFORMATION TITLE -->
                    <p class="timeline-information-title">Lead Costume Designer</p>
                    <!-- /TIMELINE INFORMATION TITLE -->
          
                    <!-- TIMELINE INFORMATION DATE -->
                    <p class="timeline-information-date">2015 - NOW</p>
                    <!-- /TIMELINE INFORMATION DATE -->
          
                    <!-- TIMELINE INFORMATION TEXT -->
                    <p class="timeline-information-text">Lead Costume Designer for the "Amazzo Costumes" agency. I'm in charge of a ten person group, overseeing all the proyects and talking to potential clients. I also handle some face to face interviews for new candidates.</p>
                    <!-- /TIMELINE INFORMATION TEXT -->
                  </div>
                  <!-- /TIMELINE INFORMATION -->
          
                  <!-- TIMELINE INFORMATION -->
                  <div class="timeline-information">
                    <!-- TIMELINE INFORMATION TITLE -->
                    <p class="timeline-information-title">Costume Designer</p>
                    <!-- /TIMELINE INFORMATION TITLE -->
          
                    <!-- TIMELINE INFORMATION DATE -->
                    <p class="timeline-information-date">2013 - 2015</p>
                    <!-- /TIMELINE INFORMATION DATE -->
          
                    <!-- TIMELINE INFORMATION TEXT -->
                    <p class="timeline-information-text">Costume Designer for the "Jenny Taylors" agency. Was in charge of working side by side with the best designers in order to complete and perfect orders.</p>
                    <!-- /TIMELINE INFORMATION TEXT -->
                  </div>
                  <!-- /TIMELINE INFORMATION -->
          
                  <!-- TIMELINE INFORMATION -->
                  <div class="timeline-information">
                    <!-- TIMELINE INFORMATION TITLE -->
                    <p class="timeline-information-title">Designer Intern</p>
                    <!-- /TIMELINE INFORMATION TITLE -->
          
                    <!-- TIMELINE INFORMATION DATE -->
                    <p class="timeline-information-date">2012 - 2013</p>
                    <!-- /TIMELINE INFORMATION DATE -->
          
                    <!-- TIMELINE INFORMATION TEXT -->
                    <p class="timeline-information-text">Intern for the "Jenny Taylors" agency. Was in charge of the communication with the clients and day-to-day chores.</p>
                    <!-- /TIMELINE INFORMATION TEXT -->
                  </div>
                  <!-- /TIMELINE INFORMATION -->
          
                  <!-- TIMELINE INFORMATION -->
                  <div class="timeline-information">
                    <!-- TIMELINE INFORMATION TITLE -->
                    <p class="timeline-information-title">The Antique College of Design</p>
                    <!-- /TIMELINE INFORMATION TITLE -->
          
                    <!-- TIMELINE INFORMATION DATE -->
                    <p class="timeline-information-date">2007 - 2012</p>
                    <!-- /TIMELINE INFORMATION DATE -->
          
                    <!-- TIMELINE INFORMATION TEXT -->
                    <p class="timeline-information-text">Bachelor of Costume Design in the Antique College. It was a five years intensive career, plus a course about Cosplays. Average: A+</p>
                    <!-- /TIMELINE INFORMATION TEXT -->
                  </div>
                  <!-- /TIMELINE INFORMATION -->
                </div>
                <!-- /TIMELINE INFORMATION LIST -->
              </div>
              <!-- /WIDGET BOX CONTENT -->
            </div>
            <!-- /OTHER TRY -->


          <!-- /REGISTROS -->

        </div>
        <!-- /GRID COLUMN -->
      <!-- /EDUCAÇÃO -->


      <!-- EXPERIENCIA -->
        <!-- GRID COLUMN -->
        <div class="account-hub-content" id="experiencia" style="display: none;">


          <!-- TÍTULO -->
          <div class="section-header">
            <!-- SECTION HEADER INFO -->
            <div class="section-header-info">
              <!-- SECTION PRETITLE -->
              <p class="section-pretitle">Formação academica</p>
              <!-- /SECTION PRETITLE -->

              <!-- SECTION TITLE -->
              <h2 class="section-title">
                <svg viewBox="0 0 640 512" class="sidebar-menu-header-icon icon-settings">
                  <path d="M623.1 136.9l-282.7-101.2c-13.73-4.91-28.7-4.91-42.43 0L16.05 136.9C6.438 140.4 0 149.6 0 160s6.438 19.65 16.05 23.09L76.07 204.6c-11.89 15.8-20.26 34.16-24.55 53.95C40.05 263.4 32 274.8 32 288c0 9.953 4.814 18.49 11.94 24.36l-24.83 149C17.48 471.1 25 480 34.89 480H93.11c9.887 0 17.41-8.879 15.78-18.63l-24.83-149C91.19 306.5 96 297.1 96 288c0-10.29-5.174-19.03-12.72-24.89c4.252-17.76 12.88-33.82 24.94-47.03l190.6 68.23c13.73 4.91 28.7 4.91 42.43 0l282.7-101.2C633.6 179.6 640 170.4 640 160S633.6 140.4 623.1 136.9zM351.1 314.4C341.7 318.1 330.9 320 320 320c-10.92 0-21.69-1.867-32-5.555L142.8 262.5L128 405.3C128 446.6 213.1 480 320 480c105.1 0 192-33.4 192-74.67l-14.78-142.9L351.1 314.4z"/>
                </svg> 
                Educação
              </h2>
              <!-- /SECTION TITLE -->
            </div>
            <!-- /SECTION HEADER INFO -->
          </div>
          <!-- /TÍTULO -->

          <!-- GRID COLUMN -->
          <div class="grid-column">

            <!-- WIDGET BOX -->
            <div class="widget-box">
              <!-- WIDGET BOX TITLE -->
              <p class="widget-box-title">Educação</p>
              <!-- /WIDGET BOX TITLE -->
          
              <!-- WIDGET BOX CONTENT -->
              <div class="widget-box-content">
                <!-- FORM -->
                <form class="form">
                  <!-- FORM ROW -->
                  <div class="form-row split">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="profile-job-1-title">Curso</label>
                        <input type="text" id="profile-job-1-title" name="profile_job_1_title">
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small active">
                        <label for="profile-job-1-title">Local</label>
                        <input type="text" id="profile-job-1-title" name="profile_job_1_title">
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ROW -->
                    <div class="form-row split">
                      <div class="form-item">
                        <!-- FORM INPUT DECORATED -->
                        <div class="form-input-decorated">
                          <!-- FORM INPUT -->
                          <div class="form-input small active">
                            <label for="profile-birthday">Data de início</label>
                            <input type="text" id="profile-birthday" name="profile_birthday" value="August 24th, 1987">
                          </div>
                          <!-- /FORM INPUT -->
              
                          <!-- FORM INPUT ICON -->
                          <svg class="form-input-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                          </svg>
                          <!-- /FORM INPUT ICON -->
                        </div>
                        <!-- /FORM INPUT DECORATED -->
                      </div>

                      <div class="form-item">
                        <!-- FORM INPUT DECORATED -->
                        <div class="form-input-decorated">
                          <!-- FORM INPUT -->
                          <div class="form-input small active">
                            <label for="profile-birthday">Data do fim</label>
                            <input type="text" id="profile-birthday" name="profile_birthday" value="August 24th, 1987">
                          </div>
                          <!-- /FORM INPUT -->
              
                          <!-- FORM INPUT ICON -->
                          <svg class="form-input-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                          </svg>
                          <!-- /FORM INPUT ICON -->
                        </div>
                        <!-- /FORM INPUT DECORATED -->
                      </div>
                    </div>
                    <!-- /FORM ROW -->
                  </div>
                  <!-- /FORM ROW -->

                  <!-- FORM ROW -->
                  <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM INPUT -->
                      <div class="form-input small mid-textarea active">
                        <label for="profile-job-1-description">Descrição</label>
                        <textarea id="profile-job-1-description" name="profile_job_1_description"></textarea>
                      </div>
                      <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->
                  
                </form>
                <!-- /FORM -->

                <!-- BUTTON -->
                <p class="button small white add-field-button">Adicionar</p>
                <!-- /BUTTON -->
              </div>
              <!-- WIDGET BOX CONTENT -->
            </div>
            <!-- /WIDGET BOX -->
          </div>
          <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID COLUMN -->
      <!-- /EXPERIENCIA -->



    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

<!-- js -->
<script src="../assets/js/javascript.js"></script>
<!-- app -->
<script src="../assets/js/utils/app.js"></script>
<!-- page loader -->
<script src="../assets/js/utils/page-loader.js"></script>
<!-- simplebar -->
<script src="../assets/js/vendor/simplebar.min.js"></script>
<!-- liquidify -->
<script src="../assets/js/utils/liquidify.js"></script>
<!-- XM_Plugins -->
<script src="../assets/js/vendor/xm_plugins.min.js"></script>
<!-- global.hexagons -->
<script src="../assets/js/global/global.hexagons.js"></script>
<!-- global.tooltips -->
<script src="../assets/js/global/global.tooltips.js"></script>
<!-- global.accordions -->
<script src="../assets/js/global/global.accordions.js"></script>
<!-- header -->
<script src="../assets/js/header/header.js"></script>
<!-- sidebar -->
<script src="../assets/js/sidebar/sidebar.js"></script>
<!-- content -->
<script src="../assets/js/content/content.js"></script>
<!-- form.utils -->
<script src="../assets/js/form/form.utils.js"></script>
<!-- SVG icons -->
<script src="../assets/js/utils/svg-loader.js"></script>
</body>
</html>