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

<?php $redirect_url_logo = 'https://www.segurospromo.com.br/?utm_source=wp_plugin&utm_medium=afiliado&cupom=' . $data[0]->coupon . '&pcrid=' . $data[0]->afilliate_id . '&pcrtt=' . $data[0]->tags; ?>

<div class="wp-seguros-promo">

    <div class="header-wp-seguros-promo">

        <div class="box-header-wp">
            <small>Seguro Viagem: <br class="mobile-only-seguros"><b><?php echo esc_html($data[0]->ideal_para_lbl); ?></b></small>
        </div>

        <div class="box-header-wp">
            <a href="<?php echo $redirect_url_logo ?>" target="_blank">
                <svg width="177" height="32" viewBox="0 0 177 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.5177 22.2458L18.3997 10.4703L0 10.4497L12.1377 22.2458H30.5177Z" fill="#007B45" />
                    <path d="M26.7655 4.69179C20.4105 -1.56393 10.1057 -1.56393 3.75078 4.69179C2.0371 6.37857 0.789522 8.34979 0 10.4497H30.5162C29.7267 8.34979 28.4791 6.37857 26.7655 4.69179Z" fill="#74B110" />
                    <path d="M0 22.2458C0.790985 24.2006 2.0349 26.0353 3.74127 27.6069C10.1021 33.4644 20.4149 33.4644 26.7757 27.6069C28.4821 26.0353 29.7267 24.2006 30.517 22.2458H0Z" fill="#74B110" />
                    <path d="M46.9434 19.2214C46.9434 18.6788 47.3041 18.4555 47.7314 18.4555H48.4536C48.9131 18.4555 49.077 18.8068 49.0448 19.4127C48.979 20.5611 49.2417 21.8376 50.621 21.8376C52.0002 21.8376 52.4268 20.8164 52.4268 19.604C52.4268 18.2315 51.1463 17.2743 50.0956 16.5405C48.848 15.6466 47.0751 14.1155 47.0751 12.1052C47.0751 9.55229 48.3885 8.02054 50.7856 8.02054C53.1827 8.02054 54.3644 9.07371 54.3644 12.2005C54.3644 12.7751 53.9708 12.9664 53.5764 12.9664H52.8542C52.3946 12.9664 52.23 12.6151 52.2629 12.0092C52.3288 11.02 52.1971 9.90287 50.7856 9.90287C49.669 9.90287 49.0785 10.6687 49.0785 11.8172C49.0785 13.0937 49.9324 13.9555 50.8185 14.5934C52.1978 15.5826 54.4303 17.2096 54.4303 19.412C54.4303 21.4223 53.741 23.7199 50.6217 23.7199C48.2575 23.7199 46.9441 22.3795 46.9441 19.2207L46.9434 19.2214Z" fill="#393D3D" />
                    <path d="M56.4976 15.8714C56.4976 11.2128 57.2198 8.02133 60.6018 8.02133C63.0969 8.02133 64.2135 9.42508 64.2135 13.4778C64.2135 14.1156 64.1147 15.2648 63.9838 16.0947H58.73C58.73 20.1153 59.0586 21.8384 60.634 21.8384C62.2093 21.8384 62.243 20.2426 62.2101 19.5728C62.1771 18.9662 62.341 18.6156 62.8013 18.6156H63.3596C63.7533 18.6156 64.1477 18.8069 64.1477 19.3815C64.1477 22.253 63.064 23.7214 60.5688 23.7214C57.1868 23.7214 56.4976 20.5306 56.4976 15.8714ZM62.1449 14.4036C62.1779 14.021 62.2108 13.5738 62.2108 12.8719C62.2108 11.1168 61.981 9.90438 60.6018 9.90438C59.2225 9.90438 58.763 11.1488 58.763 14.4036H62.1449Z" fill="#393D3D" />
                    <path d="M74.4092 8.12587C73.8553 8.12587 73.2179 8.44516 72.7562 9.05672C72.5755 8.87041 72.1972 8.59378 71.925 8.46009C71.6023 8.30365 71.1186 8.02133 70.1506 8.02133C67.8918 8.02133 66.4079 9.68322 66.4079 13.258C66.4079 15.5158 67.021 17.0206 68.0213 17.8049C67.3759 18.307 67.021 18.9968 67.021 19.9689C67.021 20.8784 67.3437 21.5056 67.8925 22.0382C66.6984 22.8532 66.0537 24.296 66.0537 25.8327C66.0537 28.2157 67.5706 30.2538 70.4096 30.2538C73.2487 30.2538 74.7655 28.2157 74.7655 25.8327C74.7655 23.4498 73.2494 21.3171 70.4096 21.3171C70.1835 21.3171 69.8286 21.3484 69.6355 21.3797C69.2484 21.1287 69.0223 20.6899 69.0223 19.9689C69.0223 19.1852 69.3772 18.6832 69.8286 18.4634C69.9252 18.4634 70.0547 18.4947 70.1513 18.4947C72.4101 18.4947 73.894 16.8328 73.894 13.258C73.894 12.0399 73.7236 11.0578 73.4155 10.2841C73.5962 10.255 73.7777 10.2272 73.9584 10.2272C74.2167 10.2272 74.3777 10.2585 74.6682 10.4157C74.8292 10.5095 74.9265 10.5408 75.0875 10.5408C75.4102 10.5408 75.5711 10.3524 75.5711 10.0388V9.09797C75.5711 8.43947 75.0875 8.12587 74.4099 8.12587H74.4092ZM70.4082 23.2606C72.0216 23.2606 72.7635 24.3892 72.7635 25.832C72.7635 27.2749 72.0216 28.4034 70.4082 28.4034C68.7947 28.4034 68.0528 27.2749 68.0528 25.832C68.0528 24.3892 68.7947 23.2606 70.4082 23.2606ZM70.1499 16.8321C68.7625 16.8321 68.4076 15.2954 68.4076 13.2573C68.4076 11.2192 68.7625 9.68251 70.1499 9.68251C71.5372 9.68251 71.8921 11.2192 71.8921 13.2573C71.8921 15.2954 71.4728 16.8321 70.1499 16.8321Z" fill="#393D3D" />
                    <path d="M76.7566 20.2426V8.81918C76.7566 8.46859 77.0193 8.2133 77.38 8.2133H78.3649C78.7264 8.2133 78.9883 8.46859 78.9883 8.81918V20.2426C78.9883 21.1678 79.3498 21.7104 80.3676 21.7104C80.9588 21.7104 81.845 21.4871 82.535 21.1358V8.81918C82.535 8.46859 82.7976 8.2133 83.1591 8.2133H84.144C84.5047 8.2133 84.7674 8.46859 84.7674 8.81918V21.3278C84.7674 22.0616 85.0301 22.3489 85.5884 22.3489V22.7315C85.5884 23.1781 85.1289 23.7207 83.9794 23.7207C83.3552 23.7207 82.8628 23.4654 82.6659 22.7315C81.8779 23.3061 80.8271 23.7207 79.7764 23.7207C78.1015 23.7207 76.7559 22.8275 76.7559 20.2426H76.7566Z" fill="#393D3D" />
                    <path d="M87.9854 22.9228V8.81918C87.9854 8.4686 88.248 8.2133 88.6088 8.2133H89.5937C89.9551 8.2133 90.2178 8.4686 90.2178 8.81918V9.23376C91.1369 8.40388 92.0888 8.21259 92.4832 8.21259C93.1725 8.21259 93.6649 8.53189 93.6649 9.20176V10.1589C93.6649 10.4782 93.501 10.6695 93.1725 10.6695C93.0415 10.6695 92.9098 10.6375 92.7459 10.5415C92.4503 10.3822 92.2864 10.3502 92.0237 10.3502C91.0388 10.3502 90.2178 10.9561 90.2178 10.9561V22.9221C90.2178 23.2727 89.9551 23.528 89.5937 23.528H88.6088C88.248 23.528 87.9854 23.2727 87.9854 22.9221V22.9228Z" fill="#393D3D" />
                    <path d="M94.8481 15.8714C94.8481 9.80838 96.2926 8.02133 98.8536 8.02133C101.415 8.02133 102.86 9.80838 102.86 15.8714C102.86 21.9344 101.415 23.7214 98.8536 23.7214C96.2926 23.7214 94.8481 21.9344 94.8481 15.8714ZM100.627 15.8714C100.627 10.287 99.8714 9.93638 98.8536 9.93638C97.8357 9.93638 97.0806 10.2877 97.0806 15.8714C97.0806 21.4551 97.8357 21.8064 98.8536 21.8064C99.8714 21.8064 100.627 21.4551 100.627 15.8714Z" fill="#393D3D" />
                    <path d="M104.928 19.2215C104.928 18.6789 105.289 18.4556 105.716 18.4556H106.438C106.898 18.4556 107.062 18.8069 107.03 19.4128C106.964 20.5612 107.227 21.8377 108.606 21.8377C109.985 21.8377 110.412 20.8165 110.412 19.6041C110.412 18.2316 109.131 17.2744 108.08 16.5406C106.833 15.6467 105.06 14.1156 105.06 12.1053C105.06 9.55238 106.373 8.02063 108.77 8.02063C111.168 8.02063 112.349 9.0738 112.349 12.2006C112.349 12.7752 111.956 12.9665 111.561 12.9665H110.839C110.38 12.9665 110.215 12.6152 110.248 12.0093C110.314 11.0201 110.182 9.90296 108.77 9.90296C107.654 9.90296 107.063 10.6688 107.063 11.8173C107.063 13.0938 107.917 13.9556 108.803 14.5935C110.183 15.5827 112.415 17.2097 112.415 19.4121C112.415 21.4224 111.726 23.72 108.607 23.72C106.242 23.72 104.929 22.3796 104.929 19.2208L104.928 19.2215Z" fill="#393D3D" />
                    <path d="M121.148 23.6887C119.901 23.6887 119.113 23.1781 118.817 22.5716V29.815C118.817 30.1663 118.554 30.4209 118.193 30.4209H115.403C115.042 30.4209 114.779 30.1656 114.779 29.815V8.81922C114.779 8.46864 115.042 8.21334 115.403 8.21334H116.552C117.472 8.21334 118.226 8.46864 118.588 9.33051C118.982 8.50064 119.999 8.05405 121.149 8.05405C123.94 8.05405 125.417 10.2237 125.417 15.8721C125.417 21.5205 123.94 23.6902 121.149 23.6902L121.148 23.6887ZM119.769 10.9568C119.375 10.9568 119.08 11.0528 118.817 11.1801V20.5619C119.08 20.6892 119.375 20.7852 119.769 20.7852C120.721 20.7852 121.378 20.4026 121.378 15.8714C121.378 11.3401 120.722 10.9576 119.769 10.9576V10.9568Z" fill="#393D3D" />
                    <path d="M134.118 12.2973C133.987 12.2973 133.823 12.2333 133.659 12.138C133.462 12.0107 133.167 11.9467 132.904 11.9467C131.919 11.9467 131.131 12.5533 131.131 12.5533V22.9242C131.131 23.2748 130.868 23.5301 130.507 23.5301H127.717C127.356 23.5301 127.093 23.2748 127.093 22.9242V8.81918C127.093 8.46859 127.356 8.2133 127.717 8.2133H128.899C129.818 8.2133 130.475 8.69189 130.705 9.45776C131.46 8.65989 132.412 8.2133 133.398 8.2133C134.087 8.2133 134.579 8.5326 134.579 9.20247V11.7554C134.579 12.0747 134.448 12.298 134.12 12.298L134.118 12.2973Z" fill="#393D3D" />
                    <path d="M140.554 23.7207C137.567 23.7207 135.235 21.9337 135.235 15.8707C135.235 9.80767 137.567 8.02063 140.554 8.02063C143.542 8.02063 145.873 9.80767 145.873 15.8707C145.873 21.9337 143.575 23.7207 140.554 23.7207ZM140.554 10.9888C139.7 10.9888 139.274 11.3394 139.274 15.8707C139.274 20.4019 139.7 20.7525 140.554 20.7525C141.408 20.7525 141.835 20.4019 141.835 15.8707C141.835 11.3394 141.408 10.9888 140.554 10.9888Z" fill="#393D3D" />
                    <path d="M164.129 23.5294H161.338C160.977 23.5294 160.715 23.2741 160.715 22.9236V12.106C160.715 11.3081 160.386 10.9896 159.697 10.9896C159.27 10.9896 158.679 11.1168 158.154 11.3721V22.9236C158.154 23.2741 157.891 23.5294 157.53 23.5294H154.739C154.378 23.5294 154.115 23.2741 154.115 22.9236V12.106C154.115 11.3081 153.787 10.9896 153.097 10.9896C152.671 10.9896 152.08 11.1168 151.554 11.3721V22.9236C151.554 23.2741 151.292 23.5294 150.931 23.5294H148.14C147.779 23.5294 147.517 23.2741 147.517 22.9236V8.81921C147.517 8.46863 147.779 8.21334 148.14 8.21334H149.749C150.537 8.21334 151.226 8.56463 151.456 9.29851C152.08 8.69263 153.131 8.02205 154.641 8.02205C156.152 8.02205 157.071 8.56463 157.596 9.4898C158.516 8.65992 159.632 8.02205 161.241 8.02205C163.638 8.02205 164.754 9.4258 164.754 12.0107V22.9236C164.754 23.2741 164.491 23.5294 164.129 23.5294H164.129Z" fill="#393D3D" />
                    <path d="M171.681 23.7207C168.694 23.7207 166.362 21.9337 166.362 15.8707C166.362 9.80767 168.694 8.02063 171.681 8.02063C174.669 8.02063 177 9.80767 177 15.8707C177 21.9337 174.702 23.7207 171.681 23.7207ZM171.681 10.9888C170.827 10.9888 170.401 11.3394 170.401 15.8707C170.401 20.4019 170.827 20.7525 171.681 20.7525C172.535 20.7525 172.962 20.4019 172.962 15.8707C172.962 11.3394 172.535 10.9888 171.681 10.9888Z" fill="#393D3D" />
                </svg>
            </a>
        </div>
    </div>

    <div class="body-wp-seguros-promo">
        <?php if (is_array($data)) {

            $count = 0;
            $already_have_one_special = false;
            $max = $seguros_promo_theme == 'card-large' ? 3 : 2;
            $width = $seguros_promo_theme == 'card-large' ? '31.4' : '48';
            if (count($data) == 2 && $seguros_promo_theme == 'card-large') {
                // VERIFYING IF PLUGIN ONLY RECEIVED LESS THAN 3 OFFERS
                $width = '48';
            } elseif (count($data) <= 1) {
                $width = '98';
            }

            foreach ($data as $item) {
                if ($count < $max) {

                    $count++;
                    $date_dp = new DateTime();
                    $item->begin_date =
                        $date_dp->format('d') .
                        ' ' .
                        $this->transform_month_pt_br($date_dp->format('m'));
                    $item->begin_date_ptbr = $date_dp->format('d/m/Y');

                    $date_rt = $date_dp->add(new DateInterval('P7D'));
                    $item->end_date =
                        $date_rt->format('d') .
                        ' ' .
                        $this->transform_month_pt_br($date_rt->format('m'));
                    $item->end_date_ptbr = $date_rt->format('d/m/Y');
                    $item->value_per_day = $item->adult->price / 7;

                    $money_values =
                        $item->benefits[0]->code == '51'
                        ? $item->benefits[0]->coverage .
                        '|' .
                        $item->benefits[1]->coverage
                        : $item->benefits[1]->coverage .
                        '|' .
                        $item->benefits[0]->coverage;
                    $money_values = str_replace(
                        ',00',
                        '',
                        str_replace(
                            ' SUPLEMENTAR',
                            '',
                            str_replace(' COMPLEMENTAR', '', $money_values)
                        )
                    );
                    $money_values = explode('|', $money_values);

                    $data[0]->afilliate_id =
                        $data[0]->afilliate_id != ''
                        ? $data[0]->afilliate_id
                        : '0';

                    $redirect_url = 'https://www.segurospromo.com.br/?utm_source=wp_plugin&utm_medium=afiliado&cupom=' . $data[0]->coupon . '&pcrid=' . $data[0]->afilliate_id . '&pcrtt=' . $data[0]->tags;
        ?>
                    <div class="body-item-wp-seguros-promo">

                        <div class="body-item-header">
                            <img class="logo_cia" src="<?php echo esc_attr($seguros_promo_public_path . 'assets/cia/' . strtolower($item->provider_name) . '.png'); ?>" alt="<?php echo esc_attr($item->name); ?> " title="<?php echo esc_attr($item->name); ?>">
                            <small class="seg_name"><?php echo esc_html($item->name); ?></small>
                        </div>
                        <div class="body-item-body">
                            <div>
                                <small><b>Assistência médica</b></small>
                                <small class="body-item-body-value"><?php echo esc_html($money_values[0]); ?></small>
                            </div>
                            <div>
                                <small><b>Bagagem extraviada</b></small>
                                <small class="body-item-body-value"><?php echo esc_html($money_values[1]); ?></small>
                            </div>
                        </div>
                        <a href="<?php echo esc_attr($redirect_url); ?>" target="_blank" class="selectbtn" <?php if ($_SERVER['SERVER_NAME'] != 'www.segurospromo.com.br') { ?> rel="sponsored" <?php } ?>>
                            <button class="selectbtn">Cotar - R$ <?php echo esc_html(round($item->value_per_day)); ?>/dia*</button>
                        </a>

                        <small class="rangeDatewp">*Valor referente a 7 dias de viagem.</small>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>

</div>