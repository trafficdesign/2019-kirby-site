<header class="Topbar<?php if($page->isHomePage()): ?> is-home theme--dark<?php endif ?>" id="topbar">
  <div class="TopbarHd">
    <a href="<?= url() ?>" class="TopbarBrandmark" rel="home">
      <img alt="<?= $site->title()->html() ?>" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNTVweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgNTUgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDU1LjIgKDc4MTgxKSAtIGh0dHBzOi8vc2tldGNoYXBwLmNvbSAtLT4KICAgIDx0aXRsZT5Db21iaW5lZCBTaGFwZTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxwYXRoIGQ9Ik0wLjQsMC41IEw1NC43LDAuNSBMNTQuNywzNS4xOSBMMC40LDM1LjE5IEwwLjQsMC41IFogTTUyLjYsMS41IEwxLjQsMS41IEwxLjQsMzMuNTkgTDUyLjYsMS41IFogTTIuMzYsMzQuMTkgTDUzLjcsMzQuMTkgTDUzLjcsMi4wNSBMMi4zNiwzNC4xOSBaIE02LjkxLDYuNDkgTDQuMTQsNi40OSBMNC4xNCw0LjQ5IEwxMiw0LjQ5IEwxMiw2LjQ5IEw5LjIzLDYuNDkgTDkuMjMsMTcuNDMgTDYuOTEsMTcuNDMgTDYuOTEsNi40OSBaIE00MywxOC4zMyBMNDYuMzgsMTguMzMgQzQ5LjcxLDE4LjMzIDUxLjAxLDIwLjQ3IDUxLjAxLDI0LjU1IEM1MS4wMSwyOC45MyA0OS43NywzMS4zIDQ2LjIsMzEuMyBMNDMsMzEuMyBMNDMsMTguMzMgWiBNNDUuMywyOS40IEw0Ni4xMywyOS40IEM0Ny45NSwyOS40IDQ4LjU3LDI4LjA0IDQ4LjU3LDI0LjU2IEM0OC41NywyMS41NiA0OC4wMiwyMC4yNiA0Ni4xNSwyMC4yNiBMNDUuMywyMC4yNiBMNDUuMywyOS40IFoiIGlkPSJDb21iaW5lZC1TaGFwZSIgZmlsbD0iIzAwMDAwMCIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+CiAgICA8L2c+Cjwvc3ZnPg==" class="logo--dark">
      <img alt="<?= $site->title()->html() ?>" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNTVweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgNTUgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDU1LjIgKDc4MTgxKSAtIGh0dHBzOi8vc2tldGNoYXBwLmNvbSAtLT4KICAgIDx0aXRsZT5Db21iaW5lZCBTaGFwZTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxwYXRoIGQ9Ik0wLjQsMC41IEw1NC43LDAuNSBMNTQuNywzNS4xOSBMMC40LDM1LjE5IEwwLjQsMC41IFogTTUyLjYsMS41IEwxLjQsMS41IEwxLjQsMzMuNTkgTDUyLjYsMS41IFogTTIuMzYsMzQuMTkgTDUzLjcsMzQuMTkgTDUzLjcsMi4wNSBMMi4zNiwzNC4xOSBaIE02LjkxLDYuNDkgTDQuMTQsNi40OSBMNC4xNCw0LjQ5IEwxMiw0LjQ5IEwxMiw2LjQ5IEw5LjIzLDYuNDkgTDkuMjMsMTcuNDMgTDYuOTEsMTcuNDMgTDYuOTEsNi40OSBaIE00MywxOC4zMyBMNDYuMzgsMTguMzMgQzQ5LjcxLDE4LjMzIDUxLjAxLDIwLjQ3IDUxLjAxLDI0LjU1IEM1MS4wMSwyOC45MyA0OS43NywzMS4zIDQ2LjIsMzEuMyBMNDMsMzEuMyBMNDMsMTguMzMgWiBNNDUuMywyOS40IEw0Ni4xMywyOS40IEM0Ny45NSwyOS40IDQ4LjU3LDI4LjA0IDQ4LjU3LDI0LjU2IEM0OC41NywyMS41NiA0OC4wMiwyMC4yNiA0Ni4xNSwyMC4yNiBMNDUuMywyMC4yNiBMNDUuMywyOS40IFoiIGlkPSJDb21iaW5lZC1TaGFwZSIgZmlsbD0iI0ZGRkZGRiIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+CiAgICA8L2c+Cjwvc3ZnPg==" class="logo--white">
    </a>
    <a class="TopbarModalToggle td-link" id="modalOpen">
      <i class="icon-menu"></i>
    </a>
    <a class="TopbarModalToggle td-link" id="modalClose" style="display: none">
      <i class="icon-menu"></i>
    </a>
  </div>
  <div class="TopbarBd">
    <nav class="TopbarNav" role="navigation">
      <ul class="TopbarMenu">
        <?php foreach($pages->visible() as $item): ?>
        <li class="TopbarMenuItem">
          <a href="<?= $item->url() ?>" class="td-link<?= r($item->isOpen(), ' is-active') ?>"><?= $item->title()->html() ?></a>
        </li>
        <?php endforeach ?>
        <li class="TopbarMenuItem">
          <a class="td-link" href="http://trafficdesign.shoplo.com/" target="_blank"><?= l::get('nav-linkto-shop') ?></a>
        </li>
        <li class="TopbarMenuItem">
          <a class="td-link" href="https://trafficdesign.prowly.com/" target="_blank"><?= l::get('nav-linkto-media') ?></a>
        </li>
      </ul>
    </nav>
    <a href="<?= url() ?>" class="TopbarBrandmark" rel="home">
      <img alt="<?= $site->title()->html() ?>" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNTVweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgNTUgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDU1LjIgKDc4MTgxKSAtIGh0dHBzOi8vc2tldGNoYXBwLmNvbSAtLT4KICAgIDx0aXRsZT5Db21iaW5lZCBTaGFwZTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxwYXRoIGQ9Ik0wLjQsMC41IEw1NC43LDAuNSBMNTQuNywzNS4xOSBMMC40LDM1LjE5IEwwLjQsMC41IFogTTUyLjYsMS41IEwxLjQsMS41IEwxLjQsMzMuNTkgTDUyLjYsMS41IFogTTIuMzYsMzQuMTkgTDUzLjcsMzQuMTkgTDUzLjcsMi4wNSBMMi4zNiwzNC4xOSBaIE02LjkxLDYuNDkgTDQuMTQsNi40OSBMNC4xNCw0LjQ5IEwxMiw0LjQ5IEwxMiw2LjQ5IEw5LjIzLDYuNDkgTDkuMjMsMTcuNDMgTDYuOTEsMTcuNDMgTDYuOTEsNi40OSBaIE00MywxOC4zMyBMNDYuMzgsMTguMzMgQzQ5LjcxLDE4LjMzIDUxLjAxLDIwLjQ3IDUxLjAxLDI0LjU1IEM1MS4wMSwyOC45MyA0OS43NywzMS4zIDQ2LjIsMzEuMyBMNDMsMzEuMyBMNDMsMTguMzMgWiBNNDUuMywyOS40IEw0Ni4xMywyOS40IEM0Ny45NSwyOS40IDQ4LjU3LDI4LjA0IDQ4LjU3LDI0LjU2IEM0OC41NywyMS41NiA0OC4wMiwyMC4yNiA0Ni4xNSwyMC4yNiBMNDUuMywyMC4yNiBMNDUuMywyOS40IFoiIGlkPSJDb21iaW5lZC1TaGFwZSIgZmlsbD0iIzAwMDAwMCIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+CiAgICA8L2c+Cjwvc3ZnPg==" class="logo--dark">
      <img alt="<?= $site->title()->html() ?>" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNTVweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgNTUgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDU1LjIgKDc4MTgxKSAtIGh0dHBzOi8vc2tldGNoYXBwLmNvbSAtLT4KICAgIDx0aXRsZT5Db21iaW5lZCBTaGFwZTwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxwYXRoIGQ9Ik0wLjQsMC41IEw1NC43LDAuNSBMNTQuNywzNS4xOSBMMC40LDM1LjE5IEwwLjQsMC41IFogTTUyLjYsMS41IEwxLjQsMS41IEwxLjQsMzMuNTkgTDUyLjYsMS41IFogTTIuMzYsMzQuMTkgTDUzLjcsMzQuMTkgTDUzLjcsMi4wNSBMMi4zNiwzNC4xOSBaIE02LjkxLDYuNDkgTDQuMTQsNi40OSBMNC4xNCw0LjQ5IEwxMiw0LjQ5IEwxMiw2LjQ5IEw5LjIzLDYuNDkgTDkuMjMsMTcuNDMgTDYuOTEsMTcuNDMgTDYuOTEsNi40OSBaIE00MywxOC4zMyBMNDYuMzgsMTguMzMgQzQ5LjcxLDE4LjMzIDUxLjAxLDIwLjQ3IDUxLjAxLDI0LjU1IEM1MS4wMSwyOC45MyA0OS43NywzMS4zIDQ2LjIsMzEuMyBMNDMsMzEuMyBMNDMsMTguMzMgWiBNNDUuMywyOS40IEw0Ni4xMywyOS40IEM0Ny45NSwyOS40IDQ4LjU3LDI4LjA0IDQ4LjU3LDI0LjU2IEM0OC41NywyMS41NiA0OC4wMiwyMC4yNiA0Ni4xNSwyMC4yNiBMNDUuMywyMC4yNiBMNDUuMywyOS40IFoiIGlkPSJDb21iaW5lZC1TaGFwZSIgZmlsbD0iI0ZGRkZGRiIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+CiAgICA8L2c+Cjwvc3ZnPg==" class="logo--white">
    </a>
  </div>
  <div class="TopbarFt">
    <nav class="languages" role="navigation'">
      <ul>
      <?php foreach($site->languages() as $language): ?>
        <li<?php e($site->language() == $language, ' style="display: none;"') ?>>
          <a style="text-transform: uppercase;" class="td-link" href="<?php e($page->content($language->code())->language() != $site->language($language->code()), page('error')->url($language->code()), $page->url($language->code()))?>"><?= $language->code(); ?></a>
        </li>
      <?php endforeach ?>
      </ul>
    </nav>
  </div>
</header>
