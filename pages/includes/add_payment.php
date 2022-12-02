<!-- View -->


<!-- Modal -->
<div class="modal fade" id="addpayment_method" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">New Payment Method</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="" action="payment_add" method="POST">
        <input class="form-control" type="hidden" name="user_id" id="" value="<?php echo $agent['id']; ?>">
        <div class="modal-body">
          <div class="row ">
            <div class="col-lg-6">
              <div class="divider">
                <div class="divider-text">Billing Information</div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Firstname</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="firstname" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Lastname</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="lastname" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Phone Number</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="contact" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Country/Region</label>
                  <div class="col-md-8">
                    <!-- <input class="form-control" type="text" name="country" id="" > -->
                    <select class="form-control" name="country" data-language="en">
                      <option value="" hidden>Select a country</option>
                      <option value="Afghanistan" data-class="af">Afghanistan</option>
                      <option value="Aland Islands" data-class="ax">Aland Islands</option>
                      <option value="Albania" data-class="al">Albania</option>
                      <option value="Algeria" data-class="dz">Algeria</option>
                      <option value="American Samoa" data-class="as">American Samoa</option>
                      <option value="Andorra" data-class="ad">Andorra</option>
                      <option value="Angola" data-class="ao">Angola</option>
                      <option value="Anguilla" data-class="ai">Anguilla</option>
                      <option value="Antarctica" data-class="aq">Antarctica</option>
                      <option value="Antigua and Barbuda" data-class="ag">Antigua and Barbuda</option>
                      <option value="Argentina" data-class="ar">Argentina</option>
                      <option value="Armenia" data-class="am">Armenia</option>
                      <option value="Aruba" data-class="aw">Aruba</option>
                      <option value="Australia" data-class="au">Australia</option>
                      <option value="Austria" data-class="at">Austria</option>
                      <option value="Azerbaijian" data-class="az">Azerbaijian</option>
                      <option value="Bahamas" data-class="bs">Bahamas</option>
                      <option value="Bahrain" data-class="bh">Bahrain</option>
                      <option value="Bangladesh" data-class="bd">Bangladesh</option>
                      <option value="Barbados" data-class="bb">Barbados</option>
                      <option value="Belarus" data-class="by">Belarus</option>
                      <option value="Belgium" data-class="be">Belgium</option>
                      <option value="Belize" data-class="bz">Belize</option>
                      <option value="Benin" data-class="bj">Benin</option>
                      <option value="Bermuda" data-class="bm">Bermuda</option>
                      <option value="Bhutan" data-class="bt">Bhutan</option>
                      <option value="Bolivia (Plurinational State of)" data-class="bo">Bolivia (Plurinational State
                        of)</option>
                      <option value="Bonaire, Sint Eustatius and Saba" data-class="bq">Bonaire, Sint Eustatius and
                        Saba</option>
                      <option value="Bosnia and Herzegovina" data-class="ba">Bosnia and Herzegovina</option>
                      <option value="Botswana" data-class="bw">Botswana</option>
                      <option value="Brazil" data-class="br">Brazil</option>
                      <option value="British Indian Ocean Territory" data-class="io">British Indian Ocean Territory
                      </option>
                      <option value="Brunei Darussalam" data-class="bn">Brunei Darussalam</option>
                      <option value="Bulgaria" data-class="bg">Bulgaria</option>
                      <option value="Burkina Faso" data-class="bf">Burkina Faso</option>
                      <option value="Burundi" data-class="bi">Burundi</option>
                      <option value="Cabo Verde" data-class="cv">Cabo Verde</option>
                      <option value="Cambodia" data-class="kh">Cambodia</option>
                      <option value="Cameroon" data-class="cm">Cameroon</option>
                      <option value="Canada" data-class="ca">Canada</option>
                      <option value="Cayman Islands" data-class="ky">Cayman Islands</option>
                      <option value="Central African Republic" data-class="cf">Central African Republic</option>
                      <option value="Chad" data-class="td">Chad</option>
                      <option value="Chile" data-class="cl">Chile</option>
                      <option value="China" data-class="cn">China</option>
                      <option value="Christmas Island" data-class="cx">Christmas Island</option>
                      <option value="Cocos (Keeling) Islands" data-class="cc">Cocos (Keeling) Islands</option>
                      <option value="Colombia" data-class="co">Colombia</option>
                      <option value="Comoros" data-class="km">Comoros</option>
                      <option value="Congo" data-class="cg">Congo</option>
                      <option value="Congo (the Democratic Republic of the)" data-class="cd">Congo (the Democratic
                        Republic of the)</option>
                      <option value="Cook Islands" data-class="ck">Cook Islands</option>
                      <option value="Costa Rica" data-class="cr">Costa Rica</option>
                      <option value="Cote D'ivoire" data-class="ci">Cote D'ivoire</option>
                      <option value="Croatia" data-class="hr">Croatia</option>
                      <option value="Cuba" data-class="cu">Cuba</option>
                      <option value="Curacao" data-class="cw">Curacao</option>
                      <option value="Cyprus" data-class="cy">Cyprus</option>
                      <option value="Czechia" data-class="cz">Czechia</option>
                      <option value="Denmark" data-class="dk">Denmark</option>
                      <option value="Djibouti" data-class="dj">Djibouti</option>
                      <option value="Dominica" data-class="dm">Dominica</option>
                      <option value="Dominican Republic" data-class="do1">Dominican Republic</option>
                      <option value="Ecuador" data-class="ec">Ecuador</option>
                      <option value="Egypt" data-class="eg">Egypt</option>
                      <option value="El Salvador" data-class="sv">El Salvador</option>
                      <option value="Equatorial Guinea" data-class="gq">Equatorial Guinea</option>
                      <option value="Eritrea" data-class="er">Eritrea</option>
                      <option value="Estonia" data-class="ee">Estonia</option>
                      <option value="Ethiopia" data-class="et">Ethiopia</option>
                      <option value="Falkland Islands (Malvinas)" data-class="fk">Falkland Islands (Malvinas)</option>
                      <option value="Faroe Islands" data-class="fo">Faroe Islands</option>
                      <option value="Fiji" data-class="fj">Fiji</option>
                      <option value="Finland" data-class="fi">Finland</option>
                      <option value="France" data-class="fr">France</option>
                      <option value="French Guiana" data-class="gf">French Guiana</option>
                      <option value="French Polynesia" data-class="pf">French Polynesia</option>
                      <option value="French Southern Territories" data-class="tf">French Southern Territories</option>
                      <option value="Gabon" data-class="ga">Gabon</option>
                      <option value="Gambia" data-class="gm">Gambia</option>
                      <option value="Georgia" data-class="ge">Georgia</option>
                      <option value="Germany" data-class="de">Germany</option>
                      <option value="Ghana" data-class="gh">Ghana</option>
                      <option value="Gibraltar" data-class="gi">Gibraltar</option>
                      <option value="Greece" data-class="gr">Greece</option>
                      <option value="Greenland" data-class="gl">Greenland</option>
                      <option value="Grenada" data-class="gd">Grenada</option>
                      <option value="Guadeloupe" data-class="gp">Guadeloupe</option>
                      <option value="Guam" data-class="gu">Guam</option>
                      <option value="Guatemala" data-class="gt">Guatemala</option>
                      <option value="Guernsey" data-class="gg">Guernsey</option>
                      <option value="Guinea" data-class="gn">Guinea</option>
                      <option value="Guinea-Bissau" data-class="gw">Guinea-Bissau</option>
                      <option value="Guyana" data-class="gy">Guyana</option>
                      <option value="Haiti" data-class="ht">Haiti</option>
                      <option value="Holy See" data-class="va">Holy See</option>
                      <option value="Honduras" data-class="hn">Honduras</option>
                      <option value="Hong Kong" data-class="hk">Hong Kong</option>
                      <option value="Hungary" data-class="hu">Hungary</option>
                      <option value="Iceland" data-class="is">Iceland</option>
                      <option value="India" data-class="in1">India</option>
                      <option value="Indonesia" data-class="id">Indonesia</option>
                      <option value="Iran (Islamic Republic of)" data-class="ir">Iran (Islamic Republic of)</option>
                      <option value="Iraq" data-class="iq">Iraq</option>
                      <option value="Ireland" data-class="ie">Ireland</option>
                      <option value="Isle of Man" data-class="im">Isle of Man</option>
                      <option value="Israel" data-class="il">Israel</option>
                      <option value="Italy" data-class="it">Italy</option>
                      <option value="Jamaica" data-class="jm">Jamaica</option>
                      <option value="Japan" data-class="jp">Japan</option>
                      <option value="Jersey" data-class="je">Jersey</option>
                      <option value="Jordan" data-class="jo">Jordan</option>
                      <option value="Kazakhstan" data-class="kz">Kazakhstan</option>
                      <option value="Kenya" data-class="ke">Kenya</option>
                      <option value="Kiribati" data-class="ki">Kiribati</option>
                      <option value="Korea (the Democratic People's Republic of)" data-class="kp">Korea (the
                        Democratic People's Republic of)</option>
                      <option value="Korea (the Republic of)" data-class="kr">Korea (the Republic of)</option>
                      <option value="Kuwait" data-class="kw">Kuwait</option>
                      <option value="Kyrgyzstan" data-class="kg">Kyrgyzstan</option>
                      <option value="Lao People's Democratic Republic" data-class="la">Lao People's Democratic
                        Republic</option>
                      <option value="Latvia" data-class="lv">Latvia</option>
                      <option value="Lebanon" data-class="lb">Lebanon</option>
                      <option value="Lesotho" data-class="ls">Lesotho</option>
                      <option value="Liberia" data-class="lr">Liberia</option>
                      <option value="Libya" data-class="ly">Libya</option>
                      <option value="Liechtenstein" data-class="li">Liechtenstein</option>
                      <option value="Lithuania" data-class="lt">Lithuania</option>
                      <option value="Luxembourg" data-class="lu">Luxembourg</option>
                      <option value="Macao" data-class="mo">Macao</option>
                      <option value="North Macedonia" data-class="mk">North Macedonia</option>
                      <option value="Madagascar" data-class="mg">Madagascar</option>
                      <option value="Malawi" data-class="mw">Malawi</option>
                      <option value="Malaysia" data-class="my">Malaysia</option>
                      <option value="Maldives" data-class="mv">Maldives</option>
                      <option value="Mali" data-class="ml">Mali</option>
                      <option value="Malta" data-class="mt">Malta</option>
                      <option value="Marshall Islands" data-class="mh">Marshall Islands</option>
                      <option value="Martinique" data-class="mq">Martinique</option>
                      <option value="Mauritania" data-class="mr">Mauritania</option>
                      <option value="Mauritius" data-class="mu">Mauritius</option>
                      <option value="Mayotte" data-class="yt">Mayotte</option>
                      <option value="Mexico" data-class="mx">Mexico</option>
                      <option value="Micronesia (Federated States of)" data-class="fm">Micronesia (Federated States
                        of)</option>
                      <option value="Moldova (the Republic of)" data-class="md">Moldova (the Republic of)</option>
                      <option value="Monaco" data-class="mc">Monaco</option>
                      <option value="Mongolia" data-class="mn">Mongolia</option>
                      <option value="Montenegro" data-class="me">Montenegro</option>
                      <option value="Montserrat" data-class="ms">Montserrat</option>
                      <option value="Morocco" data-class="ma">Morocco</option>
                      <option value="Mozambique" data-class="mz">Mozambique</option>
                      <option value="Myanmar" data-class="mm">Myanmar</option>
                      <option value="Namibia" data-class="na">Namibia</option>
                      <option value="Nauru" data-class="nr">Nauru</option>
                      <option value="Nepal" data-class="np">Nepal</option>
                      <option value="Netherlands" data-class="nl">Netherlands</option>
                      <option value="New Caledonia" data-class="nc">New Caledonia</option>
                      <option value="New Zealand" data-class="nz">New Zealand</option>
                      <option value="Nicaragua" data-class="ni">Nicaragua</option>
                      <option value="Niger" data-class="ne">Niger</option>
                      <option value="Nigeria" data-class="ng">Nigeria</option>
                      <option value="Niue" data-class="nu">Niue</option>
                      <option value="Norfolk Island" data-class="nf">Norfolk Island</option>
                      <option value="Northern Mariana Islands" data-class="mp">Northern Mariana Islands</option>
                      <option value="Norway" data-class="no">Norway</option>
                      <option value="Oman" data-class="om">Oman</option>
                      <option value="Pakistan" data-class="pk">Pakistan</option>
                      <option value="Palau" data-class="pw">Palau</option>
                      <option value="Palestine, State of" data-class="ps">Palestine, State of</option>
                      <option value="Panama" data-class="pa">Panama</option>
                      <option value="Papua New Guinea" data-class="pg">Papua New Guinea</option>
                      <option value="Paraguay" data-class="py">Paraguay</option>
                      <option value="Peru" data-class="pe">Peru</option>
                      <option value="Philippines" data-class="ph">Philippines</option>
                      <option value="Pitcairn" data-class="pn">Pitcairn</option>
                      <option value="Poland" data-class="pl">Poland</option>
                      <option value="Portugal" data-class="pt">Portugal</option>
                      <option value="Puerto Rico" data-class="pr">Puerto Rico</option>
                      <option value="Qatar" data-class="qa">Qatar</option>
                      <option value="Reunion" data-class="re">Reunion</option>
                      <option value="Romania" data-class="ro">Romania</option>
                      <option value="Russian Federation" data-class="ru">Russian Federation</option>
                      <option value="Rwanda" data-class="rw">Rwanda</option>
                      <option value="Saint Barthelemy" data-class="bl">Saint Barthelemy</option>
                      <option value="Saint Helena, Ascension and Tristan Da Cunha" data-class="sh">Saint Helena,
                        Ascension and Tristan Da Cunha</option>
                      <option value="Saint Kitts and Nevis" data-class="kn">Saint Kitts and Nevis</option>
                      <option value="Saint Lucia" data-class="lc">Saint Lucia</option>
                      <option value="Saint Martin (French Part)" data-class="mf">Saint Martin (French Part)</option>
                      <option value="Saint Pierre and Miquelon" data-class="pm">Saint Pierre and Miquelon</option>
                      <option value="Saint Vincent and The Grenadines" data-class="vc">Saint Vincent and The
                        Grenadines</option>
                      <option value="Samoa" data-class="ws">Samoa</option>
                      <option value="San Marino" data-class="sm">San Marino</option>
                      <option value="Sao Tome and Principe" data-class="st">Sao Tome and Principe</option>
                      <option value="Saudi Arabia" data-class="sa">Saudi Arabia</option>
                      <option value="Senegal" data-class="sn">Senegal</option>
                      <option value="Serbia" data-class="rs">Serbia</option>
                      <option value="Seychelles" data-class="sc">Seychelles</option>
                      <option value="Sierra Leone" data-class="sl">Sierra Leone</option>
                      <option value="Singapore" data-class="sg">Singapore</option>
                      <option value="Sint Maarten (Dutch Part)" data-class="sx">Sint Maarten (Dutch Part)</option>
                      <option value="Slovakia" data-class="sk">Slovakia</option>
                      <option value="Slovenia" data-class="si">Slovenia</option>
                      <option value="Solomon Islands" data-class="sb">Solomon Islands</option>
                      <option value="Somalia" data-class="so">Somalia</option>
                      <option value="South Africa" data-class="za">South Africa</option>
                      <option value="South Georgia and The South Sandwich Islands" data-class="gs">South Georgia and
                        The South Sandwich Islands</option>
                      <option value="South Sudan" data-class="ss">South Sudan</option>
                      <option value="Spain" data-class="es">Spain</option>
                      <option value="Sri Lanka" data-class="lk">Sri Lanka</option>
                      <option value="Sudan" data-class="sd">Sudan</option>
                      <option value="Suriname" data-class="sr">Suriname</option>
                      <option value="Svalbard and Jan Mayen" data-class="sj">Svalbard and Jan Mayen</option>
                      <option value="Eswatini" data-class="sz">Eswatini</option>
                      <option value="Sweden" data-class="se">Sweden</option>
                      <option value="Switzerland" data-class="ch">Switzerland</option>
                      <option value="Syrian Arab Republic" data-class="sy">Syrian Arab Republic</option>
                      <option value="Taiwan (Province of China)" data-class="tw">Taiwan (Province of China)</option>
                      <option value="Tajikistan" data-class="tj">Tajikistan</option>
                      <option value="Tanzania, United Republic of" data-class="tz">Tanzania, United Republic of
                      </option>
                      <option value="Thailand" data-class="th">Thailand</option>
                      <option value="Timor-Leste" data-class="tl">Timor-Leste</option>
                      <option value="Togo" data-class="tg">Togo</option>
                      <option value="Tokelau" data-class="tk">Tokelau</option>
                      <option value="Tonga" data-class="to">Tonga</option>
                      <option value="Trinidad and Tobago" data-class="tt">Trinidad and Tobago</option>
                      <option value="Tunisia" data-class="tn">Tunisia</option>
                      <option value="Turkey" data-class="tr">Turkey</option>
                      <option value="Turkmenistan" data-class="tm">Turkmenistan</option>
                      <option value="Turks and Caicos Islands" data-class="tc">Turks and Caicos Islands</option>
                      <option value="Tuvalu" data-class="tv">Tuvalu</option>
                      <option value="Uganda" data-class="ug">Uganda</option>
                      <option value="Ukraine" data-class="ua">Ukraine</option>
                      <option value="United Arab Emirates" data-class="ae">United Arab Emirates</option>
                      <option value="United Kingdom of Great Britain and Northern Ireland" data-class="gb">United
                        Kingdom of Great Britain and Northern Ireland</option>
                      <option value="United States of America" data-class="us">United States of America</option>
                      <option value="United States Minor Outlying Islands" data-class="um">United States Minor
                        Outlying Islands</option>
                      <option value="Uruguay" data-class="uy">Uruguay</option>
                      <option value="Uzbekistan" data-class="uz">Uzbekistan</option>
                      <option value="Vanuatu" data-class="vu">Vanuatu</option>
                      <option value="Venezuela (Bolivarian Republic of)" data-class="ve">Venezuela (Bolivarian
                        Republic of)</option>
                      <option value="Viet Nam" data-class="vn">Viet Nam</option>
                      <option value="Virgin Islands (British)" data-class="vg">Virgin Islands (British)</option>
                      <option value="Virgin Islands (U.S.)" data-class="vi">Virgin Islands (U.S.)</option>
                      <option value="Wallis and Futuna" data-class="wf">Wallis and Futuna</option>
                      <option value="Western Sahara" data-class="eh">Western Sahara</option>
                      <option value="Yemen" data-class="ye">Yemen</option>
                      <option value="Zambia" data-class="zm">Zambia</option>
                      <option value="Zimbabwe" data-class="zw">Zimbabwe</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Address</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="address" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Postal Code</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="postal" maxlength="5" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Province</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="province" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">City</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="city" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Organization</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="organization" id="">
                  </div>
                </div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Tax Id</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="tax_id" id="">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="divider">
                <div class="divider-text">Card information</div>
              </div>
              <div class="row g-2 mb-3">
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Card Number</label>
                  <div class="col-md-8">
                    <input class="form-control card_type" type="text" maxlength="20" name="card_num" id=""
                      placeholder="•••• •••• •••• ••••">
                    <input class="form-control cardt" type="hidden" name="card_type">
                  </div>
                </div>
                <!-- <div class="mb-3 row">
                    <label class="col-md-3 col-form-label">Expiration Date</label>
                    <div class="col-md-8">
                      <input class="form-control" placeholder="Month" type="text" name="exp_date_month" id="" >
                    </div>
                  </div> -->
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Expiration Date</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <select class="form-control" name="exp_date_month">
                        <option value="MM" hidden="">MM</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <select class="form-control" name="exp_date_year">
                        <option value="YYYY" hidden="">YYYY</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                        <option value="2037">2037</option>
                        <option value="2038">2038</option>
                        <option value="2039">2039</option>
                        <option value="2040">2040</option>
                        <option value="2041">2041</option>
                        <option value="2042">2042</option>
                        <option value="2043">2043</option>
                        <option value="2044">2044</option>
                        <option value="2045">2045</option>
                        <option value="2046">2046</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-md-3 col-form-label">Security Code</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="sec_code" maxlength="3" placeholder="•••">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="modal-footer">
              <button class="btn btn-success" name="add_paymentmethod" type="submit">Save</button>
            </div>
          </div>
        </div>
      </form>
    </div>
                    
<!-- End  of Modal -->