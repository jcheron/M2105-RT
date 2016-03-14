<?php
require_once 'technics/fonctions.php';
getHeader(false, "Calculatrice (Version js)");
?>
<table class="calculatrice" id="calc">
            <tbody><tr>
                <td colspan="4" class="calc_td_resultat">
                    <input type="text" readonly="readonly" name="calc_resultat" id="calc_resultat" class="calc_resultat" onkeydown="javascript:key_detect_calc(&#39;calc&#39;,event);">
                </td>
            </tr>
            <tr>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc(&#39;calc&#39;,&#39;ce&#39;);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="←" onclick="javascript:f_calc(&#39;calc&#39;,&#39;nbs&#39;);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="%" onclick="javascript:f_calc(&#39;calc&#39;,&#39;%&#39;);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="+" onclick="javascript:f_calc(&#39;calc&#39;,&#39;+&#39;);">
                </td>
            </tr>
            <tr>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="7" onclick="javascript:add_calc(&#39;calc&#39;,7);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="8" onclick="javascript:add_calc(&#39;calc&#39;,8);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="9" onclick="javascript:add_calc(&#39;calc&#39;,9);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="-" onclick="javascript:f_calc(&#39;calc&#39;,&#39;-&#39;);">
                </td>
            </tr>
			<tr>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="4" onclick="javascript:add_calc(&#39;calc&#39;,4);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="5" onclick="javascript:add_calc(&#39;calc&#39;,5);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="6" onclick="javascript:add_calc(&#39;calc&#39;,6);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="x" onclick="javascript:f_calc(&#39;calc&#39;,&#39;*&#39;);">
                </td>
            </tr>
            <tr>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="1" onclick="javascript:add_calc(&#39;calc&#39;,1);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="2" onclick="javascript:add_calc(&#39;calc&#39;,2);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="3" onclick="javascript:add_calc(&#39;calc&#39;,3);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="÷" onclick="javascript:f_calc(&#39;calc&#39;,&#39;/&#39;);">
                </td>
            </tr>
            <tr>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="0" onclick="javascript:add_calc(&#39;calc&#39;,0);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="±" onclick="javascript:f_calc(&#39;calc&#39;,&#39;+-&#39;);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="," onclick="javascript:add_calc(&#39;calc&#39;,&#39;.&#39;);">
                </td>
            	<td class="calc_td_btn">
                	<input type="button" class="calc_btn" value="=" onclick="javascript:f_calc(&#39;calc&#39;,&#39;=&#39;);">
                </td>
            </tr>
        </tbody></table>
        <script type="text/javascript">
			$id('calc').onload=initialiser_calc('calc');
		</script>
<?php 
getFooter();
?>