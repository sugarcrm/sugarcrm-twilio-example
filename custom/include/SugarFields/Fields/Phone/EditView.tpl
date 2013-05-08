{*
/**
Copyright 2013 SugarCRM. All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice, this list of
      conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright notice, this list
      of conditions and the following disclaimer in the documentation and/or other materials
      provided with the distribution.

THIS SOFTWARE IS PROVIDED BY SUGARCRM ``AS IS'' AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL SUGARCRM OR
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are those of the
authors and should not be interpreted as representing official policies, either expressed
or implied, of SugarCRM.
*/
*}
{{capture name=idname assign=idname}}{{sugarvar key='name'}}{{/capture}}
{{if !empty($displayParams.idName)}}
   {{assign var=idname value=$displayParams.idName}}
{{/if}}

{if strlen({{sugarvar key='value' string=true}}) <= 0}
{assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
{assign var="value" value={{sugarvar key='value' string=true}} }
{/if}  


{php}
global $sugar_config;
                 
$default_region = "US";

if(isset($sugar_config['phonenumber_default_region']) && !empty($sugar_config['phonenumber_default_region'])){
    $default_region = $sugar_config['phonenumber_default_region'];
}
$this->assign('default_region', $default_region);

$phoneNumberStr = $this->get_template_vars('value');

$phoneNumberArr = phone_number_national_format($phoneNumberStr, $default_region);  

$this->assign('value', $phoneNumberArr[0]);

$regionCode = $default_region;
if(isset($phoneNumberArr[1]) && !empty($phoneNumberArr[1])){
    $regionCode = $phoneNumberArr[1];
}

$countryCode = getCountryCodeForValidRegion($regionCode);

$this->assign('regionCode',strtolower($regionCode)); 
$this->assign('countryCode',$countryCode);

{/php}
 
<div id="{{$idname}}_regiondropdown" class="dropdown-menu has-tip has-icons has-scroll">
    <ul>
        <li class="country_us"><a href="#">United States <span class="country_code">+1</span></a></li>                        
        <li class="country_de"><a href="#">Germany (Deutschland) <span class="country_code">+49</span></a></li>
        <li class="country_jp"><a href="#">Japan (日本) <span class="country_code">+81</span></a></li> 
        <li class="country_gb"><a href="#">United Kingdom <span class="country_code">+44</span></a></li>
        <li class="country_fr"><a href="#">France <span class="country_code">+33</span></a></li>                        
        <li class="country_cn"><a href="#">China (中国) <span class="country_code">+86</span></a></li>
        <li class="country_kr"><a href="#">South Korea (대한민국) <span class="country_code">+82</span></a></li>
        <li class="divider"></li>                       

        <li class="country_af"><a href="#">Afghanistan (‫افغانستان‬‎) <span class="country_code">+93</span></a></li>
        <li class="country_ax"><a href="#">Aland Islands <span class="country_code">+358</span></a></li>
        <li class="country_al"><a href="#">Albania (Shqipëria) <span class="country_code">+355</span></a></li>
        <li class="country_dz"><a href="#">Algeria (‫الجزائر‬‎) <span class="country_code">+213</span></a></li>
        <li class="country_as"><a href="#">American Samoa <span class="country_code">+1684</span></a></li>
        <li class="country_ad"><a href="#">Andorra <span class="country_code">+376</span></a></li>
        <li class="country_ao"><a href="#">Angola <span class="country_code">+244</span></a></li>
        <li class="country_ai"><a href="#">Anguilla <span class="country_code">+1264</span></a></li>                        
        <li class="country_ag"><a href="#">Antigua and Barbuda <span class="country_code">+1268</span></a></li>
        <li class="country_ar"><a href="#">Argentina <span class="country_code">+54</span></a></li>
        <li class="country_am"><a href="#">Armenia (Հայաստանի Հանրապետութիւն) <span class="country_code">+374</span></a></li>
        <li class="country_aw"><a href="#">Aruba <span class="country_code">+297</span></a></li>
        <!--
        <li class="ac"><a href="#">Ascension Island <span class="country_code">+247</span></a></li>                        
        -->
        <li class="country_au"><a href="#">Australia <span class="country_code">+61</span></a></li>
        <li class="country_at"><a href="#">Austria (Österreich) <span class="country_code">+43</span></a></li>
        <li class="country_az"><a href="#">Azerbaijan (Azərbaycan) <span class="country_code">+994</span></a></li>
        <li class="country_bs"><a href="#">Bahamas <span class="country_code">+1242</span></a></li>
        <li class="country_bh"><a href="#">Bahrain (‫البحرين‬‎) <span class="country_code">+973</span></a></li>
        <li class="country_bd"><a href="#">Bangladesh (বাংলাদেশ) <span class="country_code">+880</span></a></li>
        <li class="country_bb"><a href="#">Barbados <span class="country_code">+1246</span></a></li>
        <li class="country_by"><a href="#">Belarus (Беларусь) <span class="country_code">+375</span></a></li>
        <li class="country_be"><a href="#">Belgium (België) <span class="country_code">+32</span></a></li>
        <li class="country_bz"><a href="#">Belize <span class="country_code">+501</span></a></li>
        <li class="country_bj"><a href="#">Benin (Bénin) <span class="country_code">+229</span></a></li>
        <li class="country_bm"><a href="#">Bermuda <span class="country_code">+1441</span></a></li>
        <li class="country_bt"><a href="#">Bhutan <span class="country_code">+975</span></a></li>
        <li class="country_bo"><a href="#">Bolivia <span class="country_code">+591</span></a></li>                            
        <!--
        <li class="country_bq"><a href="#">Bonaire, Sint Eustatius, and Saba <span class="country_code">+599</span></a></li>                                                
        -->
        <li class="country_ba"><a href="#">Bosnia and Herzegovina (Bosna i Hercegovina) <span class="country_code">+387</span></a></li>
        <li class="country_bw"><a href="#">Botswana <span class="country_code">+267</span></a></li>
        <li class="country_br"><a href="#">Brazil (Brasil) <span class="country_code">+55</span></a></li>
        <li class="country_io"><a href="#">British Indian Ocean Territory <span class="country_code">+246</span></a></li>                         
        <li class="country_vg"><a href="#">British Virgin Islands <span class="country_code">+1284</span></a></li>                         
        <li class="country_bn"><a href="#">Brunei <span class="country_code">+673</span></a></li>
        <li class="country_bg"><a href="#">Bulgaria (България) <span class="country_code">+359</span></a></li>
        <li class="country_bf"><a href="#">Burkina Faso <span class="country_code">+226</span></a></li>
        <li class="country_bi"><a href="#">Burundi (Uburundi) <span class="country_code">+257</span></a></li>
        <li class="country_kh"><a href="#">Cambodia (កម្ពុជា) <span class="country_code">+855</span></a></li>
        <li class="country_cm"><a href="#">Cameroon (Cameroun) <span class="country_code">+237</span></a></li>
        <li class="country_ca"><a href="#">Canada <span class="country_code">+1</span></a></li>
        <li class="country_cv"><a href="#">Cape Verde (Kabu Verdi) <span class="country_code">+238</span></a></li>
        <li class="country_ky"><a href="#">Cayman Islands <span class="country_code">+1345</span></a></li>
        <li class="country_cf"><a href="#">Central African Republic (Ködörösêse tî Bêafrîka) <span class="country_code">+236</span></a></li>
        <li class="country_td"><a href="#">Chad (Tchad) <span class="country_code">+235</span></a></li>
        <li class="country_cl"><a href="#">Chile <span class="country_code">+56</span></a></li>
        <li class="country_cn"><a href="#">China (中国) <span class="country_code">+86</span></a></li>
        <li class="country_cx"><a href="#">Christmas Island <span class="country_code">+61</span></a></li>
        <li class="country_cc"><a href="#">Cocos (Keeling) Islands <span class="country_code">+61</span></a></li>
        <li class="country_co"><a href="#">Colombia <span class="country_code">+57</span></a></li>
        <li class="country_km"><a href="#">Comoros (‫جزر القمر‬‎) <span class="country_code">+269</span></a></li>
        <li class="country_cg"><a href="#">Congo [DRC] (Jamhuri ya Kidemokrasia ya Kongo) <span class="country_code">+243</span></a></li>
        <li class="country_cd"><a href="#">Congo [Republic] (Congo-Brazzaville) <span class="country_code">+242</span></a></li>
        <li class="country_ck"><a href="#">Cook Islands <span class="country_code">+682</span></a></li>
        <li class="country_cr"><a href="#">Costa Rica <span class="country_code">+506</span></a></li>
        <li class="country_ci"><a href="#">Côte d’Ivoire <span class="country_code">+225</span></a></li>
        <li class="country_hr"><a href="#">Croatia (Hrvatska) <span class="country_code">+385</span></a></li>
        <li class="country_cu"><a href="#">Cuba <span class="country_code">+53</span></a></li>
        <!--
        <li class="country_cw"><a href="#">Curaçao <span class="country_code">+599</span></a></li>
        -->
        <li class="country_cy"><a href="#">Cyprus (Κύπρος) <span class="country_code">+357</span></a></li>
        <li class="country_cz"><a href="#">Czech Republic (Česká republika) <span class="country_code">+420</span></a></li>
        <li class="country_dk"><a href="#">Denmark (Danmark) <span class="country_code">+45</span></a></li>
        <li class="country_dj"><a href="#">Djibouti <span class="country_code">+253</span></a></li>
        <li class="country_dm"><a href="#">Dominica <span class="country_code">+1767</span></a></li>
        <li class="country_do"><a href="#">Dominican Republic (República Dominicana) <span class="country_code">+1809</span></a></li>
        <li class="country_ec"><a href="#">Ecuador <span class="country_code">+593</span></a></li>
        <li class="country_eg"><a href="#">Egypt (‫مصر‬‎) <span class="country_code">+20</span></a></li>
        <li class="country_sv"><a href="#">El Salvador <span class="country_code">+503</span></a></li>
        <li class="country_gq"><a href="#">Equatorial Guinea (Guinea Ecuatorial) <span class="country_code">+240</span></a></li>
        <li class="country_er"><a href="#">Eritrea <span class="country_code">+291</span></a></li>
        <li class="country_ee"><a href="#">Estonia (Eesti) <span class="country_code">+372</span></a></li>
        <li class="country_et"><a href="#">Ethiopia <span class="country_code">+251</span></a></li>
        <li class="country_fk"><a href="#">Falkland Islands [Islas Malvinas] <span class="country_code">+500</span></a></li>
        <li class="country_fo"><a href="#">Faroe Islands (Føroyar) <span class="country_code">+298</span></a></li>
        <li class="country_fj"><a href="#">Fiji <span class="country_code">+679</span></a></li>
        <li class="country_fi"><a href="#">Finland (Suomi) <span class="country_code">+358</span></a></li>
        <li class="country_fr"><a href="#">France <span class="country_code">+33</span></a></li>
        <li class="country_gf"><a href="#">French Guiana (Guyane française) <span class="country_code">+594</span></a></li>
        <li class="country_pf"><a href="#">French Polynesia (Polynésie française) <span class="country_code">+689</span></a></li>
        <!-- tf -->
        <li class="country_ga"><a href="#">Gabon <span class="country_code">+241</span></a></li>
        <li class="country_gm"><a href="#">Gambia <span class="country_code">+220</span></a></li>
        <li class="country_ge"><a href="#">Georgia (საქართველო) <span class="country_code">+995</span></a></li>
        <li class="country_de"><a href="#">Germany (Deutschland) <span class="country_code">+49</span></a></li>
        <li class="country_gh"><a href="#">Ghana (Gaana) <span class="country_code">+233</span></a></li>
        <li class="country_gi"><a href="#">Gibraltar <span class="country_code">+350</span></a></li>
        <li class="country_gr"><a href="#">Greece (Ελλάδα) <span class="country_code">+30</span></a></li>
        <li class="country_gl"><a href="#">Greenland (Kalaallit Nunaat) <span class="country_code">+299</span></a></li>
        <li class="country_gd"><a href="#">Grenada <span class="country_code">+1473</span></a></li>
        <li class="country_gp"><a href="#">Guadeloupe <span class="country_code">+590</span></a></li>
        <li class="country_gu"><a href="#">Guam <span class="country_code">+1671</span></a></li>
        <li class="country_gt"><a href="#">Guatemala <span class="country_code">+502</span></a></li>
        <!--
        <li class="country_gg"><a href="#">Guernsey <span class="country_code">+44</span></a></li>
        -->
        <li class="country_gn"><a href="#">Guinea (Guinée) <span class="country_code">+224</span></a></li>
        <li class="country_gw"><a href="#">Guinea-Bissau (Guiné Bissau) <span class="country_code">+245</span></a></li>
        <li class="country_gy"><a href="#">Guyana <span class="country_code">+592</span></a></li>
        <li class="country_ht"><a href="#">Haiti <span class="country_code">+509</span></a></li>
        <!--hm -->
        <li class="country_hn"><a href="#">Honduras <span class="country_code">+504</span></a></li>
        <li class="country_hk"><a href="#">Hong Kong (香港) <span class="country_code">+852</span></a></li>
        <li class="country_hu"><a href="#">Hungary (Magyarország) <span class="country_code">+36</span></a></li>
        <li class="country_is"><a href="#">Iceland (Ísland) <span class="country_code">+354</span></a></li>
        <li class="country_in"><a href="#">India (भारत) <span class="country_code">+91</span></a></li>
        <li class="country_id"><a href="#">Indonesia <span class="country_code">+62</span></a></li>
        <li class="country_ir"><a href="#">Iran (‫ایران‬‎) <span class="country_code">+98</span></a></li>
        <li class="country_iq"><a href="#">Iraq (‫العراق‬‎) <span class="country_code">+964</span></a></li>
        <li class="country_ie"><a href="#">Ireland <span class="country_code">+353</span></a></li>
        <!-- im -->
        <li class="country_il"><a href="#">Israel (‫ישראל‬‎) <span class="country_code">+972</span></a></li>
        <li class="country_it"><a href="#">Italy (Italia) <span class="country_code">+39</span></a></li>
        <li class="country_jm"><a href="#">Jamaica <span class="country_code">+1876</span></a></li>
        <li class="country_jp"><a href="#">Japan (日本) <span class="country_code">+81</span></a></li> 
        <!--
        <li class="country_je"><a href="#">Jersey<span class="country_code">+44</span></a></li>
        -->
        <li class="country_jo"><a href="#">Jordan (‫الأردن‬‎) <span class="country_code">+962</span></a></li>
        <li class="country_kz"><a href="#">Kazakhstan (Казахстан) <span class="country_code">+7</span></a></li>
        <li class="country_ke"><a href="#">Kenya <span class="country_code">+254</span></a></li>
        <li class="country_ki"><a href="#">Kiribati <span class="country_code">+686</span></a></li>                        
        <li class="country_kw"><a href="#">Kuwait (‫الكويت‬‎) <span class="country_code">+965</span></a></li>
        <li class="country_kg"><a href="#">Kyrgyzstan <span class="country_code">+996</span></a></li>
        <li class="country_la"><a href="#">Laos <span class="country_code">+856</span></a></li>
        <li class="country_lv"><a href="#">Latvia (Latvija) <span class="country_code">+371</span></a></li>
        <li class="country_lb"><a href="#">Lebanon (‫لبنان‬‎) <span class="country_code">+961</span></a></li>
        <li class="country_ls"><a href="#">Lesotho <span class="country_code">+266</span></a></li>
        <li class="country_lr"><a href="#">Liberia <span class="country_code">+231</span></a></li>
        <li class="country_ly"><a href="#">Libya (‫ليبيا‬‎) <span class="country_code">+218</span></a></li>
        <li class="country_li"><a href="#">Liechtenstein <span class="country_code">+423</span></a></li>
        <li class="country_lt"><a href="#">Lithuania (Lietuva) <span class="country_code">+370</span></a></li>
        <li class="country_lu"><a href="#">Luxembourg <span class="country_code">+352</span></a></li>
        <li class="country_mo"><a href="#">Macau (澳門) <span class="country_code">+853</span></a></li>
        <li class="country_mk"><a href="#">Macedonia [FYROM] (Македонија) <span class="country_code">+389</span></a></li>
        <li class="country_mg"><a href="#">Madagascar (Madagasikara) <span class="country_code">+261</span></a></li>
        <li class="country_mw"><a href="#">Malawi <span class="country_code">+265</span></a></li>
        <li class="country_my"><a href="#">Malaysia <span class="country_code">+60</span></a></li>
        <li class="country_mv"><a href="#">Maldives <span class="country_code">+960</span></a></li>
        <li class="country_ml"><a href="#">Mali <span class="country_code">+223</span></a></li>
        <li class="country_mt"><a href="#">Malta <span class="country_code">+356</span></a></li>
        <li class="country_mh"><a href="#">Marshall Islands <span class="country_code">+692</span></a></li>
        <li class="country_mq"><a href="#">Martinique <span class="country_code">+596</span></a></li>
        <li class="country_mr"><a href="#">Mauritania (‫موريتانيا‬‎) <span class="country_code">+222</span></a></li>
        <li class="country_mu"><a href="#">Mauritius (Moris) <span class="country_code">+230</span></a></li>
        <!-- yt -->
        <li class="country_mx"><a href="#">Mexico (México) <span class="country_code">+52</span></a></li>
        <li class="country_fm"><a href="#">Micronesia <span class="country_code">+691</span></a></li>
        <li class="country_md"><a href="#">Moldova (Republica Moldova) <span class="country_code">+373</span></a></li>
        <li class="country_mc"><a href="#">Monaco <span class="country_code">+377</span></a></li>
        <li class="country_mn"><a href="#">Mongolia <span class="country_code">+976</span></a></li>
        <li class="country_me"><a href="#">Montenegro (Crna Gora) <span class="country_code">+382</span></a></li>
        <li class="country_ms"><a href="#">Montserrat <span class="country_code">+1664</span></a></li>
        <li class="country_ma"><a href="#">Morocco (‫المغرب‬‎) <span class="country_code">+212</span></a></li>
        <li class="country_mz"><a href="#">Mozambique (Moçambique) <span class="country_code">+258</span></a></li>
        <li class="country_mm"><a href="#">Myanmar [Burma] (မြန်မာ) <span class="country_code">+95</span></a></li>
        <li class="country_na"><a href="#">Namibia <span class="country_code">+264</span></a></li>
        <li class="country_nr"><a href="#">Nauru <span class="country_code">+674</span></a></li>
        <li class="country_np"><a href="#">Nepal (नेपाल) <span class="country_code">+977</span></a></li>
        <li class="country_nl"><a href="#">Netherlands (Nederland) <span class="country_code">+31</span></a></li>
        <li class="country_nc"><a href="#">New Caledonia (Nouvelle-Calédonie) <span class="country_code">+687</span></a></li>
        <li class="country_nz"><a href="#">New Zealand <span class="country_code">+64</span></a></li>
        <li class="country_ni"><a href="#">Nicaragua <span class="country_code">+505</span></a></li>
        <li class="country_ne"><a href="#">Niger (Nijar) <span class="country_code">+227</span></a></li>
        <li class="country_ng"><a href="#">Nigeria <span class="country_code">+234</span></a></li>
        <li class="country_nu"><a href="#">Niue <span class="country_code">+683</span></a></li>
        <li class="country_nf"><a href="#">Norfolk Island <span class="country_code">+6723</span></a></li>
        <li class="country_mp"><a href="#">Northern Mariana Islands <span class="country_code">+1</span></a></li>
        <li class="country_kp"><a href="#">North Korea (조선 민주주의 인민 공화국) <span class="country_code">+850</span></a></li>
        <li class="country_no"><a href="#">Norway (Norge) <span class="country_code">+47</span></a></li>
        <li class="country_om"><a href="#">Oman (‫عُمان‬‎) <span class="country_code">+968</span></a></li>
        <li class="country_pk"><a href="#">Pakistan (‫پاکستان‬‎) <span class="country_code">+92</span></a></li>
        <li class="country_pw"><a href="#">Palau <span class="country_code">+680</span></a></li>
        <li class="country_ps"><a href="#">Palestinian Territories (‫فلسطين‬‎) <span class="country_code">+970</span></a></li>
        <li class="country_pa"><a href="#">Panama (Panamá) <span class="country_code">+507</span></a></li>
        <li class="country_pg"><a href="#">Papua New Guinea <span class="country_code">+63</span></a></li>
        <li class="country_py"><a href="#">Paraguay <span class="country_code">+595</span></a></li>
        <li class="country_pe"><a href="#">Peru (Perú) <span class="country_code">+51</span></a></li>
        <li class="country_ph"><a href="#">Philippines <span class="country_code">+63</span></a></li>
        <!-- pn -->
        <li class="country_pl"><a href="#">Poland (Polska) <span class="country_code">+48</span></a></li>
        <li class="country_pt"><a href="#">Portugal <span class="country_code">+351</span></a></li>
        <li class="country_pr"><a href="#">Puerto Rico <span class="country_code">+1787</span></a></li>
        <li class="country_qa"><a href="#">Qatar (‫قطر‬‎) <span class="country_code">+974</span></a></li>
        <li class="country_re"><a href="#">Réunion <span class="country_code">+262</span></a></li>
        <li class="country_ro"><a href="#">Romania (România) <span class="country_code">+40</span></a></li>
        <li class="country_ru"><a href="#">Russia (Россия) <span class="country_code">+7</span></a></li>
        <li class="country_rw"><a href="#">Rwanda <span class="country_code">+250</span></a></li>
        <!--
        <li class="country_bl"><a href="#">Saint Barthélemy (Saint-Barthélémy) <span class="country_code">+590</span></a></li>
        -->
        <li class="country_sh"><a href="#">Saint Helena <span class="country_code">+290</span></a></li>
        <li class="country_kn"><a href="#">Saint Kitts and Nevis <span class="country_code">+1869</span></a></li>
        <li class="country_lc"><a href="#">Saint Lucia <span class="country_code">+1758</span></a></li>
        <!--
        <li class="country_mf"><a href="#">Saint Martin (Saint-Martin) <span class="country_code">+590</span></a></li>
        -->
        <li class="country_pm"><a href="#">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon) <span class="country_code">+508</span></a></li>
        <li class="country_vc"><a href="#">Saint Vincent and the Grenadines <span class="country_code">+1784</span></a></li>
        <li class="country_ws"><a href="#">Samoa <span class="country_code">+685</span></a></li>
        <li class="country_sm"><a href="#">San Marino <span class="country_code">+378</span></a></li>
        <li class="country_st"><a href="#">São Tomé and Príncipe (São Tomé e Príncipe) <span class="country_code">+239</span></a></li>
        <li class="country_sa"><a href="#">Saudi Arabia (‫المملكة العربية السعودية‬‎) <span class="country_code">+966</span></a></li>
        <li class="country_sn"><a href="#">Senegal (Sénégal) <span class="country_code">+221</span></a></li>
        <li class="country_rs"><a href="#">Serbia (Србија) <span class="country_code">+381</span></a></li>
        <li class="country_sc"><a href="#">Seychelles <span class="country_code">+248</span></a></li>
        <li class="country_sl"><a href="#">Sierra Leone <span class="country_code">+232</span></a></li>
        <li class="country_sg"><a href="#">Singapore <span class="country_code">+65</span></a></li>
        <!--
        <li class="country_sx"><a href="#">Sint Maarten <span class="country_code">+1721</span></a></li>
        -->
        <li class="country_sk"><a href="#">Slovakia (Slovenská republika) <span class="country_code">+421</span></a></li>
        <li class="country_si"><a href="#">Slovenia (Slovenija) <span class="country_code">+386</span></a></li>
        <li class="country_sb"><a href="#">Solomon Islands <span class="country_code">+677</span></a></li>
        <li class="country_so"><a href="#">Somalia (Soomaaliya) <span class="country_code">+252</span></a></li>
        <li class="country_za"><a href="#">South Africa <span class="country_code">+27</span></a></li>
        <!-- gs-->
        <li class="country_kr"><a href="#">South Korea (대한민국) <span class="country_code">+82</span></a></li>
        <!--
        <li class="country_ss"><a href="#">South Sudan (‫جنوب السودان‬‎) <span class="country_code">+211</span></a></li>
        -->
        <li class="country_es"><a href="#">Spain (España) <span class="country_code">+34</span></a></li>
        <li class="country_lk"><a href="#">Sri Lanka (ශ්‍රී ලංකාව) <span class="country_code">+94</span></a></li>
        <li class="country_sd"><a href="#">Sudan (‫السودان‬‎) <span class="country_code">+249</span></a></li>
        <li class="country_sr"><a href="#">Suriname <span class="country_code">+597</span></a></li>
        <!-- sj -->
        <li class="country_sz"><a href="#">Swaziland <span class="country_code">+268</span></a></li>
        <li class="country_se"><a href="#">Sweden (Sverige) <span class="country_code">+46</span></a></li>
        <li class="country_ch"><a href="#">Switzerland (Schweiz) <span class="country_code">+41</span></a></li>
        <li class="country_sy"><a href="#">Syria (‫سوريا‬‎) <span class="country_code">+963</span></a></li>
        <li class="country_tw"><a href="#">Taiwan (台灣) <span class="country_code">+886</span></a></li>
        <li class="country_tj"><a href="#">Tajikistan <span class="country_code">+992</span></a></li>
        <li class="country_tz"><a href="#">Tanzania <span class="country_code">+255</span></a></li>
        <li class="country_th"><a href="#">Thailand (ไทย) <span class="country_code">+66</span></a></li>
        <li class="country_tl"><a href="#">Timor-Leste <span class="country_code">+670</span></a></li>
        <li class="country_tg"><a href="#">Togo <span class="country_code">+228</span></a></li>
        <li class="country_tk"><a href="#">Tokelau <span class="country_code">+690</span></a></li>
        <li class="country_to"><a href="#">Tonga <span class="country_code">+676</span></a></li>
        <li class="country_tt"><a href="#">Trinidad and Tobago <span class="country_code">+1868</span></a></li>
        <li class="country_tn"><a href="#">Tunisia (‫تونس‬‎) <span class="country_code">+216</span></a></li>
        <li class="country_tr"><a href="#">Turkey (Türkiye) <span class="country_code">+90</span></a></li>
        <li class="country_tm"><a href="#">Turkmenistan <span class="country_code">+993</span></a></li>
        <li class="country_tc"><a href="#">Turks and Caicos Islands <span class="country_code">+1649</span></a></li>
        <li class="country_tv"><a href="#">Tuvalu <span class="country_code">+688</span></a></li>
        <li class="country_vi"><a href="#">U.S. Virgin Islands <span class="country_code">+1340</span></a></li>
        <li class="country_ug"><a href="#">Uganda <span class="country_code">+256</span></a></li>
        <li class="country_ua"><a href="#">Ukraine (Україна) <span class="country_code">+380</span></a></li>
        <li class="country_ae"><a href="#">United Arab Emirates (‫الإمارات العربية المتحدة‬‎) <span class="country_code">+971</span></a></li>
        <li class="country_gb"><a href="#">United Kingdom <span class="country_code">+44</span></a></li>
        <li class="country_us"><a href="#">United States <span class="country_code">+1</span></a></li>
        <li class="country_uy"><a href="#">Uruguay <span class="country_code">+598</span></a></li>
        <li class="country_uz"><a href="#">Uzbekistan (Ўзбекистон) <span class="country_code">+998</span></a></li>
        <li class="country_vu"><a href="#">Vanuatu <span class="country_code">+678</span></a></li>                        
        <li class="country_va"><a href="#">Vatican City <span class="country_code">+379</span></a></li>                        
        <li class="country_ve"><a href="#">Venezuela <span class="country_code">+58</span></a></li>
        <li class="country_vn"><a href="#">Vietnam (Việt Nam) <span class="country_code">+84</span></a></li>
        <li class="country_wf"><a href="#">Wallis and Futuna <span class="country_code">+681</span></a></li>
        <li class="country_ye"><a href="#">Yemen (‫اليمن‬‎) <span class="country_code">+967</span></a></li>
        <li class="country_zm"><a href="#">Zambia <span class="country_code">+260</span></a></li>
        <li class="country_zw"><a href="#">Zimbabwe <span class="country_code">+263</span></a></li>
    </ul>
</div>
<input id="{{$idname}}_country_code" name="{{$idname}}_country_code" type="hidden" value="+{$countryCode}"/>
<span id="{{$idname}}_flag" class="phonenumber_flag" data-dropdown="#{{$idname}}_regiondropdown"><img src='custom/include/lib/jquery/icons/regions/{$regionCode}.png'/></span>
<input type='text' name='{{$idname}}' id='{{$idname}}' size='{{$displayParams.size|default:30}}' {{if isset($displayParams.maxlength)}}maxlength='{{$displayParams.maxlength}}'{{elseif isset($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$value}' title='{{$vardef.help}}' tabindex='{{$tabindex}}'	{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}}  class="phone" {{$displayParams.field}}>
       
{literal}
<script type="text/javascript">
    
    var {/literal}{{$idname}}{literal}_onblur = function(){    
            //console.log('from inside'+{/literal}{{$idname}}{literal}_onblur);
            var regionCode = '{/literal}{$default_region}{literal}';
                
            var form_id = "{/literal}{$form_id}{literal}";
            var field_name = "{/literal}{{$idname}}{literal}";
            var invalidTxt = SUGAR.language.get('app_strings', 'ERR_INVALID_VALUE');
            var msg = invalidTxt+' This phone number format is not recognized. Please check the country and number.';
                
            //validate phone format
            var phone_number = $("#{/literal}{{$idname}}{literal}").val();
            if(!phone_number || $.trim(phone_number) === ""){
                $("#{/literal}{{$idname}}{literal}").val("");
                //clear_all_errors(); 
                //clear validation message
                $("#{/literal}{{$idname}}{literal}").parent().find("div.validation-message").remove();
                return true;
            }
            
            try{
                var phoneUtil = i18n.phonenumbers.PhoneNumberUtil.getInstance();                    
                var number = phoneUtil.parseAndKeepRawInput(phone_number, regionCode);
                    
                if(phoneUtil.isValidNumber(number)){
                    var PNF = i18n.phonenumbers.PhoneNumberFormat;
                    var formatted_phone_number = phoneUtil.format(number, PNF.NATIONAL);
                    var real_regionCode = phoneUtil.getRegionCodeForNumber(number)
                    var countryCode = phoneUtil.getCountryCodeForRegion(real_regionCode);
                    
                    $("#{/literal}{{$idname}}{literal}").val("+" + countryCode + " " + formatted_phone_number);
                    $("#{/literal}{{$idname}}{literal}_country_code").val("+"+countryCode);
                    //clear_all_errors();    
                    //clear validation message
                    $("#{/literal}{{$idname}}{literal}").parent().find("div.validation-message").remove();

                    return true;
                        
                }else{                    
                    add_error_style(form_id, field_name, msg, false);
                        
                    //console.log(validate);
                    return false;
                }
            }catch (e) {
                 
                add_error_style(form_id, '{/literal}{{$idname}}{literal}', msg, false);
                return false;
            }

        };

     
        $("#{/literal}{{$idname}}{literal}_regiondropdown ul li a").bind('click', function(){ 
            var background_image_css = $(this).css("background-image");
            var background_image_url = background_image_css.replace(/"/g,"").replace(/url\(|\)$/ig, "");                     
            $("#{/literal}{{$idname}}{literal}_flag").html("<img src='"+background_image_url+"'/>");

            var new_phone_number_country_code = $(this).find("span.country_code").text();
            var pre_phone_number_country_code = $("#{/literal}{{$idname}}{literal}_country_code").val();
            //console.log('gggg');
            if(new_phone_number_country_code == pre_phone_number_country_code){
                $("#{/literal}{{$idname}}{literal}").focus();
            }else{

                //console.log(new_phone_number_country_code);
                //console.log(pre_phone_number_country_code);

                var phone_number_val = $("#{/literal}{{$idname}}{literal}").val();

                var new_phone_number_val = phone_number_val.replace(pre_phone_number_country_code, new_phone_number_country_code);

                if(phone_number_val === new_phone_number_val){
                    $("#{/literal}{{$idname}}{literal}").val(new_phone_number_country_code + " " +new_phone_number_val);
                }else{
                    $("#{/literal}{{$idname}}{literal}").val(new_phone_number_val);                        
                }
                $("#{/literal}{{$idname}}{literal}_country_code").val(new_phone_number_country_code);
                $("#{/literal}{{$idname}}{literal}").focus();

             }

        });
  
        
            
        $("#{/literal}{{$idname}}{literal}").bind('blur',{/literal}{{$idname}}{literal}_onblur);
     
           
//        var form_id = "{/literal}{$form_id}{literal}";
//        var field_name = "{/literal}{{$idname}}{literal}";
//            //debugger;
//        var invalidTxt = SUGAR.language.get('app_strings', 'ERR_INVALID_VALUE');
//        var msg = invalidTxt+' This phone number format is not recognized. Please check the country and number.';

        //console.log('{/literal}{{$idname}}{literal}_onblur');
            //console.log('ffffff');
        //addToValidateCallback(form_id, field_name, 'callback', false, msg, {/literal}{{$idname}}{literal}_onblur);
            //console.log('iiiiii');
     
     
        $("#{/literal}{{$idname}}{literal}").bind('keyup', function(){
            //update country flag

            var phone_number = $(this).val();

            var regionCode = '{/literal}{$default_region}{literal}';


            try{
                var phoneUtil = i18n.phonenumbers.PhoneNumberUtil.getInstance(); 
                var number = phoneUtil.parseAndKeepRawInput(phone_number, regionCode);
                var real_regionCode = phoneUtil.getRegionCodeForNumber(number).toLowerCase();  

                var countryCode = phoneUtil.getCountryCodeForRegion(real_regionCode);

                var regionnumber = phoneUtil.getCountryCodeForRegion(real_regionCode);
                //console.log(regionnumber);
                var cn_background_image_css = $("#{/literal}{{$idname}}{literal}_regiondropdown .country_cn a").css("background-image");                        
                var background_image_url = cn_background_image_css.replace(/"/g,"").replace(/url\(|\)$/ig, "").replace(/cn/ig, real_regionCode);
                //console.log(background_image_url);

                $("#{/literal}{{$idname}}{literal}_flag").html("<img src='"+background_image_url+"'/>");

                $("#{/literal}{{$idname}}{literal}_country_code").val("+"+countryCode);

                //$("#phone_office").val(real_regionCode);
                //console.log('test a');
                //console.log(real_regionCode);
                //console.log('test b');
            }catch (e) {
                //console.log('exception from keyup:' + e);
            }

        });

        $("#{/literal}{{$idname}}{literal}").bind('focusin', function(){
            //hide the error message   
            $("#{/literal}{{$idname}}{literal}").parent().find("div.validation-message").remove();
            for(var wp = 0; wp < inputsWithErrors.length; wp++) {
//                 
                if(typeof(inputsWithErrors[wp]) !='undefined' && typeof inputsWithErrors[wp].parentNode != 'undefined' && inputsWithErrors[wp].parentNode != null) {
//                    console.log('aaa');
//                    console.log(inputsWithErrors[wp].name);
//                    console.log('bbb');
                    if(inputsWithErrors[wp].name == '{/literal}{{$idname}}{literal}'){
                        inputsWithErrors.splice(wp, 1);

                    }
                }
            }

        });
  
      
</script>
{/literal}


