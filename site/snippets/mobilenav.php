<div id="mobileMenu" aria-hidden="true" class="modal fade-in">

  <div tabindex="-1" data-micromodal-close>

    <div role="dialog" aria-modal="true" aria-labelledby="modal-1-title" >

      <div id="mobileMenu-content">
        <ul class="MobileMenuItems">
          <?php foreach($pages->visible() as $item): ?>
          <li class="MobileMenuItem">
            <a href="<?= $item->url() ?>" class="Link<?= r($item->isOpen(), ' is-active') ?>"><?= $item->title()->html() ?></a>
          </li>
          <?php endforeach ?>
          <li class="MobileMenuItem">
            <a class="Link" href="http://trafficdesign.shoplo.com/" target="_blank"><?= l::get('nav-linkto-shop') ?></a>
          </li>
          <li class="MobileMenuItem">
            <a class="Link" href="https://trafficdesign.prowly.com/" target="_blank"><?= l::get('nav-linkto-media') ?></a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</div>
