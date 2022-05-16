<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

  <div class="menu_section">
    <h3>General</h3>
    <?=
    \yiister\gentelella\widgets\Menu::widget(
      [
        "items" => [
          ["label" => "Home", "url" => "site/index", "icon" => "home"],
          ["label" => "Personal", "url" => ["personal/index"], "icon" => "fas fa-user"],
          [
            "label" => "Pegawai",
            "icon" => "fas fa-users",
            "url" => "#",
            "items" => [
              ["label" => "Data Pegawai", "url" => ["pegawai/index"]],
              ["label" => "Berkas Pegawai", "url" => ["berkas-pegawai/index"]],
            ],
          ],
        ],
      ]
    )
    ?>
  </div>

</div>