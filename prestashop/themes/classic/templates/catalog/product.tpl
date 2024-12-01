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
    {block name='page_header'}
    <h1 class="custom_product_title">{block name='page_title'}{$product.name}{/block}</h1>
  {/block}
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

          {/block}

            {block name='product_quantities'}
            {if $product.show_quantities}
              <div class="product-quantities" style="font-size:1.2em;">
                <span class="label">{l s='Dostępność:' d='Shop.Theme.Catalog'}</span>
                <span style="margin-left:15px;" data-stock="{$product.quantity}" data-allow-oosp="{$product.allow_oosp}">{$product.quantity} {$product.quantity_label}</span>
              </div>
            {/if}

            {if $product.quantity > 0}
                <div class="availability" style="font-size:1.2em;">
                  <span class="label"> Wysyłka w: <span style="margin-left: 23px;"> 48 godzin </span> </span>
                </div>
            {else}
                <div class="availability" style="font-size:1.2em;">
                  <span class="label">{l s='Dostępność: niedostępny - napisz lub zadzwoń'}</span>
                </div>
            {/if}

            

          {/block}

          {block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
          {/block}

          <div class="product-information">
            {block name='product_description_short'}
              <div id="product-description-short-{$product.id}" class="product-description">{$product.description_short nofilter}</div>
            {/block}

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

                  {block name='product_additional_info'}
                    {include file='catalog/_partials/product-additional-info.tpl'}
                  {/block}

                  {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                  {block name='product_refresh'}{/block}
                </form>
              {/block}

            </div>

            {block name='product_tabs'}
              <div class="tabs">


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

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer js-content-wrapper right-column col-xs-12 col-sm-8 col-md-9">
        {block name='page_footer'}

          <div id="tab-content">
              {block name='product_description'}
                {if $product.description}
                  <div class="custom_description_title">
                    <h2>{l s='Description' d='Shop.Theme.Catalog'}</h2>
                  </div>
                  <div style="margin-bottom:20px;"> </div>
                    <div style="margin-left: 10px;"> 
                      {$product.description nofilter} 
                    </div>
                  
                {/if}
              {/block}
              
              {if !empty($product.specific_references) || !empty($product.features)}
                {block name='product_details'}
                  <div class="product-details">

                  <div class="custom_description_title" style="margin-top:70px; ">
                    <h2>{l s='Product Details' d='Shop.Theme.Catalog'}</h2>
                  </div>
                  <div style="margin-bottom:20px;"> </div>
                    {include file='catalog/_partials/product-details.tpl'}
                  </div>
                {/block}
              {else}
                <div style="margin-bottom:150px;"> </div>
              {/if}



              
            </div>
        {/block}

      </footer>
    {/block}
  </section>

{/block}
