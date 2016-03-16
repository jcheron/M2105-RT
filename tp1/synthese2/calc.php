<?php
require_once 'technics/fonctions.php';
$calc=new Calc();
$calc->getHeader(false, "Calculatrice (Version php)");
?>
<table class="calculatrice" id="calc">
            <tbody><tr>
                <td colspan="4" class="calc_td_resultat">
                    <input type="text" readonly="readonly" name="calc_resultat" id="calc_resultat" class="calc_resultat" onkeydown="javascript:key_detect_calc(&#39;calc&#39;,event);">
                </td>
            </tr>
			<?php
			$calc->getButtons();
			?>
        </tbody></table>
        <script type="text/javascript">
			$id('calc').onload=initialiser_calc('calc');
		</script>
<?php 
$calc->getFooter();
?>