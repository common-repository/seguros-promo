(()=>{if(void 0===e&&""!=e){var o=jQuery;window.spromo_options_html,window.spromo_options_widget_html,jQuery.ajax({url:"https://www.segurospromo.com.br/emitir-seguros/v0/additional-info/great-for",method:"GET",headers:{Authorization:"Basic c2VndXJvc3Byb21vOnNlZ3Vyb3Nwcm9tbw=="},datatype:"json",success:function(e){window.spromo_options_html='<option value="" placeholder>Selecione a Região Ideal</option>',window.spromo_options_widget_html='<option value="" placeholder>Selecione a Região Ideal</option>';for(var n=0;n<e.length;n++)window.spromo_options_html+='<option value="'+e[n].id+'">'+e[n].name+"</option>",window.spromo_options_widget_html+='<option value="'+e[n].id+"||"+e[n].name+'">'+e[n].name+"</option>";o(".spromo-select-widget-greatfor").html(window.spromo_options_widget_html)}});var e='\n            <div id="spromo_custom_conf_overlay">\n\n    <div class="comp-plgconf">\n        <div class="comp-plgconf__title">\n            <strong>Afiliados Seguros Promo</strong>\n            <a href="https://wordpress.org/plugins/seguros-promo/" target="_blank" alt="ajuda" title="ajuda">AJUDA</a>\n        </div>\n        <div class="comp-plgconf__body">\n\n            <div class="comp-plgconf__body__cities">\n\n\n                <div class="comp-plgconf__body__cities__city">\n                    <div class="line-label">\n                        <strong class="title">Ideal Para\n                        </strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Destino ou região ideal para o seguro.</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n\n                    <div class="line-input">\n                        <select class="input-class spromo-ideal_para-ideal-para" name="spromo-ideal_para-ideal-para" id="spromo-ideal_para-ideal-para"></select>\n                    </div>\n                </div>\n\n\n                <div class="comp-plgconf__body__cities__city">\n                    <div class="line-label">\n                        <strong class="title">Tema\n                        </strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Selecione o modelo do seu comparador de preços.</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n\n                    <div class="line-input">\n                        <select class="input-class" name="spromo-theme" id="spromo-theme">\n                            <option value="card-large" selected>Card Grande (3 ofertas)</option>\n                            <option value="card-medium">Card Médio (2 ofertas)</option>\n                        </select>\n\n                    </div>\n                </div>\n\n            </div>\n\n            <div class="comp-plgconf__body__border__bt"></div>\n\n\n            <div class="comp-plgconf__body__cities">\n\n                <div class="comp-plgconf__body__cities__city" id="spromo-origin-field">\n                    <div class="line-label">\n                        <strong class="title">Tags</strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Use a tag para rastreio do seu link na sua Dash.</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n                    <div class="line-input">\n                        <input id="spromo-tags" type="text" placeholder="Ex.: post europa">\n                    </div>\n                </div>\n                <div class="comp-plgconf__body__cities__city" id="spromo-origin-field">\n                    <div class="line-label">\n                        <strong class="title">Cupom de Desconto</strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Use o cupom de desconto para aplicar desconto\n                                        automaticamente às pessoas que acessam o Seguros Promo através de seu blog.</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n                    <div class="line-input">\n                        <input id="spromo-coupon" type="text" class="input-class" placeholder="Ex.: PROMO5">\n                    </div>\n                </div>\n            </div>\n\n            <div class="comp-plgconf__body__cities">\n                <div class="comp-plgconf__body__cities__city" id="spromo-origin-field">\n                    <div class="line-label">\n                        <strong class="title">Exibir LogoTipo</strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Deseja exibir o logotipo SegurosPromo no shortcode?</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n                    <div class="">\n                        <input id="spromo-show-logo" type="checkbox" class="checkbox">\n                    </div>\n                </div>\n            </div>\n            <div class="comp-plgconf__body__border__bt"></div>\n\n            <div class="comp-plgconf__footer">\n                <a href="" id="spromo-cancel" class="cancel">Cancelar</a>\n                <a href="" id="spromo_insert" class="insert">Inserir</a>\n            </div>\n        </div>\n    </div>\n        '}if(void 0===n&&""!=n){o=jQuery,window.spromo_chip_options_html,window.spromo_chip_options_widget_html,jQuery.ajax({url:"https://gochip.amopromo.com/destinations",method:"GET",headers:{Authorization:"Bearer 449f2754-e70f-46b1-bdc7-d89e1956bd57"},datatype:"json",success:function(e){window.spromo_chip_options_html='<option value="" placeholder>Selecione o destino</option>',window.spromo_chip_options_widget_html='<option value="" placeholder>Selecione o destino</option>';for(var n=0;n<e.length;n++)window.spromo_chip_options_html+='<option value="'+e[n].slug+'">'+e[n].name+"</option>",window.spromo_chip_options_widget_html+='<option value="'+e[n].slug+"||"+e[n].name+'">'+e[n].name+"</option>";o(".spromo-select-widget-destino").html(window.spromo_chip_options_widget_html)}});var n='\n            <div id="spromo_chip_custom_conf_overlay">\n\n    <div class="comp-plgconf">\n        <div class="comp-plgconf__title">\n            <strong>Afiliados Seguros Promo</strong>\n            <a href="https://wordpress.org/plugins/seguros-promo/" target="_blank" alt="ajuda" title="ajuda">AJUDA</a>\n        </div>\n        <div class="comp-plgconf__body">\n\n            <div class="comp-plgconf__body__cities">\n\n\n                <div class="comp-plgconf__body__cities__city">\n                    <div class="line-label">\n                        <strong class="title">Destinos\n                        </strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Destino para o chip.</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n\n                    <div class="line-input">\n                        <select class="input-class spromo-destinos" name="spromo-destinos" id="spromo-destinos"></select>\n                    </div>\n                </div>\n\n            </div>\n\n            <div class="comp-plgconf__body__border__bt"></div>\n\n\n            <div class="comp-plgconf__body__cities">\n\n                <div class="comp-plgconf__body__cities__city" id="spromo-origin-field-chip">\n                    <div class="line-label">\n                        <strong class="title">Tags</strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Use a tag para rastreio do seu link na sua Dash.</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n                    <div class="line-input">\n                        <input id="spromo-tags-chip" type="text" placeholder="Ex.: post europa">\n                    </div>\n                </div>\n                <div class="comp-plgconf__body__cities__city" id="spromo-origin-field-chip">\n                    <div class="line-label">\n                        <strong class="title">Cupom de Desconto</strong>\n                        <picture>\n                            <div class="tooltip">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">\n                                    <g fill="none" fill-rule="evenodd">\n                                        <path d="M0 0h24v24H0z" />\n                                        <path fill="#007e47" fill-rule="nonzero" d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z" />\n                                    </g>\n                                    <span class="tooltiptext">Use o cupom de desconto para aplicar desconto\n                                        automaticamente às pessoas que acessam o Seguros Promo através de seu blog.</span>\n                                </svg>\n                            </div>\n                        </picture>\n                    </div>\n                    <div class="line-input">\n                        <input id="spromo-coupon-chip" type="text" class="input-class" placeholder="Ex.: PROMO5">\n                    </div>\n                </div>\n            </div>\n\n            <div class="comp-plgconf__body__border__bt"></div>\n\n            <div class="comp-plgconf__footer">\n                <a href="" id="spromo-cancel-chip" class="cancel">Cancelar</a>\n                <a href="" id="spromo_insert-chip" class="insert">Inserir</a>\n            </div>\n        </div>\n    </div>\n        '}var i="",s="";function t(){jQuery("#spromo_custom_conf_overlay").remove()}function l(){jQuery("#spromo_chip_custom_conf_overlay").remove()}window.seguros_promo_conf_editor=function(o){i=o||"",jQuery("body").append(e),jQuery(".spromo-ideal_para-ideal-para").html(window.spromo_options_html),new Choices(jQuery("#spromo-ideal_para-ideal-para")[0],{itemSelectText:"",noResultsText:"nenhum item encontrado",shouldSort:!1,loadingText:"Carregando..."}),new Choices(jQuery("#spromo-theme")[0],{itemSelectText:"",noResultsText:"nenhum item encontrado",shouldSort:!1,loadingText:"Carregando..."}),new Choices(document.getElementById("spromo-tags"),{delimiter:",",removeItemButton:!0,duplicateItems:!1,editItems:!0,itemSelectText:"Aperte 'Enter' para selecionar...",addItemText:function(o){return"Aperte 'Enter' para selecionar <b>\"".concat(o,'"</b>')},classNames:{button:"choices__button"}}),jQuery("#spromo_insert").click((function(o){o.preventDefault(),function(){if(null!==jQuery("#spromo-ideal_para-ideal-para").val()&&""!==jQuery("#spromo-ideal_para-ideal-para").val())var o=jQuery("#spromo-ideal_para-ideal-para").val(),e=jQuery("#spromo-ideal_para-ideal-para").text();else o="9",e="Brasil";var n,s=(n={ideal_para:o,ideal_para_lbl:e,tags:jQuery("#spromo-tags").val()||"",theme:jQuery("#spromo-theme").val()||"",coupon:jQuery("#spromo-coupon").val()||"",header_text:jQuery("#spromo-title").val()||"",show_logo:jQuery("#spromo-show-logo").is(":checked")},shortcode="[seguros_promo_shortcode "+(""!=n.ideal_para?' ideal_para="'+n.ideal_para+'" ':"")+(""!=n.ideal_para_lbl?' ideal_para_lbl="'+n.ideal_para_lbl+'" ':"")+(""!=n.header_text?' header_text="'+n.header_text+'" ':"")+(""!=n.tags?' tags="'+n.tags+'" ':"")+(""!=n.theme?' theme="'+n.theme+'"':"")+(""!=n.coupon?' coupon="'+n.coupon+'"':"")+' show_logo="'+n.show_logo+'"/]',shortcode);"visual"===i?top.tinymce.execCommand("mceInsertContent",0,s):QTags.insertContent(s)}(),t()})),jQuery("#spromo-cancel").click((function(o){o.preventDefault(),t()}))},window.seguros_promo_chip_conf_editor=function(o){s=o||"",jQuery("body").append(n),jQuery(".spromo-destinos").html(window.spromo_chip_options_html),new Choices(jQuery("#spromo-destinos")[0],{itemSelectText:"",noResultsText:"nenhum item encontrado",shouldSort:!1,loadingText:"Carregando..."}),new Choices(document.getElementById("spromo-tags-chip"),{delimiter:",",removeItemButton:!0,duplicateItems:!1,editItems:!0,itemSelectText:"Aperte 'Enter' para selecionar...",addItemText:function(o){return"Aperte 'Enter' para selecionar <b>\"".concat(o,'"</b>')},classNames:{button:"choices__button"}}),jQuery("#spromo_insert-chip").click((function(o){o.preventDefault(),function(){if(null!==jQuery("#spromo-destinos").val()&&""!==jQuery("#spromo-destinos").val())var o=jQuery("#spromo-destinos").val(),e=jQuery("#spromo-destinos").text();else o="",e="";var n,i=(n={chip_destinos:o,chip_destinos_lbl:e,tags:jQuery("#spromo-tags-chip").val()||"",coupon:jQuery("#spromo-coupon-chip").val()||""},shortcode="[seguros_promo_chip_shortcode "+(""!=n.tags?' tags="'+n.tags+'" ':"")+(""!=n.coupon?' coupon="'+n.coupon+'"':"")+(""!=n.chip_destinos?' chip_destinos="'+n.chip_destinos+'" ':"")+(""!=n.chip_destinos_lbl?' chip_destinos_lbl="'+n.chip_destinos_lbl+'" ':"")+"/]",shortcode);"visual"===s?top.tinymce.execCommand("mceInsertContent",0,i):QTagsChip.insertContent(i)}(),l()})),jQuery("#spromo-cancel-chip").click((function(o){o.preventDefault(),l()}))}})();