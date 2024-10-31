<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://segurospromo.com.br
 * @since      1.0.0
 *
 * @package    Seguros_Promo
 * @subpackage Seguros_Promo/public/partials
 */
?>

<div class="button-popup-seguros-promo">
    <a target="_blank" href="https://www.segurospromo.com.br/?utm_source=site-blog&utm_medium=afiliado&pcrtt=formulariomodalblog&pcrid=<?php echo $affiliate_id ?>">
    <button onclick="openFrameSegurosPromo()">
        <svg alt="Faça cotação de seguro viagem no Seguros Promo" id="image-digit" width="36" height="38" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" d="M35.4828 26.0672L21.3933 12.2689L0 12.2439L14.1125 26.0672H35.4828Z" fill="#9E9E9E" />
            <path d="M31.1202 5.49807C27.5941 1.98117 22.7729 0 17.7406 0C12.7083 0 7.88708 1.98117 4.36103 5.49807C2.4286 7.41463 0.941085 9.71701 0 12.2481H35.4812C34.5401 9.71701 33.0526 7.41463 31.1202 5.49807Z" fill="#9E9E9E" />
            <path d="M0 26.0673C0.961159 28.449 2.44636 30.5941 4.34995 32.3498C11.7456 39.2139 23.7371 39.2139 31.1328 32.3498C33.0364 30.5941 34.5216 28.449 35.4828 26.0673L0 26.0673Z" fill="#9E9E9E" />
        </svg>

        <span id="text-digit-popup">Pesquisar seguro viagem</span>
    </button>
    </a>
</div>
