{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{extends file=$layout}

{block name='head' append}
  <meta property="og:type" content="product">

  <script>

    document.addEventListener("DOMContentLoaded", function() {
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
    });
    
  </script>
  
  {if $product.cover}
    <meta property="og:image" content="{$product.cover.large.url}">
  {/if}

  {if $product.show_price}
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
  {/if}
  {if isset($product.weight) && ($product.weight != 0)}
    <meta property="product:weight:value" content="{$product.weight}">
    <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='head_microdata_special'}
  {include file='_partials/microdata/product-jsonld.tpl'}
{/block}


{block name='content'}

  <section id="main">
    <meta content="{$product.url}">

    <div class="row product-container js-product-container">
      <div class="col-md-6">
        {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}
              {include file='catalog/_partials/product-flags.tpl'}

              {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
              <div class="scroll-box-arrows">
                <i class="material-icons left">&#xE314;</i>
                <i class="material-icons right">&#xE315;</i>
              </div>
            {/block}
          </section>
        {/block}
        </div>
        <div class="col-md-6">
          {block name='page_header_container'}
            {block name='page_header'}
              <div class="janek-header-product">
                <div class="janek-header-name-status">
                  <h1 class="h1">{block name='page_title'}{$product.name}{/block}</h1>
                  <div class="janek-flexbox-product-container">
                    <div id='product-availability'>
                      {if $product.availability == 'available'}
                        <span>
                          <i class="fa fa-check rtl-no-flip mr-2" aria-hidden="true"></i>
                          <span>Dostępny</span>
                        </span>
                      {/if}
                    </div>
                    {block name='product_additional_info'}
                      {include file='catalog/_partials/product-additional-info.tpl'}
                    {/block}
                  </div>
                </div>
                {if isset($manufacturer_image_url)}
                  <a href="{$product_brand_url}">
                    <img src="{$manufacturer_image_url}" class="img img-thumbnail manufacturer-logo" />
                  </a>
                {else}
                  <label class="label">{l s='Brand' d='Shop.Theme.Catalog'}</label>
                  <span>
                    <a href="{$product_brand_url}">{$product_manufacturer->name}</a>
                  </span>
                {/if}
              </div>
            {/block}
            
            
          {/block}
          <hr></hr>
          {block name='product_description_short'}
            <div id="product-description-short-{$product.id}" class="product-description">{$product.description_short nofilter}</div>
          {/block}
          {block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
          {/block}

          <div class="product-information">

            {if $product.is_customizable && count($product.customizations.fields)}
              {block name='product_customization'}
                {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
              {/block}
            {/if}

            <div class="product-actions js-product-actions">
              {block name='product_buy'}
                <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="{$static_token}">
                  <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id" class="js-product-customization-id">

                  {block name='product_variants'}
                    {include file='catalog/_partials/product-variants.tpl'}
                  {/block}

                  {block name='product_pack'}
                    {if $packItems}
                      <section class="product-pack">
                        <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
                        {foreach from=$packItems item="product_pack"}
                          {block name='product_miniature'}
                            {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack showPackProductsPrice=$product.show_price}
                          {/block}
                        {/foreach}
                    </section>
                    {/if}
                  {/block}

                  {block name='product_discounts'}
                    {include file='catalog/_partials/product-discounts.tpl'}
                  {/block}

                  {block name='product_add_to_cart'}
                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                  {/block}

                  {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                  {block name='product_refresh'}{/block}
                </form>
              {/block}

              

              <button class="accordion">Tylko oryginalne produkty w atrakcyjnej cenie</button>
              <div class="panel">
                <span>
                  <br>
                  <p>
                  W naszym sklepie internetowym otrzymają Państwo tylko oryginalne produkty na oficjalnej licencji. Nie jesteśmy producentem gadżetów. Wszystkie produkty pochodzą z oficjalnej dystrybucji światowej/europejskiej/polskiej. Nie sprzedajemy podróbek. Jesteśmy świadomi, że za oficjalnym kanałem dystrybucji, przede wszystkim stoi jakość wykonania i trwałość produktu. Wszystkie materiały użyte przez producenta posiadającego licencję są zdecydowanie lepszej jakości aniżeli tańsze imitacje. Dbamy o to aby w naszym sklepie nie było produktów niewiadomego źródła, a wszystkie licencjonowane gadżety, które oferujemy są zatwierdzone przez właściciela marki. 
                  </p>
                  <p>
                  Ponadto, dzięki naszej wieloletniej współpracy z wieloma cenionymi markami, producentami i dystrybutorami, jesteśmy w stanie zaoferować niezwykle atrakcyjne ceny na nasze produkty. Zapraszamy do zapoznania się z naszą ofertą, którą nieustannie staramy się poszerzać o nowe produkty, o nowych dystrybutorów, producentów a także i o nowe tematyki/uniwersa :).
                  </p>
                </span>
              </div>

              <button class="accordion">Statusy produktów</button>
              <div class="panel">
                <span>
                  <br>
                  <p class="black-statuses">Statusy produktów jakie możesz spotkać w naszym sklepie:</p>
                  <p><span class="janek-accessible">Dostępny</span> - produkt dostępny od ręki na naszym magazynie. Czas wysyłki 24-48 godzin.</p>
                  <p><span class="janek-presale">Przedsprzedaż</span> - produkt dostępny w przyszłości (data wskazana powyżej), czekamy na jego dostawę, można składać zamówienia. Więcej informacji.</p>
                  <p><span class="janek-special">Przedsprzedaż na specjalne zamówienie</span> - produkt dostępny w przyszłości (data wskazana powyżej), sprowadzamy go jedynie na specjalne zamówienie Klienta. Więcej informacji.</p>
                  <p><span class="janek-special-cute-purple">Specjalne zamówienie</span> - produkt dostępny u producenta/dystrybutora, sprowadzamy go jedynie na specjalne zamówienie Klienta. Więcej informacji.</p>
                  <p><span class="janek-unavailable">Niedostępny</span> - produkt wyprzedany bądź niedostępny już w sprzedaży. Możesz otrzymać powiadomienie o ponownej dostępności.</p>
                </span>
                
              </div>

              <button class="accordion">Zamówienie telefoniczne</button>
              <div class="panel">
                <br>
                <p>
                  Chcesz zaoszczędzić czas, bądź po prostu nie masz technicznej możliwości w danej chwili złożyć zamówienia na sklepie internetowym? Zapraszamy do kontaktu telefonicznego! Zamówienie możesz złożyć także telefonicznie.
                </p>
                <p>
                  Kontakt: +48 503 028 506.
                </p>
                <p>
                  Czekamy na Twój telefon codziennie, od poniedziałku do piątku w godzinach 8:00-21:00 oraz w sobotę i niedzielę w godzinach 10:00-20:00
                </p>
              </div>

            </div>
            
        </div>
      </div>
    </div>

    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase">{l s='You might also like' d='Shop.Theme.Catalog'}</p>
          <div class="products row">
            {foreach from=$accessories item="product_accessory" key="position"}
              {block name='product_miniature'}
                {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory position=$position productClasses="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}
              {/block}
            {/foreach}
          </div>
        </section>
      {/if}
    {/block}

    {block name='product_tabs'}
      <div class="tabs">
        <ul class="nav nav-tabs" role="tablist">
          {if $product.description}
            <li class="nav-item">
                <a
                  class="nav-link{if $product.description} active js-product-nav-active{/if}"
                  data-toggle="tab"
                  href="#description"
                  role="tab"
                  aria-controls="description"
                  {if $product.description} aria-selected="true"{/if}>Opis produktu</a>
            </li>
          {/if}
          <li class="nav-item">
            <a
              class="nav-link{if !$product.description} active js-product-nav-active{/if}"
              data-toggle="tab"
              href="#product-details"
              role="tab"
              aria-controls="product-details"
              {if !$product.description} aria-selected="true"{/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>
          </li>
          {if $product.attachments}
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#attachments"
                role="tab"
                aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
            </li>
          {/if}
          <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#extra-content"
                role="tab"
                aria-controls="extra-content"
                {if !$product.description} aria-selected="true" {/if}>
                Wysyłka
              </a>
          </li>
          {foreach from=$product.extraContent item=extra key=extraKey}
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#extra-{$extraKey}"
                role="tab"
                aria-controls="extra-{$extraKey}">{$extra.title}</a>
            </li>
          {/foreach}
        </ul>

        <div class="tab-content" id="tab-content">
          <div class="tab-pane fade in{if $product.description} active js-product-tab-active{/if}" id="description" role="tabpanel">
            {block name='product_description'}
              <div class="product-description">{$product.description nofilter}</div>
            {/block}
          </div>

          <div class="tab-pane fade" id="extra-content" role="tabpanel" aria-labelledby="extra-content-tab">
              <p>Brak dostępnych dostawców</p>
              <p><strong>Przy każdym zakupie powyżej 250,00 zł darmowa wysyłka!</strong></p>
          </div>

          {block name='product_details'}
            {include file='catalog/_partials/product-details.tpl'}
          {/block}

          {block name='product_attachments'}
            {if $product.attachments}
            <div class="tab-pane fade in" id="attachments" role="tabpanel">
                <section class="product-attachments">
                  <p class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</p>
                  {foreach from=$product.attachments item=attachment}
                    <div class="attachment">
                      <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                      <p>{$attachment.description}</p>
                      <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                        {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                      </a>
                    </div>
                  {/foreach}
                </section>
              </div>
            {/if}
          {/block}

          {foreach from=$product.extraContent item=extra key=extraKey}
          <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
            {$extra.content nofilter}
          </div>
          {/foreach}
        </div>
      </div>
    {/block}

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>

{/block}
