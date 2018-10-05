<game>
    <!-- Colors ............................................................................................................................. -->
    <colors>
        <color key="neutral" color="ffffff"/>
        <color key="allied" color="33ff33"/>
        <color key="noAttackPact" color="ffcc00"/>
        <color key="atWar" color="cc0000"/>
        <color key="sameGroup" color="FFD700"/>
        <color key="sameClan" color="33ff33"/>
        <color key="sameFraction" color="0099ff"/>
        <color key="enemy" color="cc0000"/>
        <color key="noLock" color="bbbbbb"/>
        <color key="legendary" color="8048ff"/>

        <!-- video window -->
        <videoWindow>
            <color key="red" color="f03030"/>
            <color key="blue" color="06C9FF"/>
        </videoWindow>

    </colors>
    <!-- Hitpoints bubble Colors ............................................................................................................................. -->
    <hitpointColors>
        <hitpointColor id="0" code="ff0000" comment="standard damage color"/>
        <hitpointColor id="1" code="db63e2" comment="standard hero color"/>
        <hitpointColor id="2" code="49BE40" comment="heal hp color"/>
        <hitpointColor id="3" code="0066CC" comment="heal shield color"/>
        <hitpointColor id="4" code="8888ff"/>
        <hitpointColor id="5" code="88ffff"/>
    </hitpointColors>
    <!-- Windows ............................................................................................................................. -->
    <windows>
        <!-- stats window -->
        <window titleKey="title_user" icon="player_icon.png" id="0" shortcut="US" x="444" y="5" width_0="200"
                height_0="92" closeable="false" slotType="left" hudToggle="true" saveSettings="true"
                helpKey="httip_user" startMinimized="true" transparency="true">
            <infoFieldContainer id="1" x_0="15" y_0="35" textFieldWidth="30">
                <infoField id="20" linkage="shipInfoIcon_experience" languageKey="ttip_experience"/>
                <infoField id="21" linkage="shipInfoIcon_level" languageKey="ttip_level"/>
                <infoField id="22" linkage="shipInfoIcon_honor" languageKey="ttip_honor"/>
                <infoField id="87" linkage="shipInfoIcon_jumpvoucher" languageKey="ttip_jump-vouchers_count"/>
            </infoFieldContainer>
            <infoFieldContainer id="4" x_0="120" y_0="35" textFieldWidth="70">
                <infoField id="29" linkage="shipInfoIcon_credits" languageKey="ttip_credits"/>
                <infoField id="31" linkage="shipInfoIcon_uridium" languageKey="ttip_uridium"/>
                <infoField id="30" linkage="shipInfoIcon_jackpot" languageKey="ttip_jackpot"/>
                <infoField id="86" linkage="shipInfoIcon_bootykey" languageKey="ttip_booty-key"/>
            </infoFieldContainer>
        </window>

        <window titleKey="title_clanvisibility" icon="clan_member_online_visibility.png" id="43" x="5" y="5"
                width_0="10" height_0="10" closeable="false" slotType="left" hudToggle="true" saveSettings="true"
                helpKey="httip_clanvisibility" startMinimized="true" transparency="true"></window>
        <window titleKey="title_wordpuzzle" icon="puzzle.png" id="44" x="5" y="5" width_0="10" height_0="10"
                closeable="false" slotType="left" hudToggle="true" saveSettings="true" helpKey="title_wordpuzzle"
                startMinimized="true" transparency="true"></window>
        <window titleKey="title_countdownHalloweenNpcs" icon="countdown_status_halloween_npc_icon.png" id="45" x="5"
                y="5" width_0="10" height_0="10" closeable="false" slotType="left" hudToggle="true" saveSettings="true"
                helpKey="httip_countdownHalloweenNPCs" startMinimized="true" transparency="true"></window>

        <!-- hero window -->
        <window titleKey="title_ship" icon="ship_icon.png" id="1" shortcut="SI" x="670" y="5" width_0="200"
                height_0="96" width_1="254" height_1="112" closeable="false" slotType="left" hudToggle="true"
                saveSettings="true" helpKey="httip_ship" transparency="true">
            <infoFieldContainer id="5" x_0="15" y_0="35" textFieldWidth="110">
                <infoField id="23" linkage="shipInfoIcon_hitpoints" bar="bar_green" languageKey="ttip_hitpoints"/>
                <infoField id="24" linkage="shipInfoIcon_shield" bar="bar_blue" languageKey="ttip_shield"/>
                <infoField id="100" linkage="shipInfoIcon_nanohull" bar="bar_yellow2" languageKey="ttip_nanohull"/>
                <infoField id="28" linkage="shipInfoIcon_configuration" languageKey="ttip_configuration"/>
            </infoFieldContainer>
            <infoFieldContainer id="14" x_0="112" y_0="35" x_1="150" y_1="35" textFieldWidth="110">
                <infoField id="25" linkage="shipInfoIcon_cargo" bar="bar_yellow" languageKey="ttip_cargo"/>
                <infoField id="26" linkage="shipInfoIcon_laser" bar="bar_red,bar_red_transparent"
                           languageKey="ttip_ammunition"/>
                <infoField id="27" linkage="shipInfoIcon_rockets" bar="bar_red,bar_red_transparent"
                           languageKey="ttip_rockets"/>
            </infoFieldContainer>
        </window>

        <window titleKey="title_connection_info" id="8" x="center" y="center" width_0="300" height_0="210"
                maximizeOnCreate="true"/>
        <window titleKey="title_connection_lost" id="12" x="center" y="center" width_0="300" height_0="250"
                maximizeOnCreate="true"/>
        <window titleKey="title_beta_info" id="9" x="center" y="center" width_0="500" height_0="300" closeable="true"/>
        <window titleKey="title_logout" icon="logout_icon.png" bgNormalIcon="comb03_std.png"
                bgHoverIcon="comb03_hover.png" id="7" x="center" y="center" width_0="200" height_0="200"
                startMinimized="true" slotType="static" minimizeOnClick="false"/>
        <window titleKey="title_quests" icon="quest_icon.png" id="10" shortcut="QU" x="center" y="center" width_0="200"
                height_0="200" startMinimized="true" maximizeOnCreate="true" slotType="left" saveSettings="true"
                hudToggle="true" transparency="true"/>
        <window titleKey="title_log" icon="log_icon.png" id="5" shortcut="LG" x="10" y="10" width_0="240" height_0="150"
                resizable="true" slotType="left" hudToggle="true" saveSettings="true" helpKey="httip_log"
                transparency="true"/>
        <window titleKey="title_map" icon="map_icon.png" id="3" shortcut="MM" x="10" y="10" width_0="238" height_0="180"
                zoomable="true" slotType="left" saveSettings="true" hudToggle="true" helpKey="httip_minimap"
                transparency="true"/>
        <window titleKey="title_settings" icon="settings_icon.png" id="4" shortcut="ST" x="10" y="10" width_0="400"
                height_0="464" startMinimized="true" slotType="static"/>
        <window titleKey="title_help" icon="help_icon.png" id="11" shortcut="HP" x="10" y="10" width_0="400"
                height_0="440" startMinimized="true" slotType="static"/>
        <window titleKey="title_trade" icon="trade_icon.png" id="6" shortcut="TR" x="10" y="10" width_0="565"
                height_0="210" startMinimized="true" slotType="static" maximizeOnClick="false"/>
        <window titleKey="title_spacemap" icon="spacemap_icon.png" shortcut="SM" id="13" x="10" y="10" width_0="650"
                height_0="475" startMinimized="true" slotType="left" saveSettings="true" helpKey="httip_spacemap"/>
        <window titleKey="title_alert" windowType="0" icon="info_icon.png" id="14" x="10" y="10" width_0="300"
                height_0="150"/>
        <window titleKey="title_booster" icon="booster_icon.png" id="15" shortcut="BO" x="10" y="10" width_0="110"
                height_0="150" slotType="left" saveSettings="true" hudToggle="true" transparency="true"/>
        <window titleKey="title_spaceball" icon="spaceball_icon.png" id="16" shortcut="SB" x="10" y="10" width_0="170"
                height_0="70" slotType="left" saveSettings="true" hudToggle="true" transparency="true"/>
        <window titleKey="title_invasion" icon="invasion_icon.png" id="17" shortcut="IV" x="10" y="10" width_0="170"
                height_0="80" slotType="left" saveSettings="true" hudToggle="true" transparency="true"/>
        <window titleKey="title_ctb" icon="ctb_icon.png" id="18" shortcut="CT" x="10" y="10" width_0="170" height_0="70"
                slotType="left" saveSettings="true" hudToggle="true" transparency="true"/>
        <window titleKey="title_tdm" icon="tdm_icon.png" id="19" shortcut="TD" x="10" y="10" width_0="190" height_0="50"
                slotType="left" saveSettings="true" hudToggle="true" transparency="true">
            <infoFieldContainer id="26" x_0="15" y_0="35" textFieldWidth="30" align="noAlign">
                <infoField id="40" linkage="cbInfoIcon_timer" languageKey="ttip_tdmTimer_1"/>
                <infoField id="41" linkage="cbInfoIcon_games" languageKey="ttip_tdmGames"/>
                <infoField id="42" linkage="cbInfoIcon_queue" languageKey="ttip_tdmQueue"/>
            </infoFieldContainer>
        </window>
        <window titleKey="title_ifg" icon="infiltration_game.png" id="42" shortcut="TD" x="10" y="10" width_0="220"
                height_0="55" slotType="left" saveSettings="true" hudToggle="true" transparency="true">
            <infoFieldContainer id="70" x_0="15" y_0="35" textFieldWidth="30" align="noAlign">
                <infoField id="98" linkage="cbInfoIcon_timer" languageKey="ttip_infiltrationGameTimer"/>
                <infoField id="99" linkage="infoIcon_ifg" languageKey="ttip_ifg_amounts" width="135" lineCount="2"/>
            </infoFieldContainer>
        </window>
        <window titleKey="title_chat" icon="chat_icon.png" id="20" shortcut="CH" x="10" y="10" width_0="300"
                height_0="150" slotType="left" saveSettings="true" resizable="true" hudToggle="true"
                transparency="true"/>
        <window titleKey="title_alert" id="21" x="center" y="center" width_0="330" height_0="200"/>
        <window titleKey="title_cli" icon="log_icon.png" id="22" x="center" y="center" width_0="330" height_0="200"
                resizable="true" startMinimized="true" slotType="left" hudToggle="true" saveSettings="true"/>
        <window titleKey="title_group" icon="groupsystem_icon.png" id="23" shortcut="GS" x="center" y="center"
                width_0="330" height_0="200" startMinimized="false" slotType="left" hudToggle="true" saveSettings="true"
                helpKey="httip_group" transparency="true"/>
        <window titleKey="title_refinement" icon="refinement_icon.png" id="24" shortcut="RF" x="center" y="center"
                width_0="455" height_0="525" startMinimized="true" slotType="static" saveSettings="true">
            <containers>
                <simpleContainer id="36" x="20" y="45"/>

                <simpleContainer id="37" x="20" y="70"/>
                <simpleContainer id="35" x="20" y="100"/>
                <simpleContainer id="31" x="20" y="230"/>
                <simpleContainer id="32" x="20" y="410"/>

                <simpleContainer id="38" x="20" y="70"/>
                <simpleContainer id="39" x="60" y="190"/>
                <simpleContainer id="40" x="60" y="260"/>
                <simpleContainer id="41" x="65" y="206"/>
            </containers>
        </window>
        <window titleKey="title_alert" id="25" x="center" y="center" width_0="350" height_0="110"/>
        <window titleKey="title_alert" id="26" x="center" y="center" width_0="140" height_0="110"/>

        <window titleKey="title_alert" id="27" x="center" y="center" width_0="240" height_0="150" saveSettings="false"/>
        <window titleKey="title_alert" id="28" x="center" y="center" width_0="300" height_0="140"/>
        <window titleKey="title_alert" id="29" icon="log_icon.png" x="center" y="center" width_0="300" height_0="140"/>
        <window titleKey="title_repair" id="30" icon="log_icon.png" x="center" y="center" width_0="300" height_0="240"/>
        <window titleKey="title_alert" id="31" x="center" y="center" width_0="300" height_0="140"/>
        <window titleKey="title_startupquests" id="32" icon="achievements_icon.png" x="center" y="center" width_0="460"
                height_0="180" resizable="true" slotType="left" saveSettings="true" startMinimized="false"
                transparency="true"/>
        <window titleKey="title_techs" id="33" icon="tech.png" x="0" y="400" width_0="300" height_0="100"
                resizable="false" slotType="left" saveSettings="true" startMinimized="false" transparency="true"/>
        <window titleKey="title_jackpotbattle" id="34" x="0" y="400" width_0="150" height_0="30" resizable="false"
                slotType="left" saveSettings="true" startMinimized="false" transparency="true"/>
        <window titleKey="title_network" id="35" x="0" y="400" width_0="250" height_0="200" resizable="false"
                slotType="left" saveSettings="true" startMinimized="false" transparency="true"/>
        <window titleKey="title_pet" id="36" icon="pet.png" x="50" y="400" width_0="260" height_0="130" resizable="true"
                slotType="left" hudToggle="true" saveSettings="true" startMinimized="true" transparency="true"
                helpKey="httip_pet">
            <containers>
                <simpleContainer id="54" x="0" y="0"/>
                <simpleContainer id="55" x="0" y="0"/>
            </containers>
        </window>
        <window titleKey="title_ranked_hunt" id="37" icon="npc_hunt_icon.png" x="10" y="10" width_0="200" height_0="55"
                resizable="false" slotType="left" saveSettings="true" startMinimized="true" transparency="true"
                hudToggle="true">
            <infoFieldContainer id="51" x_0="15" y_0="35" textFieldWidth="60">
                <infoField id="81" width="60" languageKey="ttip_ranked_hunt_point" textColor="edbd00"/>
            </infoFieldContainer>
            <infoFieldContainer id="52" x_0="110" y_0="35" textFieldWidth="60">
                <infoField id="82" width="60" languageKey="ttip_clan_ranked_hunt_point" linkage="clan"/>
            </infoFieldContainer>
        </window>
        <window titleKey="title_highscoregate" id="38" icon="highscore_gate_icon.png" x="10" y="10" width_0="225"
                height_0="55" resizable="false" slotType="left" saveSettings="true" startMinimized="false"
                transparency="true" hudToggle="true">
            <infoFieldContainer id="57" x_0="10" y_0="35">
                <infoField id="90" languageKey="ttip_highscoregate_time_left" textColor="ffffff" linkage="clock_hsg"/>
            </infoFieldContainer>
            <infoFieldContainer id="58" x_0="90" y_0="35">
                <infoField id="91" languageKey="ttip_highscoregate_wave" textColor="ffffff" linkage="wave_hsg"/>
            </infoFieldContainer>
            <infoFieldContainer id="59" x_0="150" y_0="35">
                <infoField id="92" languageKey="ttip_highscoregate_score" textColor="ffffff" linkage="highscore_hsg"/>
            </infoFieldContainer>
        </window>
        <window titleKey="title_captcha" id="39" icon="captcha_icon.png" x="10" y="10" width_0="320" height_0="150"
                resizable="false" slotType="left" saveSettings="false" startMinimized="false" transparency="true"
                hudToggle="true">
            <containers>
                <simpleContainer id="60" x="0" y="0"/>
                <simpleContainer id="61" x="0" y="0"/>
                <simpleContainer id="62" x="0" y="0"/>
                <simpleContainer id="63" x="0" y="0"/>
                <simpleContainer id="64" x="0" y="0"/>
                <simpleContainer id="65" x="0" y="0"/>
            </containers>
        </window>
        <window titleKey="title_scoreevent" id="40" icon="score_fest_icon.png" x="10" y="10" width_0="200"
                height_0="100" resizable="false" slotType="left" saveSettings="true" startMinimized="false"
                transparency="true" hudToggle="true">
            <infoFieldContainer id="66" x_0="15" y_0="35">
                <infoField id="93" languageKey="ttip_scoreevent_lives_remaining" textColor="ffffff"
                           linkage="lives_scorefest"/>
            </infoFieldContainer>
            <infoFieldContainer id="69" x_0="15" y_0="53">
                <infoField id="96"/>
            </infoFieldContainer>
            <infoFieldContainer id="67" x_0="15" y_0="60">
                <infoField id="94" languageKey="ttip_scoreevent_combo" textColor="ffffff" linkage="combo_scorefest"/>
            </infoFieldContainer>
            <infoFieldContainer id="68" x_0="15" y_0="89">
                <infoField id="95" languageKey="ttip_scoreevent_score" textColor="ffffff" linkage="score_scorefest"/>
            </infoFieldContainer>
        </window>
        <window titleKey="title_alert" id="41" x="center" y="center" width_0="240" height_0="150"/>
        <window titleKey="title_sectorcontrol_ingame_status" icon="sector_control.png" id="47" x="10" y="10"
                width_0="200" height_0="100" slotType="left" saveSettings="true"/>
        <window titleKey="title_jackpot_status_ui" icon="icons_jackpot" width_0="430" height_0="340" id="48" x="center"
                y="center" closeable="false" slotType="left" hudToggle="true" startMinimized="false"
                saveSettings="true">
            <containers>
                <simpleContainer id="0" x="215" y="30"/>
                <simpleContainer id="1" x="215" y="70"/>
                <simpleContainer id="2" x="215" y="70"/>
            </containers>
        </window>

    </windows>

    <!-- Setting Fields ............................................................................................................................. -->

    <settingsGameplay>
        <settingField id="1" key="sett_setting1"/> <!-- Automatic weapons upgrade by activating lab CPU -->
        <settingField id="22" key="sett_setting22"/> <!-- Change ammo/rocket type automatically -->
        <settingField id="25" key="auto_refinement" tooltipKey="ttip_auto_refinement"/>
        <!-- Auto-refine raw materials -->
        <settingField id="26" key="setting_quickSlotStopAttack"/> <!-- Start and stop attacks using the shortcut bar -->
        <settingField id="27" key="setting_autostart"/>
        <settingField id="28" key="setting_doubleClickAttack"/><!--  Starts laser attack -->
        <settingField id="46" key="setting_auto_buy_booty_keys"/><!--  Starts laser attack -->
    </settingsGameplay>

    <settingsInterface>
        <settingField id="5" key="sett_setting5"/> <!-- display player names -->
        <settingField id="8" key="sett_setting8"/> <!-- display resources -->
        <settingField id="9" key="sett_setting9"/> <!-- display bonus boxes -->
        <settingField id="12" key="sett_setting12"/> <!-- display increasing hit count -->
        <settingField id="18" key="sett_setting18"/> <!-- display drones -->
        <settingField id="20" key="sett_setting20"/> <!-- display cargo boxes -->
        <settingField id="21" key="sett_setting21"/> <!-- display cargo boxes which are not free -->
        <settingField id="13" key="setting_displayNotifications"/>  <!-- display notifications -->
        <settingField id="43" key="setting_allow_auto_quality" tooltipKey="ttip_setting_allow_auto_quality"/>
        <settingField id="44" key="setting_hover_ships" tooltipKey="ttip_setting_hover_ships"/>
        <settingField id="14" key="sett_setting14"/>  <!-- display chat -->
        <settingField id="30" key="setting_alwaysDraggableWindows"/> <!-- windows always draggable -->
        <settingField id="29" key="setting_displayWindowsBackground"/> <!-- display Window Background -->
        <settingField id="45" key="setting_display_premium_quickslot" tooltipKey="ttip_setting_premium_quickslot"/>
        <!-- 		<settingField id="33" key="setting_displayEngineSmoke"/> -->
        <settingField id="7" key="sett_setting7"/> <!-- Show transparent background -->
        <!--<settingField id="13" key="sett_setting13"/>--> <!-- Show message status -->
    </settingsInterface>

    <settingsDisplay>
        <settingField id="31" key="setting_preloadShips" tooltipKey="ttip_setting_preloadShips"/>
        <settingField id="33" type="slider" key="setting_quality_presetting">
            <item value="0" languageKey="quality_low"/>
            <item value="1" languageKey="quality_medium"/>
            <item value="2" languageKey="quality_good"/>
            <item value="3" languageKey="quality_high"/>
        </settingField>
        <settingField id="35" type="combobox" key="setting_quality_background" align="left" isAdvanced="true"
                      tooltipKey="ttip_setting_quality_background">
            <item value="3" languageKey="quality_high"/>
            <item value="2" languageKey="quality_good"/>
            <item value="1" languageKey="quality_medium"/>
            <item value="0" languageKey="quality_no"/>
        </settingField>
        <settingField id="36" type="combobox" key="setting_quality_poizone" align="right" isAdvanced="true"
                      tooltipKey="ttip_setting_quality_poizone">
            <item value="3" languageKey="quality_high"/>
            <item value="1" languageKey="quality_medium"/>
            <item value="0" languageKey="quality_low"/>
        </settingField>
        <settingField id="37" type="combobox" key="setting_quality_ship" align="left" isAdvanced="true"
                      tooltipKey="ttip_setting_quality_ship">
            <item value="3" languageKey="quality_high"/>
            <item value="0" languageKey="quality_low"/>
        </settingField>
        <settingField id="38" type="combobox" key="setting_quality_engine" align="right" isAdvanced="true"
                      tooltipKey="ttip_setting_quality_engine">
            <item value="3" languageKey="quality_high"/>
            <item value="2" languageKey="quality_good"/>
            <item value="1" languageKey="quality_medium"/>
            <item value="0" languageKey="quality_low"/>
        </settingField>
        <settingField id="42" type="combobox" key="setting_quality_explosion" align="left" isAdvanced="true"
                      tooltipKey="ttip_setting_quality_explosion">
            <item value="3" languageKey="quality_high"/>
            <item value="2" languageKey="quality_good"/>
            <item value="1" languageKey="quality_medium"/>
            <item value="0" languageKey="quality_no"/>
        </settingField>
        <settingField id="39" type="combobox" key="setting_quality_collectable" align="right" isAdvanced="true"
                      tooltipKey="ttip_setting_quality_collectable">
            <item value="3" languageKey="quality_high"/>
            <item value="0" languageKey="quality_low"/>
        </settingField>
    </settingsDisplay>

    <settingsSound>
        <settingField id="15" key="sett_setting15"/> <!-- Play music -->
        <settingField id="16" key="sett_setting16"/> <!-- Play sound effects -->
    </settingsSound>

    <settingsKeyBoard>
        <settingField id="100" type="header" align="center" key="setting_keyboard_key_title"/>
        <settingField id="100" type="header" align="left" key="setting_keyboard_action_title"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="0"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="1"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="2"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="3"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="4"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="5"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="6"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="7"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="8"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_slot" commandID="7" param="9"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="0"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="1"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="2"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="3"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="4"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="5"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="6"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="7"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="8"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_premium_slot" commandID="8" param="9"/>

        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_jump_gate" commandID="0"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_toggle_config" commandID="1"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_laser_attack" commandID="2"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_rocket_attack" commandID="3"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_activate_pet" commandID="4"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_guard_mode" commandID="5"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_combo_repair_mode" commandID="13"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_logout" commandID="6"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_toggle_windows" commandID="9"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_toggle_monitoring" commandID="10"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_zoom_in" commandID="11"/>
        <settingField id="44" type="keyboard_row" key="keyboard_action_zoom_out" commandID="12"/>
    </settingsKeyBoard>


    <!-- Trade Window ............................................................................................................................. -->

    <tradeWindow>
        <ores>
            <ore type="0" pricetag="pricetag_credits_compact" languageKey="sta_prometium"
                 pricetagTooltipKey="ttip_pricetag_credits_default"/>
            <ore type="1" pricetag="pricetag_credits_compact" languageKey="sta_endurium"
                 pricetagTooltipKey="ttip_pricetag_credits_default"/>
            <ore type="2" pricetag="pricetag_credits_compact" languageKey="sta_terbium"
                 pricetagTooltipKey="ttip_pricetag_credits_default"/>
            <ore type="4" pricetag="pricetag_credits_compact" languageKey="sta_prometid"
                 pricetagTooltipKey="ttip_pricetag_credits_default"/>
            <ore type="5" pricetag="pricetag_credits_compact" languageKey="sta_duranium"
                 pricetagTooltipKey="ttip_pricetag_credits_default"/>
            <ore type="6" pricetag="pricetag_credits_compact" languageKey="sta_promerium"
                 pricetagTooltipKey="ttip_pricetag_credits_default"/>
            <ore type="8" isRatio="true" pricetag="pricetag_extra-energy_palladium_compact"
                 gaintag="gaintag_extra-energy_compact" languageKey="sta_palladium"
                 pricetagTooltipKey="ttip_pricetag_extra-energy_palladium"
                 gaintagTooltipKey="ttip_gaintag_extra-energy_palladium"
                 notavailableTooltipKey="ttip_notavailable_extra-energy_palladium"/>
            <!--<ore type="99" currency="" languageKey="sta_undefined"/>-->
        </ores>
        <weblinks1>
            <link type="1" languageKey="sta_schiffe"
                  url="/indexInternal.es?action=internalDock&amp;tpl=internalDockShips"/>
            <link type="2" languageKey="sta_waffen"
                  url="/indexInternal.es?action=internalDock&amp;tpl=internalDockLaser"/>
            <link type="3" languageKey="sta_muni" url="/indexInternal.es?action=internalDock&amp;tpl=internalDockAmmo"/>
            <link type="4" languageKey="sta_genera"
                  url="/indexInternal.es?action=internalDock&amp;tpl=internalDockGenerator"/>
            <link type="5" languageKey="sta_extra"
                  url="/indexInternal.es?action=internalDock&amp;tpl=internalDockSpecials"/>
        </weblinks1>
        <weblinks2>
            <link type="1" languageKey="sta_credit" url="/indexInternal.es?action=internalPayment"/>
            <!-- removed with quests2client! -->
            <!-- 			<link type="2" languageKey="sta_quest" url="/indexInternal.es?action=internalQuestJobs"/> -->
            <link type="3" languageKey="sta_clan" url="/indexInternal.es?action=internalClan"/>
            <link type="4" languageKey="sta_fame" url="/indexInternal.es?action=internalHallofFame"/>
        </weblinks2>
    </tradeWindow>

    <refinementWindow>
        <refinement>
            <staticOres>
                <ore type="0" tooltipKey="prometium_info"/>
                <ore type="1" tooltipKey="endurium_info"/>
                <ore type="2" tooltipKey="terbium_info"/>
            </staticOres>
            <ores>
                <ore type="4" tooltipKey="ore_details,lab_effect_prometid" button="true"/>
                <ore type="5" tooltipKey="ore_details,lab_effect_duranium" button="true"/>
                <ore type="6" tooltipKey="ore_details,ore_details_addon,lab_effect_promerium" button="true"/>
                <ore type="3" tooltipKey="xenomit_info"/>
            </ores>
        </refinement>

        <update>
            <staticOres>
                <ore type="0" tooltipKey="prometium_info"/>
                <ore type="1" tooltipKey="endurium_info"/>
                <ore type="2" tooltipKey="terbium_info"/>
                <ore type="3"/>
                <ore type="8"/>
            </staticOres>
            <ores>
                <ore type="4" iconResKey="icon_11" tooltipKey="lab_effect_prometid"/>
                <ore type="5" iconResKey="icon_12" tooltipKey="lab_effect_duranium"/>
                <ore type="6" iconResKey="icon_13" tooltipKey="lab_effect_promerium"/>
                <ore type="7" iconResKey="icon_14" tooltipKey="lab_effect_seprom"/>
            </ores>
            <items>
                <item type="1" identifier="LASER" resKey="item_1" languageKey="lab_laser" ammountKey="lab_salvos"/>
                <item type="2" identifier="ROCKET" resKey="item_2" languageKey="lab_raketen" ammountKey="lab_pieces"/>
                <item type="3" identifier="DRIVING" resKey="item_3" languageKey="lab_antrieb" ammountKey="lab_minutes"/>
                <item type="4" identifier="SHIELD" resKey="item_4" languageKey="lab_schild" ammountKey="lab_minutes"/>
            </items>
        </update>


    </refinementWindow>
    <!-- Action Menu - currently 7 combs with submenu......................................................................................................... -->
    <!--ADDED 6 HERE-->
    <menu gap="3" actionSlots="10" menuSlots="8" maxVisiblePoolSlots="6" poolSlots="25">
        <menuButtons stdIcon="comb01_std.png" hoverIcon="comb01_hover.png" selectedIcon="comb01_selected.png">
            <menuButton id="0" resKey="laser.png" subAction="true" languageKey="ttip_menu_laser">
                <actionButtons stdIcon="comb02_std.png" hoverIcon="comb02_hover.png" selectedIcon="comb02_selected.png">
                    <!--					<actionButton id="0" resKey="laser.png" alwaysExist="true" languageKey="ttip_laser_activate" customizable="false"/>-->
                    <activateButton id="0" resKey="laser.png" languageKey="ttip_laser_activate" customizable="false"/>
                    <actionButton id="3" resKey="laserBat1.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true" ammobar="true"/>
                    <actionButton id="4" resKey="laserBat2.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true" ammobar="true"/>
                    <actionButton id="5" resKey="laserBat3.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true" ammobar="true"/>
                    <actionButton id="6" resKey="laserBat4.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true" ammobar="true"/>
                    <actionButton id="7" resKey="laserBat5.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true" ammobar="true"/>
                    <actionButton id="8" resKey="cboFootballBat.png" languageKey="ttip_laser" alwaysExist="false"
                                  counter="true" ammobar="true"/>
                    <actionButton id="39" resKey="laserBat6.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true" ammobar="true"/>
                    <actionButton id="108" resKey="laser_halloween.png" languageKey="ttip_laser" alwaysExist="false"
                                  counter="true" ammobar="true"/>
                </actionButtons>
            </menuButton>

            <menuButton id="1" resKey="rocket.png" subAction="true" languageKey="ttip_menu_rockets">
                <actionButtons stdIcon="comb02_std.png" hoverIcon="comb02_hover.png" selectedIcon="comb02_selected.png">
                    <activateButton id="1" resKey="rocket.png" languageKey="ttip_rocket_activate" customizable="false"/>
                    <section id="rocket">
                        <actionButton id="11" resKey="r310.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                        <actionButton id="12" resKey="plt2026.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                        <actionButton id="13" resKey="plt2021.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                        <actionButton id="57" resKey="plt3030.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                        <actionButton id="74" resKey="bdr1211.png" languageKey="ttip_rocket" alwaysExist="false"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                        <actionButton id="44" resKey="pld8.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                        <actionButton id="72" resKey="dcr30.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                        <actionButton id="43" resKey="wiz.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true" canStartAttack="true"/>
                    </section>
                    <section id="hellstorm">
                        <!--						activate 46 starts loading or fires-->
                        <!--						action button displays rocket launcher type and selected launcher rocket and loading status-->
                        <actionButton id="46" languageKey="ttip_rocketlauncher" alwaysExist="true"
                                      canStartAttack="true"/>
                        <!--						activate selects rocket type to be loaded in rocket launcher-->
                        <actionButton id="48" resKey="hstrm01.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true"/>
                        <actionButton id="49" resKey="ubr100.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true"/>
                        <actionButton id="50" resKey="eco10.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true"/>
                        <actionButton id="75" resKey="sar_01.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true"/>
                        <actionButton id="76" resKey="sar_02.png" languageKey="ttip_rocket" alwaysExist="true"
                                      counter="true" ammobar="true"/>
                        <actionButton id="102" resKey="cbr100.png" languageKey="ttip_rocket" alwaysExist="false"
                                      counter="true" ammobar="true"/>
                        <actionButton id="109" resKey="bdr1212.png" languageKey="ttip_rocket" alwaysExist="false"
                                      counter="true" ammobar="true"/>
                    </section>
                </actionButtons>
            </menuButton>

            <menuButton id="2" resKey="explosive.png" subAction="true" languageKey="ttip_menu_explosives">
                <actionButtons stdIcon="comb02_std.png" hoverIcon="comb02_hover.png" selectedIcon="comb02_selected.png">
                    <activateButton id="14" resKey="explosive.png" languageKey="ttip_explosive_activate"
                                    alwaysExist="true" customizable="false"/>
                    <actionButton id="15" resKey="acm1.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>
                    <actionButton id="68" resKey="emp_m01.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>
                    <actionButton id="69" resKey="sab_m01.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>
                    <actionButton id="70" resKey="dd_m01.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>

                    <actionButton id="103" resKey="sl_m01.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>

                    <actionButton id="16" resKey="smb01.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>
                    <actionButton id="17" resKey="ish.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>
                    <actionButton id="45" resKey="emp01.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" cooldown="true" ammobar="true"/>
                    <actionButton id="36" resKey="fireworks_small.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" ammobar="true"/>
                    <actionButton id="37" resKey="fireworks_medium.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" ammobar="true"/>
                    <actionButton id="38" resKey="fireworks_large.png" languageKey="ttip_explosive" counter="true"
                                  alwaysExist="true" ammobar="true"/>
                    <actionButton id="40"
                                  resKey="fwx_detonator.png,fwx_detonator_1.png,fwx_detonator_2.png,fwx_detonator_3.png,fwx_detonator_4.png,fwx_detonator_5.png"
                                  languageKey="ttip_firework_ignite" alwaysExist="true"/>
                </actionButtons>
            </menuButton>

            <menuButton id="3" resKey="cpu.png" subAction="false" languageKey="ttip_menu_cpus">
                <actionButtons stdIcon="comb02_std.png" hoverIcon="comb02_hover.png" selectedIcon="comb02_selected.png">
                    <actionButton id="41" resKey="droneRepair01.png,droneRepair02.png" languageKey="ttip_dronerepairCPU"
                                  alwaysExist="false" active="false"/>
                    <actionButton id="24" resKey="aim01.png,aim02.png" languageKey="ttip_aimCPU" counter="true"
                                  alwaysExist="false" active="false"/>
                    <actionButton id="22" resKey="arol01.png" languageKey="ttip_arolCPU" alwaysExist="false"
                                  active="false"/>
                    <actionButton id="21" resKey="cloak01.png" languageKey="ttip_cloakCPU" alwaysExist="false"
                                  counter="true" active="false"/>
                    <actionButton id="20" resKey="jump01.png,jump02.png" languageKey="ttip_jumpCPU" counter="true"
                                  alwaysExist="false" active="false"/>
                    <actionButton id="71" resKey="ajp01.png" languageKey="ttip_jumpCPU" alwaysExist="false"
                                  active="false"/>
                    <actionButton id="23"
                                  resKey="rob01.png,rob02.png,rob03.png,rob04.png,rob04.png,rob04.png,rob04.png,rob04.png,robstarter.png"
                                  languageKey="ttip_robotCPU" alwaysExist="false" active="false"/>
                    <actionButton id="35" resKey="hm7_01.png" languageKey="ttip_hm7CPU" alwaysExist="false"
                                  active="false"/>
                    <actionButton id="42"
                                  resKey="ammobuy01.png,ammobuy02.png,ammobuy03.png,ammobuy04.png,ammobuy05.png,ammobuy06.png"
                                  languageKey="ttip_ammobuy" alwaysExist="false" active="false"/>
                    <actionButton id="47" resKey="rllb1.png" languageKey="ttip_rllbCPU" alwaysExist="false"
                                  active="false"/>
                    <actionButton id="56" languageKey="ttip_rocketbuy" alwaysExist="false" active="false"/>
                    <actionButton id="18" resKey="petfuel.png" languageKey="ttip_fuelbuy" alwaysExist="false"
                                  active="false"/>
                </actionButtons>
            </menuButton>

            <menuButton id="4" resKey="fastbuy_icon.png" subAction="true" languageKey="ttip_menu_fastbuy">
                <actionButtons stdIcon="comb04_std.png" hoverIcon="comb04_hover.png" selectedIcon="comb04_selected.png">
                    <activateButton id="25" resKey="fastbuy_uridium.png,fastbuy_credits.png"
                                    languageKey="ttip_buy_activate" alwaysExist="true" counter="true"
                                    customizable="false"/>
                    <actionButton id="26" resKey="laserBat1.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="27" resKey="laserBat2.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="28" resKey="laserBat3.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="30" resKey="laserBat4.png" languageKey="ttip_laser" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="31" resKey="r310.png" languageKey="ttip_rocket" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="32" resKey="plt2026.png" languageKey="ttip_rocket" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="33" resKey="plt2021.png" languageKey="ttip_rocket" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="58" resKey="plt3030.png" languageKey="ttip_rocket" alwaysExist="true"
                                  counter="true"/>
                </actionButtons>
            </menuButton>

            <menuButton id="5" resKey="tech_icon.png" subAction="true" languageKey="title_techs">
                <actionButtons stdIcon="comb02_std.png" hoverIcon="comb02_hover.png" selectedIcon="comb02_selected.png">
                    <!--					<activateButton id="52" resKey="activate_tech_icon.png" languageKey="ttip_explosive_activate" alwaysExist="true" customizable="false"/>-->
                    <actionButton id="54" resKey="energy_leech_array.png" languageKey="tech_ENERGY_LEECH_ARRAY_name"
                                  alwaysExist="true" counter="true"/>
                    <actionButton id="51" resKey="energy_chain_impulse.png" languageKey="tech_ENERGY_CHAIN_IMPULSE_name"
                                  alwaysExist="true" counter="true"/>
                    <actionButton id="55" resKey="rocket_probability_maximizer.png"
                                  languageKey="tech_ROCKET_PROBABILITY_MAXIMIZER_name" alwaysExist="true"
                                  counter="true"/>
                    <actionButton id="53" resKey="shield_backup.png" languageKey="tech_SHIELD_BACKUP_name"
                                  alwaysExist="true" counter="true"/>
                    <actionButton id="59" resKey="battle_repair_bot.png" languageKey="tech_BATTLE_REPAIR_BOT_name"
                                  alwaysExist="true" counter="true"/>
                    <!--					<actionButton id="60" resKey="speed_leech.png" languageKey="SPEED_LEECH_name" alwaysExist="true" counter="true"/>-->
                </actionButtons>
            </menuButton>
            <menuButton id="6" resKey="ability.png" subAction="false" languageKey="ttip_menu_abilities">
                <actionButtons stdIcon="comb02_std.png" hoverIcon="comb02_hover.png" selectedIcon="comb02_selected.png">
                    <actionButton id="63" resKey="skill_ship_solace.png" languageKey="ttip_SOLACE_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="64" resKey="skill_ship_diminisher.png" languageKey="ttip_DIMINISHER_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="65" resKey="skill_ship_spectrum.png" languageKey="ttip_SPECTRUM_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="66" resKey="skill_ship_sentinel.png" languageKey="ttip_SENTINEL_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="67" resKey="skill_ship_venom.png" languageKey="ttip_VENOM_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="73" resKey="skill_ship_lightning.png" languageKey="ttip_LIGHTNING_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="90" resKey="repair_hp.png" languageKey="ttip_AEGIS_REPAIRHP_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="93" resKey="recharge_shield.png" languageKey="ttip_AEGIS_SHIELDRECHARGE_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="94" resKey="healing_pod.png" languageKey="ttip_AEGIS_HEALINGPOD_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="91" resKey="draw_fire.png" languageKey="ttip_CITADEL_DRAWFIRE_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="96" resKey="travelMode.png" languageKey="ttip_CITADEL_TRAVELMODE_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="97" resKey="protect.png" languageKey="ttip_CITADEL_PROTECTION_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="98" resKey="fortify.png" languageKey="ttip_CITADEL_FORTIFY_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="92" resKey="ultimate_cloaking.png"
                                  languageKey="ttip_SPEARHEAD_ULTIMATECLOAKING_skill" alwaysExist="false"
                                  counter="true"/>
                    <actionButton id="95" resKey="mark_target.png" languageKey="ttip_SPEARHEAD_MARKTARGET_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="99" resKey="ultimate_emp.png" languageKey="ttip_SPEARHEAD_JAMX_skill"
                                  alwaysExist="false" counter="true"/>
                    <actionButton id="100" resKey="double_minimap_reveal.png"
                                  languageKey="ttip_SPEARHEAD_DOUBLEMINIMAP_skill" alwaysExist="false" counter="true"/>
                </actionButtons>
            </menuButton>
            <menuButton id="7" resKey="drone_formation.png" subAction="false" languageKey="ttip_menu_droneFormations">
                <actionButtons stdIcon="comb02_std.png" hoverIcon="comb02_hover.png" selectedIcon="comb02_selected.png">
                    <actionButton id="77" resKey="drone_f00.png" languageKey="ttip_btn_droneFormation_STD"
                                  alwaysExist="false"/>
                    <actionButton id="78" resKey="drone_f01.png" languageKey="ttip_btn_droneFormation_TURTLE"
                                  alwaysExist="false"/>
                    <actionButton id="79" resKey="drone_f02.png" languageKey="ttip_btn_droneFormation_ARROW"
                                  alwaysExist="false"/>
                    <actionButton id="80" resKey="drone_f03.png" languageKey="ttip_btn_droneFormation_LANCE"
                                  alwaysExist="false"/>
                    <actionButton id="81" resKey="drone_f04.png" languageKey="ttip_btn_droneFormation_STAR"
                                  alwaysExist="false"/>
                    <actionButton id="82" resKey="drone_f05.png" languageKey="ttip_btn_droneFormation_PINCER"
                                  alwaysExist="false"/>
                    <actionButton id="83" resKey="drone_f06.png" languageKey="ttip_btn_droneFormation_DOUBLE_ARROW"
                                  alwaysExist="false"/>
                    <actionButton id="84" resKey="drone_f07.png" languageKey="ttip_btn_droneFormation_DIAMOND"
                                  alwaysExist="false"/>
                    <actionButton id="85" resKey="drone_f08.png" languageKey="ttip_btn_droneFormation_CHEVRON"
                                  alwaysExist="false"/>
                    <actionButton id="86" resKey="drone_f09.png" languageKey="ttip_btn_droneFormation_MOTH"
                                  alwaysExist="false"/>
                    <actionButton id="87" resKey="drone_f10.png" languageKey="ttip_btn_droneFormation_CRAB"
                                  alwaysExist="false"/>
                    <actionButton id="88" resKey="drone_f11.png" languageKey="ttip_btn_droneFormation_HEART"
                                  alwaysExist="false"/>
                    <actionButton id="89" resKey="drone_f12.png" languageKey="ttip_btn_droneFormation_BARRAGE"
                                  alwaysExist="false"/>
                    <actionButton id="106" resKey="drone_f13.png" languageKey="ttip_btn_droneFormation_BAT"
                                  alwaysExist="false"/>
                    <actionButton id="107" resKey="drone_f14.png" languageKey="ttip_btn_droneFormation_MOSQUITO"
                                  alwaysExist="false"/>
                </actionButtons>
            </menuButton>
        </menuButtons>
    </menu>

    <!-- Top Menu ............................................................................................................................. -->
    <topMenu>

        <staticButtonSlots>
            <staticButtonSlot id="7" iconXPos="-14" iconYPos="22"/>
            <staticButtonSlot id="11" iconXPos="2" iconYPos="51"/>
            <staticButtonSlot id="4" iconXPos="35" iconYPos="51"/>
            <staticButtonSlot id="6" iconXPos="68" iconYPos="51"/>
            <staticButtonSlot id="24" iconXPos="117" iconYPos="80"/>


        </staticButtonSlots>

        <buttons>
            <button id="2" resKey="gate.png" iconXPos="98" iconYPos="47" languageKey="ttip_jump"/>
            <button id="34" resKey="fastrepair.png" iconXPos="81" iconYPos="76" counter="true"
                    languageKey="ttip_fastrepair"/>
            <!-- 			fullscreen -->
            <button id="104" resKey="fullscreen.png" iconXPos="48" iconYPos="76" languageKey="ttip_fullscreen_btn"/>
            <button id="105" resKey="company_hierarchy_icon.png" iconXPos="15" iconYPos="76"
                    languageKey="ttip_company_hierarchy_btn"/>
            <button id="101" resKey="ship_warping_function_icon" iconXPos="16" iconYPos="18"
                    languageKey="ttip_shipWarp_btn"/>
            <!--<button id="35" resKey="dmz_icon.png" iconXPos="48" iconYPos="76" languageKey="peacearea"/>-->
        </buttons>

    </topMenu>


    <patterns>
        <resolutions>
            <!-- old client resolution -->
            <resolution id="0" width="1140" height="675" mainMenuXPos="349" mainMenuYPos="480" slotMenuXPos="312"
                        slotMenuYPos="451" premslotMenuXPos="365" premslotMenuYPos="421">
                <minimizedIconSlots x="25" y="200">
                    <minimizedIconSlot iconXPos="0" iconYPos="0"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="58"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="116"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="174"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="232"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="261"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="261"/>
                </minimizedIconSlots>
                <windows>
                    <window comment="WINDOW_CLASS_USER" id="0" xPos="275" yPos="5"/>
                    <window comment="WINDOW_CLASS_SHIP" id="1" xPos="500" yPos="5"/>
                    <window comment="WINDOW_CLASS_TARGET" id="2" xPos="9" yPos="286"/>
                    <window comment="WINDOW_CLASS_CONNECTION" id="8" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CONNECTION_LOST" id="12" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BETA" id="9" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_LOGOUT" id="7" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_QUEST_SYSTEM" id="10" xPos="5" yPos="288"/>
                    <window comment="WINDOW_CLASS_LOG" id="5" xPos="5" yPos="5"/>
                    <window comment="WINDOW_CLASS_MINIMAP" id="3" xPos="716" yPos="350"/>
                    <window comment="WINDOW_CLASS_SETTINGS" id="4" xPos="center" yPos="5"/>
                    <window comment="WINDOW_CLASS_HELP" id="11" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_TRADE" id="6" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEMAP" id="13" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HERO_DESTROYED" id="14" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BOOSTER" id="15" xPos="723" yPos="9"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="16" xPos="830" yPos="169"/>
                    <window comment="WINDOW_CLASS_INVASION" id="17" xPos="830" yPos="266"/>
                    <window comment="WINDOW_CLASS_CTB" id="18" xPos="562" yPos="477"/>
                    <window comment="WINDOW_CLASS_TDM" id="19" xPos="5" yPos="322"/>
                    <window comment="WINDOW_CLASS_INFILTRATION_GAME" id="42" xPos="3" yPos="248"/>
                    <window comment="WINDOW_CLASS_CHAT" id="20" xPos="5" yPos="402"/>
                    <window comment="WINDOW_CLASS_WARNING_PROMPT" id="21" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_COMMAND_LINE" id="22" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_GROUP_SYSTEM" id="23" xPos="500" yPos="9"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT" id="24" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_QUERY" id="25" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_COUNT" id="26" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_REFINE" id="27" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_RESET_PROMPT" id="28" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SESSION_END" id="29" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_REPAIR_SHIP" id="30" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_AUTOSTART_WARNING" id="31" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_ACHIEVEMENT" id="32" xPos="564" yPos="200"/>
                    <window comment="WINDOW_CLASS_TECHS" id="33" xPos="100" yPos="0"/>
                    <window comment="WINDOW_CLASS_JACKPOTBATTLE" id="34" xPos="200" yPos="50"/>
                    <window comment="WINDOW_CLASS_NETWORK_MONITOR" id="35" xPos="100" yPos="50"/>
                    <window comment="WINDOW_CLASS_PET" id="36" xPos="100" yPos="400"/>
                    <window comment="WINDOW_CLASS_RANKED_HUNT_EVENT" id="37" xPos="550" yPos="250"/>
                    <window comment="WINDOW_CLASS_HIGH_SCORE_GATE" id="38" xPos="550" yPos="250"/>
                    <window comment="WINDOW_CLASS_CAPTCHA" id="39" xPos="500" yPos="0"/>
                    <window comment="WINDOW_CLASS_SCORE_FEST" id="40" xPos="280" yPos="0"/>
                    <window comment="WINDOW_CLASS_POPUP" id="41" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CLAN_VISIBILITY" id="43" xPos="265" yPos="3"/>
                    <window comment="WINDOW_CLASS_WORD_PUZZLE" id="44" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_COUNTDOWN_STATUS" id="45" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_JACKPOT_STATUS_UI" id="48" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="47" xPos="628" yPos="193"/>
                </windows>
            </resolution>

            <!-- mid client resolution 16:9 -->
            <resolution id="1" width="1140" height="675" mainMenuXPos="349" mainMenuYPos="480" slotMenuXPos="312"
                        slotMenuYPos="451" premslotMenuXPos="365" premslotMenuYPos="421">
                <minimizedIconSlots x="25" y="200">
                    <minimizedIconSlot iconXPos="0" iconYPos="0"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="58"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="116"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="174"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="232"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="261"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="261"/>
                </minimizedIconSlots>
                <windows>
                    <window comment="WINDOW_CLASS_USER" id="0" xPos="275" yPos="5"/>
                    <window comment="WINDOW_CLASS_SHIP" id="1" xPos="500" yPos="5"/>
                    <window comment="WINDOW_CLASS_TARGET" id="2" xPos="9" yPos="286"/>
                    <window comment="WINDOW_CLASS_CONNECTION" id="8" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CONNECTION_LOST" id="12" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BETA" id="9" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_LOGOUT" id="7" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_QUEST_SYSTEM" id="10" xPos="5" yPos="288"/>
                    <window comment="WINDOW_CLASS_LOG" id="5" xPos="5" yPos="5"/>
                    <window comment="WINDOW_CLASS_MINIMAP" id="3" xPos="716" yPos="350"/>
                    <window comment="WINDOW_CLASS_SETTINGS" id="4" xPos="center" yPos="5"/>
                    <window comment="WINDOW_CLASS_HELP" id="11" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_TRADE" id="6" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEMAP" id="13" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HERO_DESTROYED" id="14" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BOOSTER" id="15" xPos="723" yPos="9"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="16" xPos="830" yPos="169"/>
                    <window comment="WINDOW_CLASS_INVASION" id="17" xPos="830" yPos="266"/>
                    <window comment="WINDOW_CLASS_CTB" id="18" xPos="562" yPos="477"/>
                    <window comment="WINDOW_CLASS_TDM" id="19" xPos="5" yPos="322"/>
                    <window comment="WINDOW_CLASS_INFILTRATION_GAME" id="42" xPos="3" yPos="248"/>
                    <window comment="WINDOW_CLASS_CHAT" id="20" xPos="5" yPos="402"/>
                    <window comment="WINDOW_CLASS_WARNING_PROMPT" id="21" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_COMMAND_LINE" id="22" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_GROUP_SYSTEM" id="23" xPos="500" yPos="9"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT" id="24" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_QUERY" id="25" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_COUNT" id="26" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_REFINE" id="27" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_RESET_PROMPT" id="28" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SESSION_END" id="29" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_REPAIR_SHIP" id="30" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_AUTOSTART_WARNING" id="31" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_ACHIEVEMENT" id="32" xPos="564" yPos="200"/>
                    <window comment="WINDOW_CLASS_TECHS" id="33" xPos="100" yPos="0"/>
                    <window comment="WINDOW_CLASS_JACKPOTBATTLE" id="34" xPos="200" yPos="50"/>
                    <window comment="WINDOW_CLASS_NETWORK_MONITOR" id="35" xPos="100" yPos="50"/>
                    <window comment="WINDOW_CLASS_PET" id="36" xPos="100" yPos="400"/>
                    <window comment="WINDOW_CLASS_RANKED_HUNT_EVENT" id="37" xPos="550" yPos="250"/>
                    <window comment="WINDOW_CLASS_HIGH_SCORE_GATE" id="38" xPos="550" yPos="250"/>
                    <window comment="WINDOW_CLASS_CAPTCHA" id="39" xPos="500" yPos="0"/>
                    <window comment="WINDOW_CLASS_SCORE_FEST" id="40" xPos="280" yPos="0"/>
                    <window comment="WINDOW_CLASS_POPUP" id="41" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CLAN_VISIBILITY" id="43" xPos="265" yPos="3"/>
                    <window comment="WINDOW_CLASS_WORD_PUZZLE" id="44" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_COUNTDOWN_STATUS" id="45" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_JACKPOT_STATUS_UI" id="48" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="47" xPos="628" yPos="193"/>
                </windows>
            </resolution>

            <!-- mid client resolution 4:3 -->
            <resolution id="2" width="1140" height="675" mainMenuXPos="394" mainMenuYPos="622" slotMenuXPos="358"
                        slotMenuYPos="592" premslotMenuXPos="374" premslotMenuYPos="562">
                <minimizedIconSlots x="25" y="200">
                    <minimizedIconSlot iconXPos="0" iconYPos="0"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="58"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="116"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="174"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="232"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="261"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="261"/>
                </minimizedIconSlots>
                <windows>
                    <window comment="WINDOW_CLASS_USER" id="0" xPos="273" yPos="5"/>
                    <window comment="WINDOW_CLASS_SHIP" id="1" xPos="497" yPos="5"/>
                    <window comment="WINDOW_CLASS_TARGET" id="2" xPos="9" yPos="430"/>
                    <window comment="WINDOW_CLASS_CONNECTION" id="8" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CONNECTION_LOST" id="12" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BETA" id="9" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_LOGOUT" id="7" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_QUEST_SYSTEM" id="10" xPos="8" yPos="280"/>
                    <window comment="WINDOW_CLASS_LOG" id="5" xPos="8" yPos="5"/>
                    <window comment="WINDOW_CLASS_MINIMAP" id="3" xPos="715" yPos="496"/>
                    <window comment="WINDOW_CLASS_SETTINGS" id="4" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HELP" id="11" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_TRADE" id="6" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEMAP" id="13" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HERO_DESTROYED" id="14" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BOOSTER" id="15" xPos="724" yPos="5"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="16" xPos="828" yPos="313"/>
                    <window comment="WINDOW_CLASS_INVASION" id="17" xPos="828" yPos="412"/>
                    <window comment="WINDOW_CLASS_CTB" id="18" xPos="828" yPos="215"/>
                    <window comment="WINDOW_CLASS_TDM" id="19" xPos="810" yPos="136"/>
                    <window comment="WINDOW_CLASS_INFILTRATION_GAME" id="42" xPos="3" yPos="248"/>
                    <window comment="WINDOW_CLASS_CHAT" id="20" xPos="8" yPos="546"/>
                    <window comment="WINDOW_CLASS_WARNING_PROMPT" id="21" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_COMMAND_LINE" id="22" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_GROUP_SYSTEM" id="23" xPos="804" yPos="138"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT" id="24" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_QUERY" id="25" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_COUNT" id="26" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_REFINE" id="27" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_RESET_PROMPT" id="28" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SESSION_END" id="29" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_REPAIR_SHIP" id="30" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_AUTOSTART_WARNING" id="31" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_ACHIEVEMENT" id="32" xPos="564" yPos="250"/>
                    <window comment="WINDOW_CLASS_TECHS" id="33" xPos="100" yPos="0"/>
                    <window comment="WINDOW_CLASS_JACKPOTBATTLE" id="34" xPos="200" yPos="50"/>
                    <window comment="WINDOW_CLASS_NETWORK_MONITOR" id="35" xPos="100" yPos="50"/>
                    <window comment="WINDOW_CLASS_PET" id="36" xPos="100" yPos="400"/>
                    <window comment="WINDOW_CLASS_RANKED_HUNT_EVENT" id="37" xPos="500" yPos="280"/>
                    <window comment="WINDOW_CLASS_HIGH_SCORE_GATE" id="38" xPos="500" yPos="280"/>
                    <window comment="WINDOW_CLASS_CAPTCHA" id="39" xPos="500" yPos="0"/>
                    <window comment="WINDOW_CLASS_SCORE_FEST" id="40" xPos="280" yPos="0"/>
                    <window comment="WINDOW_CLASS_POPUP" id="41" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CLAN_VISIBILITY" id="43" xPos="265" yPos="3"/>
                    <window comment="WINDOW_CLASS_WORD_PUZZLE" id="44" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_COUNTDOWN_STATUS" id="45" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_JACKPOT_STATUS_UI" id="48" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="47" xPos="628" yPos="193"/>
                </windows>
            </resolution>

            <!-- high client resolution 16:9 -->
            <resolution id="3" width="1140" height="675" mainMenuXPos="514" mainMenuYPos="623" slotMenuXPos="478"
                        slotMenuYPos="593" premslotMenuXPos="494" premslotMenuYPos="563">
                <minimizedIconSlots x="25" y="200">
                    <minimizedIconSlot iconXPos="0" iconYPos="0"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="58"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="116"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="174"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="232"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="261"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="261"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="290"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="319"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="319"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="348"/>
                </minimizedIconSlots>
                <windows>
                    <window comment="WINDOW_CLASS_USER" id="0" xPos="376" yPos="6"/>
                    <window comment="WINDOW_CLASS_SHIP" id="1" xPos="601" yPos="6"/>
                    <window comment="WINDOW_CLASS_TARGET" id="2" xPos="268" yPos="5"/>
                    <window comment="WINDOW_CLASS_CONNECTION" id="8" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CONNECTION_LOST" id="12" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BETA" id="9" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_LOGOUT" id="7" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_QUEST_SYSTEM" id="10" xPos="4" yPos="330"/>
                    <window comment="WINDOW_CLASS_LOG" id="5" xPos="10" yPos="10"/>
                    <window comment="WINDOW_CLASS_MINIMAP" id="3" xPos="973" yPos="493"/>
                    <window comment="WINDOW_CLASS_SETTINGS" id="4" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HELP" id="11" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_TRADE" id="6" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEMAP" id="13" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HERO_DESTROYED" id="14" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BOOSTER" id="15" xPos="958" yPos="6"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="16" xPos="1084" yPos="311"/>
                    <window comment="WINDOW_CLASS_INVASION" id="17" xPos="1084" yPos="413"/>
                    <window comment="WINDOW_CLASS_CTB" id="18" xPos="1084" yPos="209"/>
                    <window comment="WINDOW_CLASS_TDM" id="19" xPos="1070" yPos="129"/>
                    <window comment="WINDOW_CLASS_INFILTRATION_GAME" id="42" xPos="3" yPos="248"/>
                    <window comment="WINDOW_CLASS_CHAT" id="20" xPos="7" yPos="544"/>
                    <window comment="WINDOW_CLASS_WARNING_PROMPT" id="21" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_COMMAND_LINE" id="22" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_GROUP_SYSTEM" id="23" xPos="1060" yPos="131"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT" id="24" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_QUERY" id="25" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_COUNT" id="26" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_REFINE" id="27" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_RESET_PROMPT" id="28" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SESSION_END" id="29" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_REPAIR_SHIP" id="30" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_AUTOSTART_WARNING" id="31" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_ACHIEVEMENT" id="32" xPos="840" yPos="250"/>
                    <window comment="WINDOW_CLASS_TECHS" id="33" xPos="100" yPos="0"/>
                    <window comment="WINDOW_CLASS_JACKPOTBATTLE" id="34" xPos="200" yPos="50"/>
                    <window comment="WINDOW_CLASS_NETWORK_MONITOR" id="35" xPos="100" yPos="50"/>
                    <window comment="WINDOW_CLASS_PET" id="36" xPos="100" yPos="400"/>
                    <window comment="WINDOW_CLASS_RANKED_HUNT_EVENT" id="37" xPos="640" yPos="250"/>
                    <window comment="WINDOW_CLASS_HIGH_SCORE_GATE" id="38" xPos="640" yPos="250"/>
                    <window comment="WINDOW_CLASS_CAPTCHA" id="39" xPos="760" yPos="0"/>
                    <window comment="WINDOW_CLASS_SCORE_FEST" id="40" xPos="280" yPos="0"/>
                    <window comment="WINDOW_CLASS_POPUP" id="41" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CLAN_VISIBILITY" id="43" xPos="265" yPos="3"/>
                    <window comment="WINDOW_CLASS_WORD_PUZZLE" id="44" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_COUNTDOWN_STATUS" id="45" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="47" xPos="628" yPos="193"/>
                    <window comment="WINDOW_CLASS_JACKPOT_STATUS_UI" id="48" xPos="center" yPos="center"/>
                </windows>
            </resolution>

            <!-- high client resolution 4:3 -->

            <resolution id="4" width="1140" height="675" mainMenuXPos="536" mainMenuYPos="801" slotMenuXPos="499"
                        slotMenuYPos="772" premslotMenuXPos="515" premslotMenuYPos="742">
                <minimizedIconSlots x="25" y="200">
                    <minimizedIconSlot iconXPos="0" iconYPos="0"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="58"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="116"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="174"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="232"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="261"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="261"/>
                </minimizedIconSlots>

                <windows>
                    <window comment="WINDOW_CLASS_USER" id="0" xPos="444" yPos="5"/>
                    <window comment="WINDOW_CLASS_SHIP" id="1" xPos="674" yPos="5"/>
                    <window comment="WINDOW_CLASS_TARGET" id="2" xPos="268" yPos="5"/>
                    <window comment="WINDOW_CLASS_CONNECTION" id="8" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CONNECTION_LOST" id="12" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BETA" id="9" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_LOGOUT" id="7" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_QUEST_SYSTEM" id="10" xPos="2" yPos="420"/>
                    <window comment="WINDOW_CLASS_LOG" id="5" xPos="10" yPos="10"/>
                    <window comment="WINDOW_CLASS_MINIMAP" id="3" xPos="972" yPos="674"/>
                    <window comment="WINDOW_CLASS_SETTINGS" id="4" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HELP" id="11" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_TRADE" id="6" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEMAP" id="13" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HERO_DESTROYED" id="14" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BOOSTER" id="15" xPos="1142" yPos="122"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="16" xPos="1084" yPos="486"/>
                    <window comment="WINDOW_CLASS_INVASION" id="17" xPos="1084" yPos="588"/>
                    <window comment="WINDOW_CLASS_CTB" id="18" xPos="1084" yPos="387"/>
                    <window comment="WINDOW_CLASS_TDM" id="19" xPos="1064" yPos="307"/>
                    <window comment="WINDOW_CLASS_INFILTRATION_GAME" id="42" xPos="3" yPos="248"/>
                    <window comment="WINDOW_CLASS_CHAT" id="20" xPos="2" yPos="723"/>
                    <window comment="WINDOW_CLASS_WARNING_PROMPT" id="21" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_COMMAND_LINE" id="22" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_GROUP_SYSTEM" id="23" xPos="1059" yPos="200"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT" id="24" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_QUERY" id="25" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_COUNT" id="26" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_REFINE" id="27" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_RESET_PROMPT" id="28" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SESSION_END" id="29" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_REPAIR_SHIP" id="30" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_AUTOSTART_WARNING" id="31" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_ACHIEVEMENT" id="32" xPos="840" yPos="300"/>
                    <window comment="WINDOW_CLASS_TECHS" id="33" xPos="100" yPos="0"/>
                    <window comment="WINDOW_CLASS_JACKPOTBATTLE" id="34" xPos="200" yPos="50"/>
                    <window comment="WINDOW_CLASS_NETWORK_MONITOR" id="35" xPos="100" yPos="50"/>
                    <window comment="WINDOW_CLASS_PET" id="36" xPos="100" yPos="400"/>
                    <window comment="WINDOW_CLASS_RANKED_HUNT_EVENT" id="37" xPos="1100" yPos="450"/>
                    <window comment="WINDOW_CLASS_HIGH_SCORE_GATE" id="38" xPos="1100" yPos="450"/>
                    <window comment="WINDOW_CLASS_CAPTCHA" id="39" xPos="760" yPos="0"/>
                    <window comment="WINDOW_CLASS_SCORE_FEST" id="40" xPos="280" yPos="0"/>
                    <window comment="WINDOW_CLASS_POPUP" id="41" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CLAN_VISIBILITY" id="43" xPos="265" yPos="3"/>
                    <window comment="WINDOW_CLASS_WORD_PUZZLE" id="44" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_COUNTDOWN_STATUS" id="45" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="47" xPos="628" yPos="193"/>
                    <window comment="WINDOW_CLASS_JACKPOT_STATUS_UI" id="48" xPos="center" yPos="center"/>
                </windows>
            </resolution>

            <!-- resolution for open social network -->
            <resolution id="5" width="1140" height="675" mainMenuXPos="294" mainMenuYPos="503" slotMenuXPos="257"
                        slotMenuYPos="474" premslotMenuXPos="273" premslotMenuYPos="444" userSetting="false">
                <minimizedIconSlots x="25" y="200">
                    <minimizedIconSlot iconXPos="0" iconYPos="0"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="29"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="58"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="87"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="116"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="145"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="174"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="203"/>
                    <minimizedIconSlot iconXPos="0" iconYPos="232"/>
                    <minimizedIconSlot iconXPos="-17" iconYPos="261"/>
                    <minimizedIconSlot iconXPos="17" iconYPos="261"/>
                </minimizedIconSlots>
                <windows>
                    <window comment="WINDOW_CLASS_USER" id="0" xPos="270" yPos="3"/>
                    <window comment="WINDOW_CLASS_SHIP" id="1" xPos="424" yPos="3"/>
                    <window comment="WINDOW_CLASS_TARGET" id="2" xPos="4" yPos="340"/>
                    <window comment="WINDOW_CLASS_CONNECTION" id="8" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CONNECTION_LOST" id="12" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BETA" id="9" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_LOGOUT" id="7" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_QUEST_SYSTEM" id="10" xPos="5" yPos="176"/>
                    <window comment="WINDOW_CLASS_LOG" id="5" xPos="5" yPos="2"/>
                    <window comment="WINDOW_CLASS_MINIMAP" id="3" xPos="441" yPos="374"/>
                    <window comment="WINDOW_CLASS_SETTINGS" id="4" xPos="center" yPos="5"/>
                    <window comment="WINDOW_CLASS_HELP" id="11" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_TRADE" id="6" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SPACEMAP" id="13" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_HERO_DESTROYED" id="14" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_BOOSTER" id="15" xPos="427" yPos="407"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="16" xPos="558" yPos="193"/>
                    <window comment="WINDOW_CLASS_INVASION" id="17" xPos="558" yPos="290"/>
                    <window comment="WINDOW_CLASS_CTB" id="18" xPos="5" yPos="327"/>
                    <window comment="WINDOW_CLASS_TDM" id="19" xPos="3" yPos="248"/>
                    <window comment="WINDOW_CLASS_INFILTRATION_GAME" id="42" xPos="3" yPos="248"/>
                    <window comment="WINDOW_CLASS_CHAT" id="20" xPos="5" yPos="426"/>
                    <window comment="WINDOW_CLASS_WARNING_PROMPT" id="21" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_COMMAND_LINE" id="22" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_GROUP_SYSTEM" id="23" xPos="529" yPos="115"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT" id="24" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_QUERY" id="25" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_COUNT" id="26" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_WARNING_REFINEMENT_REFINE" id="27" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_RESET_PROMPT" id="28" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_SESSION_END" id="29" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_REPAIR_SHIP" id="30" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_AUTOSTART_WARNING" id="31" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_ACHIEVEMENT" id="32" xPos="290" yPos="200"/>
                    <window comment="WINDOW_CLASS_TECHS" id="33" xPos="100" yPos="0"/>
                    <window comment="WINDOW_CLASS_JACKPOTBATTLE" id="34" xPos="200" yPos="50"/>
                    <window comment="WINDOW_CLASS_NETWORK_MONITOR" id="35" xPos="100" yPos="50"/>
                    <window comment="WINDOW_CLASS_PET" id="36" xPos="100" yPos="400"/>
                    <window comment="WINDOW_CLASS_RANKED_HUNT_EVENT" id="37" xPos="310" yPos="250"/>
                    <window comment="WINDOW_CLASS_HIGH_SCORE_GATE" id="38" xPos="310" yPos="250"/>
                    <window comment="WINDOW_CLASS_CAPTCHA" id="39" xPos="220" yPos="0"/>
                    <window comment="WINDOW_CLASS_SCORE_FEST" id="40" xPos="280" yPos="0"/>
                    <window comment="WINDOW_CLASS_POPUP" id="41" xPos="center" yPos="center"/>
                    <window comment="WINDOW_CLASS_CLAN_VISIBILITY" id="43" xPos="265" yPos="3"/>
                    <window comment="WINDOW_CLASS_WORD_PUZZLE" id="44" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_COUNTDOWN_STATUS" id="45" xPos="165" yPos="20"/>
                    <window comment="WINDOW_CLASS_SPACEBALL" id="47" xPos="628" yPos="193"/>
                    <window comment="WINDOW_CLASS_JACKPOT_STATUS_UI" id="48" xPos="center" yPos="center"/>
                </windows>
            </resolution>
        </resolutions>

        <!-- preloaded Resources ............................................................................................................................. -->


        <preloadedResources>
            <!-- 			REMOVE THIS -->
            <!-- 			<resource resKey="placeholders"/> -->

            <resource resKey="aprilsFools"/>
            <!--		Asteroid not to be preloaded later-->
            <resource resKey="beam0"/>
            <resource resKey="beam1"/>
            <resource resKey="ui"/>
            <resource resKey="hints"/>
            <resource resKey="laser0"/>
            <resource resKey="laser1"/>
            <resource resKey="laser2"/>
            <resource resKey="laser3"/>
            <resource resKey="laser4"/>
            <resource resKey="laser5"/>
            <resource resKey="laser6"/>
            <resource resKey="laser_halloween"/>
            <resource resKey="sab_shot"/>
            <resource resKey="skillLaser0"/>
            <resource resKey="skillLaser1"/>
            <resource resKey="skillLaser2"/>
            <resource resKey="skillLaser3"/>
            <resource resKey="skillLaser4"/>
            <resource resKey="skillLaser5"/>
            <resource resKey="skillLaser6"/>
            <resource resKey="footballLaser"/>
            <resource resKey="footballAbsorber"/>

            <resource resKey="crystal_blue"/>
            <resource resKey="crystal_white"/>
            <resource resKey="crystal_red"/>

            <resource resKey="rocket1"/>
            <resource resKey="rocket2"/>
            <resource resKey="rocket3"/>
            <resource resKey="rocket4"/>
            <resource resKey="rocket5"/>
            <resource resKey="rocket6"/>
            <resource resKey="rocket7"/>
            <resource resKey="rocket8"/>
            <resource resKey="rocket9"/>
            <resource resKey="rocket10"/>
            <resource resKey="rocket11"/>
            <resource resKey="rocket12"/>
            <resource resKey="rocket13"/>
            <resource resKey="rocket14"/>
            <resource resKey="rocket15"/>
            <resource resKey="rocket16"/>

            <resource resKey="malusCloud0"/>

            <resource resKey="explosion0"/>
            <resource resKey="explosion1"/>
            <resource resKey="explosion2"/>
            <resource resKey="explosion3"/>
            <resource resKey="explosion4"/>
            <resource resKey="explosion5"/>
            <resource resKey="explosion6"/>
            <resource resKey="explosion7"/>
            <resource resKey="explosion8"/>
            <resource resKey="explosion9"/>

            <resource resKey="spawn0"/>

            <resource resKey="portalAnimation0"/>
            <resource resKey="drones"/>
            <resource resKey="droneGroup"/>
            <resource resKey="icons"/>
            <resource resKey="protegitShot"/>
            <resource resKey="laserDamage0"/>
            <resource resKey="laserDamage1"/>
            <resource resKey="laserDamage2"/>
            <resource resKey="rocketDamage0"/>
            <resource resKey="rocketDamage1"/>
            <resource resKey="rocketDamage2"/>
            <resource resKey="devolariumShot"/>
            <resource resKey="sibelonShot"/>
            <resource resKey="lordakiumShot"/>
            <resource resKey="lordakiumShotSolarClash"/>

            <resource resKey="engine0"/>
            <resource resKey="engine1"/>
            <resource resKey="smartbomb1"/>
            <resource resKey="repairRobot0"/>
            <resource resKey="repairRobot1"/>
            <resource resKey="battleRepairRobot1"/>
            <resource resKey="combatSounds"/>
            <resource resKey="ambience"/>
            <resource resKey="damageSounds"/>
            <resource resKey="introSounds"/>
            <resource resKey="voiceSounds"/>
            <resource resKey="portalSounds"/>
            <resource resKey="uiSounds"/>
            <resource resKey="questSounds"/>
            <resource resKey="miscSounds"/>
            <resource resKey="tdmSounds"/>
            <resource resKey="petSounds"/>
            <resource resKey="pirateSounds"/>
            <resource resKey="shipSounds"/>
            <resource resKey="abilitySounds"/>
            <resource resKey="sectorControlSounds"/>
            <resource resKey="window1"/>
            <resource resKey="battleStationsUI"/>
            <resource resKey="clanHierarchyWin"/>
            <resource resKey="questWin"/>

            <resource resKey="downGradedWindow"/>

            <resource resKey="laserFlash0"/>

            <resource resKey="engineSmoke0"/>
            <resource resKey="rocketSmoke0"/>
            <resource resKey="rocketSmoke1"/>
            <resource resKey="rocketSmoke2"/>

            <resource resKey="lensflare0"/>
            <resource resKey="lensflare1"/>
            <resource resKey="lensflare2"/>
            <resource resKey="lensflare3"/>
            <resource resKey="lensflare5"/>

            <resource resKey="nettel"/>
            <resource resKey="instaShield"/>
            <resource resKey="simpleRotatingShip"/>
            <resource resKey="simpleStaticShip"/>
            <resource resKey="simpleGate"/>
            <resource resKey="actionMenu"/>
            <resource resKey="minimap"/>
            <resource resKey="questSystem"/>
            <resource resKey="spacemap"/>

            <resource resKey="beacon_1_2"/>
            <resource resKey="beacon_1_3"/>
            <resource resKey="beacon_2_1"/>
            <resource resKey="beacon_2_3"/>
            <resource resKey="beacon_3_1"/>
            <resource resKey="beacon_3_2"/>

            <resource resKey="box0" precache="false"/>
            <resource resKey="box1" precache="false"/>
            <resource resKey="box2" precache="false"/>
            <resource resKey="oreBlue" precache="false"/>
            <resource resKey="oreRed" precache="false"/>
            <resource resKey="oreYellow" precache="false"/>
            <resource resKey="ore_palladium" precache="false"/>
            <resource resKey="pirateBootyBox" precache="false"/>
            <resource resKey="pirateBootyGoldBox" precache="false"/>
            <resource resKey="pirateBootyRedBox" precache="false"/>
            <resource resKey="pirateBootyBlueBox" precache="false"/>

            <resource resKey="firework_small_red"/>
            <resource resKey="firework_small_green"/>
            <resource resKey="firework_small_blue"/>
            <resource resKey="firework_small_short_term_event"/>

            <resource resKey="firework_medium_red"/>
            <resource resKey="firework_medium_green"/>
            <resource resKey="firework_medium_blue"/>
            <resource resKey="firework_medium_short_term_event"/>

            <resource resKey="firework_large_red"/>
            <resource resKey="firework_large_green"/>
            <resource resKey="firework_large_blue"/>
            <resource resKey="firework_large_short_term_event"/>

            <resource resKey="refinement"/>

            <resource resKey="shockwaves"/>
            <resource resKey="shieldDamage"/>
            <resource resKey="shield0"/>
            <resource resKey="shield1"/>
            <resource resKey="minePulse"/>
            <resource resKey="lensFlash"/>
            <resource resKey="achievement"/>
            <!--  resource resKey="techs"/ -->
            <!-- Energy Leech or ELA put here, possibly needs moving. -->
            <resource resKey="ela0"/>
            <resource resKey="elaCloud1"/>
            <resource resKey="replacementShips"/>
            <resource resKey="replacementCollectables"/>

            <resource resKey="slow-effect"/>
            <!--   resource resKey="skull"/ -->

            <resource resKey="mask91-1"/>
            <resource resKey="mask91-2"/>
            <resource resKey="mask91-3"/>
            <resource resKey="mask92-0"/>
            <resource resKey="mask92-1"/>
            <resource resKey="mask92-2"/>
            <resource resKey="mask92-3"/>
            <resource resKey="mask93-1"/>
            <resource resKey="mask93-2"/>
            <resource resKey="mask93-3"/>
            <resource resKey="mask101_clouds-lightblue"/>
            <resource resKey="mask255_stars"/>
            <resource resKey="mask255_clouds-lightblue"/>
            <resource resKey="mask255_clouds-grey"/>
            <resource resKey="mask255_asteroids"/>
            <resource resKey="mask5_clouds-blue"/>
            <resource resKey="mask1_asteroids-small-darkred"/>
            <resource resKey="mask1_clouds-grey"/>
            <resource resKey="mask9_clouds-darkred"/>
            <resource resKey="mask9_clouds-green-yellow"/>

            <resource resKey="poizone_patterns"/>
            <resource resKey="simple_patterns"/>

            <!-- antec event -->
            <resource resKey="laser_hitec_minion"/>
            <resource resKey="laser_hitec_mothership"/>

            <!-- shipWrecks -->
            <resource resKey="shipWrecks"/>

            <!-- pods are that small that you can easily preload them -->
            <resource resKey="pods"/>

            <resource resKey="warpAnimation"/>
            <resource resKey="nyx"/>
            <resource resKey="nyx_mobile"/>
            <!-- 			<resource resKey="battleStation" /> -->
            <!-- 			<resource resKey="battleModules" /> -->
        </preloadedResources>

        <!-- Ships .............................................................................................................................

			 -= Needed Values: =-
			 type - this is the typeID from the server
			 resKey - the ResourceID for rhe resources.php

			 -= Optional Values: =-
			 <loopPlay> default is false. If true, the animation will play in loop. Otherwise the currentFrame of the Ship is set by the direction of the ship.
			 <laserClassID> default is 0. look to the <lasers> section. -1 is for nor visible lasers.
			 <rocketClassID> default is 0. look to the <rockets> section. -1 is for nor visible rockets.
			 <expansionClassID> default is -1, which means that this ship has no expansion. This affects also the emission point of the laser, which is at the center of the ship. Otherwise, set a typeID to the <expansions> section
			 <labelVisible> default is true.
			 <labelYOffset> default is 0. If 0, the label will be positioned automatically at the bottom of the ship. The Offset starts from the center of the ship.
			 <energyVisible> default is true.
			 <energyYOffset> default is 0. If 0, the label will be positioned automatically at the top of the ship. The Offset starts from the center of the ship.
			 <selectionYOffset> default is 0. If 0, the selection will be positioned automatically. The Offset starts from the center of the ship in vertical direction.
			 <explodeTypeID> default is 0. look to the <pyroEffects> section
			 <laserDamageTypeID> default is 0. look to the <pyroEffects> section
			 <rocketDamageTypeID> default is 0. look to the <pyroEffects> section
			 <engineTypeID> default is 0. look at the <engines> section
			 <engineSmokeID> default is 0. look at the <engines> section
			 <enginePositionClassID> default is -1, which means that this ship has no engine. Otherwise, set a classID to the <enginePositions> section
			 <moveRadius> default is 100. This is the radius in Pixels, beginning from the center of the ship, where the Ship ignores a move command.
			 <preload> default is false. Preloads the Ship
			 <precache> default is false. Precaches the Ship
			 <unload> default is true. Unloads the Ship after Mapjump
			 <podType> default is POD_TYPE_NONE == 0. Defined which type of pod is dropped by this ship. Other types are 1 (HEAL) and ?.
			 <clickRadius>
			 <clickOffsetX>
			 <clickOffsetY>
			  
			  minimapIcon  = {}
			  minimapColor = {int   , use hexcolor notation }
			 -->
        <questgivers>
            <questgiver
                    id="1"
                    srcResKey="nyx"
                    resKey="questGiver"
                    clickRadius="65"
                    iconPosX="-35"
                    iconPosY="-100"
                    iconRadius="50"
                    iconResKey="questGiverIcon"
                    logX="-35"
                    logY="-40"
                    logResKey="questGiverLog"
                    lableX="-31"
                    lableY="10"
            />
            <questgiver
                    id="2"
                    srcResKey="nyx_mobile"
                    resKey="questGiver"
                    clickRadius="65"
                    iconPosX="-35"
                    iconPosY="-100"
                    iconRadius="50"
                    iconResKey="questGiverIcon"
                    logX="-35"
                    logY="-40"
                    logResKey="questGiverLog"
                    lableX="-31"
                    lableY="10"
            />
        </questgivers>


        <ships>
            <ship comment="Phoenix"
                  type="1"
                  resKey="ship1"
                  defaultCharacter="player"
                  expansionClassID="1"
                  enginePositionClassID="1"
                  moveRadius="50"
                  clickRadius="40"
                  clickOffsetX="5"
                  clickOffsetY="5"
                  energyYOffset="55"
                  labelYOffset="40"
            />
            <ship comment="Yamato"
                  type="2"
                  resKey="ship2"
                  defaultCharacter="player"
                  expansionClassID="2"
                  enginePositionClassID="2"
                  rocketDamageTypeID="1"
                  moveRadius="70"
                  clickRadius="50"
                  seekInterval="50"
                  clickOffsetX="2"
                  clickOffsetY="4"
                  energyYOffset="50"
                  labelYOffset="50"
            />
            <ship comment="Leonov"
                  type="3"
                  resKey="ship3"
                  defaultCharacter="player"
                  expansionClassID="3"
                  enginePositionClassID="3"
                  clickRadius="35"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="55"
                  labelYOffset="65"
            />
            <ship comment="Leonov blue Glow"
                  type="30"
                  iconClassID="3"
                  resKey="ship3"
                  defaultCharacter="player"
                  expansionClassID="3"
                  enginePositionClassID="3"
                  effect="29"
                  clickRadius="35"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="55"
                  labelYOffset="65"
            />
            <ship comment="Defcom"
                  type="4"
                  resKey="ship4"
                  defaultCharacter="player"
                  expansionClassID="4"
                  enginePositionClassID="4"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="35"
                  labelYOffset="45"
            />
            <ship comment="Liberator"
                  type="5"
                  resKey="ship5"
                  defaultCharacter="player"
                  expansionClassID="5"
                  enginePositionClassID="5"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="40"
                  labelYOffset="50"
            />
            <ship comment="Piranha"
                  type="6"
                  resKey="ship6"
                  defaultCharacter="player"
                  expansionClassID="6"
                  enginePositionClassID="6"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="4"
                  energyYOffset="65"
                  labelYOffset="62"
            />
            <ship comment="Nostromo"
                  type="7"
                  resKey="ship7"
                  defaultCharacter="player"
                  expansionClassID="7"
                  enginePositionClassID="7"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="45"
                  labelYOffset="58"
            />
            <ship comment="Vengeance"
                  type="8"
                  resKey="ship8"
                  defaultCharacter="player"
                  expansionClassID="8"
                  enginePositionClassID="8"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="46"
                  labelYOffset="70"
            />
            <ship comment="Bigboy"
                  type="9"
                  resKey="ship9"
                  defaultCharacter="player"
                  expansionClassID="9"
                  enginePositionClassID="9"
                  clickRadius="60"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="50"
                  labelYOffset="62"
            />
            <ship comment="Goliath"
                  type="10"
                  resKey="ship10"
                  defaultCharacter="player"
                  expansionClassID="10"
                  enginePositionClassID="10"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="demaNeR"
                  type="11"
                  resKey="ship11"
                  defaultCharacter="player"
                  iconClassID="11"
                  expansionClassID="11"
                  enginePositionClassID="11"
                  moveRadius="70"
                  clickRadius="50"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="30"
                  labelYOffset="70"
            />
            <ship comment="P.E.T. Level 1-3"
                  type="12"
                  resKey="ship12"
                  defaultCharacter="pet"
                  iconClassID="0"
                  expansionClassID="12"
                  enginePositionClassID="12"
                  moveRadius="35"
                  clickRadius="20"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="48"
            />
            <ship comment="P.E.T. Level 4-6"
                  type="13"
                  resKey="ship13"
                  defaultCharacter="pet"
                  iconClassID="0"
                  expansionClassID="13"
                  enginePositionClassID="12"
                  moveRadius="35"
                  clickRadius="24"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="48"
            />
            <ship comment="P.E.T. Level 7-9"
                  type="14"
                  resKey="ship14"
                  defaultCharacter="pet"
                  iconClassID="0"
                  expansionClassID="14"
                  enginePositionClassID="12"
                  moveRadius="35"
                  clickRadius="24"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="16"
                  labelYOffset="80"
            />
            <ship comment="P.E.T. Level 10-12"
                  type="15"
                  resKey="ship15"
                  defaultCharacter="pet"
                  iconClassID="0"
                  expansionClassID="15"
                  enginePositionClassID="12"
                  moveRadius="40"
                  clickRadius="28"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="8"
                  labelYOffset="82"
            />
            <ship comment="Vengeance Adept"
                  type="16"
                  resKey="ship16"
                  defaultCharacter="player"
                  iconClassID="8"
                  expansionClassID="8"
                  enginePositionClassID="8"
                  unload="false"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="46"
                  labelYOffset="70"
            />
            <ship comment="Vengeance Corsair"
                  type="17"
                  resKey="ship17"
                  defaultCharacter="player"
                  iconClassID="8"
                  expansionClassID="8"
                  enginePositionClassID="8"
                  unload="false"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="46"
                  labelYOffset="70"
            />
            <ship comment="Vengeance Skill Design Lightning"
                  type="18"
                  resKey="ship18"
                  defaultCharacter="player"
                  iconClassID="8"
                  expansionClassID="18"
                  enginePositionClassID="18"
                  unload="false"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="46"
                  labelYOffset="70"
            />
            <ship comment="Goliath Jade"
                  type="19"
                  resKey="ship19"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="30"
                  labelYOffset="76"
            />
            <ship comment="Ufo"
                  type="20"
                  resKey="ship20"
                  defaultCharacter="player"
                  loopPlay="true"
                  iconClassID="0"
                  expansionClassID="20"
                  rotatable="false"
                  clickRadius="50"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="30"
                  labelYOffset="52"
            />
            <ship comment="Ufonit"
                  type="21"
                  resKey="ship21"
                  defaultCharacter="player"
                  iconClassID="0"
                  loopPlay="true"
                  rotatable="false"
                  clickRadius="50"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="16"
                  labelYOffset="32"
            />
            <ship comment="P.E.T. Level 13-15"
                  type="22"
                  resKey="ship22"
                  defaultCharacter="pet"
                  iconClassID="0"
                  expansionClassID="22"
                  enginePositionClassID="12"
                  moveRadius="40"
                  clickRadius="32"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="24"
                  labelYOffset="82"
            />
            <ship comment="StreunerBoss"
                  type="23"
                  resKey="ship23"
                  defaultCharacter="npc"
                  iconClassID="2"
                  expansionClassID="23"
                  enginePositionClassID="23"
                  moveRadius="70"
                  clickRadius="50"
                  seekInterval="50"
                  clickOffsetX="2"
                  clickOffsetY="4"
                  energyYOffset="10"
                  labelYOffset="80"
            />
            <ship comment="LordakiaBoss"
                  type="24"
                  resKey="ship24"
                  defaultCharacter="npc"
                  iconClassID="71"
                  laserClassID="1"
                  loopPlay="true"
                  explodeTypeID="7"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="48"
            />
            <ship comment="SaimonBoss"
                  type="25"
                  resKey="ship25"
                  defaultCharacter="npc"
                  laserClassID="12"
                  iconClassID="75"
                  expansionClassID="25"
                  enginePositionClassID="25"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="-4"
                  energyYOffset="18"
                  labelYOffset="64"
            />
            <ship comment="DevolariumBoss"
                  type="26"
                  resKey="ship26"
                  defaultCharacter="npc"
                  iconClassID="72"
                  expansionClassID="26"
                  laserClassID="4"
                  clickRadius="100"
                  clickOffsetY="0"
                  clickOffsetX="0"
                  energyYOffset="8"
                  labelYOffset="162"
            />
            <ship comment="SibelonitBoss"
                  type="27"
                  resKey="ship27"
                  defaultCharacter="npc"
                  loopPlay="true"
                  explodeTypeID="7"
                  laserClassID="1"
                  iconClassID="76"
                  expansionClassID="27"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="52"
            />
            <ship comment="LordakiumBoss"
                  type="28"
                  resKey="ship28"
                  defaultCharacter="npc"
                  loopPlay="true"
                  iconClassID="77"
                  laserClassID="5"
                  explodeTypeID="7"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="140"
            />
            <ship comment="KristallinBoss"
                  type="29"
                  resKey="ship29"
                  defaultCharacter="npc"
                  iconClassID="78"
                  laserClassID="3"
                  explodeTypeID="8"
                  rotatable="false"
                  loopPlay="true"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-2"
                  labelYOffset="68"
            />
            <!-- ship type 30 is Leonov Glow, so do not reuse!!! -->
            <ship comment="MordonBoss"
                  type="31"
                  resKey="ship31"
                  defaultCharacter="npc"
                  loopPlay="true"
                  iconClassID="73"
                  laserClassID="-1"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-6"
                  labelYOffset="102"
            />
            <ship comment="Santa-1100101"
                  type="32"
                  resKey="ship32"
                  defaultCharacter="npc"
                  iconClassID="104"
                  expansionClassID="32"
                  soundIDs="87"
                  loopPlay="false"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="130"
            />
            <ship comment="Super Ice Meteoroid"
                  type="33"
                  resKey="ship33"
                  defaultCharacter="npc"
                  loopPlay="true"
                  iconClassID="101"
                  megaExplosion="true"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-30"
                  labelYOffset="122"
            />
            <ship comment="StreuneRBoss"
                  type="34"
                  resKey="ship34"
                  defaultCharacter="npc"
                  iconClassID="2"
                  expansionClassID="34"
                  enginePositionClassID="34"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="12"
                  labelYOffset="72"
            />
            <ship comment="KristallonBoss"
                  type="35"
                  resKey="ship35"
                  defaultCharacter="npc"
                  explodeTypeID="8"
                  iconClassID="79"
                  laserClassID="3"
                  loopPlay="true"
                  rotatable="false"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-22"
                  labelYOffset="98"
            />
            <ship comment="UberStreuner"
                  type="36"
                  resKey="ship23"
                  defaultCharacter="npc"
                  iconClassID="2"
                  enginePositionClassID="23"
                  expansionClassID="23"
                  effect="26"
                  moveRadius="70"
                  clickRadius="50"
                  seekInterval="50"
                  clickOffsetX="2"
                  clickOffsetY="4"
                  energyYOffset="10"
                  labelYOffset="80"
            />
            <ship comment="UberLordakia"
                  type="37"
                  resKey="ship24"
                  defaultCharacter="npc"
                  laserClassID="1"
                  loopPlay="true"
                  iconClassID="71"
                  explodeTypeID="7"
                  effect="26"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="48"
            />
            <ship comment="UberSaimon"
                  type="38"
                  resKey="ship25"
                  defaultCharacter="npc"
                  iconClassID="75"
                  expansionClassID="25"
                  enginePositionClassID="25"
                  effect="26"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="-4"
                  laserClassID="12"
                  energyYOffset="18"
                  labelYOffset="64"
            />
            <ship comment="UberDevolarium"
                  type="39"
                  resKey="ship26"
                  defaultCharacter="npc"
                  iconClassID="72"
                  expansionClassID="26"
                  laserClassID="4"
                  effect="26"
                  clickRadius="100"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="8"
                  labelYOffset="162"
            />
            <ship comment="UberSibelonit"
                  type="40"
                  resKey="ship27"
                  defaultCharacter="npc"
                  loopPlay="true"
                  iconClassID="76"
                  expansionClassID="27"
                  explodeTypeID="7"
                  laserClassID="1"
                  effect="26"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="52"
            />
            <ship comment="UberLordakium"
                  type="41"
                  resKey="ship28"
                  defaultCharacter="npc"
                  iconClassID="77"
                  laserClassID="5"
                  effect="26"
                  loopPlay="true"
                  explodeTypeID="7"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="140"
            />
            <ship comment="UberKristallin"
                  type="42"
                  resKey="ship42"
                  defaultCharacter="npc"
                  iconClassID="78"
                  laserClassID="6"
                  explodeTypeID="8"
                  loopPlay="true"
                  rotatable="false"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="0"
                  labelYOffset="60"
            />
            <ship comment="UberMordon"
                  type="43"
                  resKey="ship31"
                  defaultCharacter="npc"
                  iconClassID="73"
                  loopPlay="true"
                  effect="26"
                  laserClassID="-1"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-6"
                  labelYOffset="102"
            />
            <ship comment="UberStreuneR"
                  type="44"
                  resKey="ship34"
                  defaultCharacter="npc"
                  iconClassID="2"
                  expansionClassID="34"
                  enginePositionClassID="34"
                  effect="26"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="12"
                  labelYOffset="72"
            />
            <ship comment="UberKristallon"
                  type="45"
                  resKey="ship45"
                  defaultCharacter="npc"
                  explodeTypeID="8"
                  iconClassID="79"
                  laserClassID="6"
                  rotatable="false"
                  loopPlay="true"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-12"
                  labelYOffset="74"
            />
            <ship comment="SibelonBoss"
                  type="46"
                  resKey="ship46"
                  defaultCharacter="npc"
                  iconClassID="74"
                  laserClassID="8"
                  expansionClassID="46"
                  enginePositionClassID="46"
                  clickRadius="100"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="22"
                  labelYOffset="142"
            />
            <ship comment="UberSibelon"
                  type="47"
                  resKey="ship46"
                  defaultCharacter="npc"
                  iconClassID="74"
                  laserClassID="8"
                  expansionClassID="46"
                  enginePositionClassID="46"
                  effect="26"
                  clickRadius="100"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="22"
                  labelYOffset="142"
            />
            <ship comment="Disguisor"
                  type="48"
                  resKey="ship48"
                  defaultCharacter="npc"
                  iconClassID="104"
                  expansionClassID="32"
                  loopPlay="false"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="30"
                  labelYOffset="110"
            />
            <ship comment="Aegis"
                  type="49"
                  resKey="ship49"
                  defaultCharacter="player"
                  iconClassID="49"
                  enginePositionClassID="-1"
                  expansionClassID="49"
                  moveRadius="70"
                  playEngineSoundIfNoEnginePresent="true"
                  podType="1"
                  hasFactionLayers="true"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="22"
                  labelYOffset="100"
            />
            <ship comment="red Bigboy"
                  type="50"
                  resKey="ship50"
                  defaultCharacter="player"
                  iconClassID="9"
                  expansionClassID="9"
                  enginePositionClassID="9"
                  clickRadius="60"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="50"
                  labelYOffset="62"
            />
            <ship comment="Goliath Orange / Amber"
                  type="52"
                  resKey="ship52"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="34"
                  labelYOffset="76"
            />
            <ship comment="Goliath Red"
                  type="53"
                  resKey="ship53"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="10"
                  enginePositionClassID="10"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="Goliath Blue / Sapphire"
                  type="54"
                  resKey="ship54"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="34"
                  labelYOffset="76"
            />
            <ship comment="Goliath Black"
                  type="56"
                  resKey="ship56"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="56"
                  enginePositionClassID="10"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="Goliath Stars and Stripes"
                  type="57"
                  resKey="ship57"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="10"
                  enginePositionClassID="10"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="Vengeance Revenge"
                  type="58"
                  resKey="ship58"
                  defaultCharacter="player"
                  iconClassID="8"
                  expansionClassID="8"
                  enginePositionClassID="8"
                  unload="false"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="46"
                  labelYOffset="70"
            />
            <ship comment="Goliath Bastion"
                  type="59"
                  resKey="ship59"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="10"
                  enginePositionClassID="10"
                  moveRadius="70"
                  preload="true"
                  precache="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="Vengeance Avenger"
                  type="60"
                  resKey="ship60"
                  defaultCharacter="player"
                  iconClassID="8"
                  expansionClassID="8"
                  enginePositionClassID="8"
                  preload="true"
                  precache="true"
                  unload="false"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="46"
                  labelYOffset="70"
            />
            <ship comment="Goliath Veteran"
                  type="61"
                  resKey="ship61"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="10"
                  enginePositionClassID="10"
                  moveRadius="70"
                  preload="true"
                  precache="false"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="Goliath Exalted"
                  type="62"
                  resKey="ship62"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="10"
                  enginePositionClassID="10"
                  moveRadius="70"
                  preload="true"
                  precache="false"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="Skill Design 1 - Solace"
                  type="63"
                  resKey="ship63"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="63"
                  enginePositionClassID="63"
                  moveRadius="70"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="72"
            />
            <ship comment="Skill Design 2 - Diminsher"
                  type="64"
                  resKey="ship64"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="64"
                  enginePositionClassID="64"
                  moveRadius="70"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="36"
                  labelYOffset="78"
            />
            <ship comment="Skill Design 3 - Spectrum"
                  type="65"
                  resKey="ship65"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="65"
                  enginePositionClassID="65"
                  moveRadius="70"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="44"
                  labelYOffset="68"
            />
            <ship comment="Skill Design 4 - Sentinel"
                  type="66"
                  resKey="ship66"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="66"
                  enginePositionClassID="66"
                  moveRadius="70"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="24"
                  labelYOffset="112"
            />
            <ship comment="Skill Design 5 - Venom"
                  type="67"
                  resKey="ship67"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="67"
                  enginePositionClassID="67"
                  moveRadius="70"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="40"
                  labelYOffset="92"
            >
                <!--  load resources on demand -->
                <resources>
                    <resource resKey="venom-effect"/>
                </resources>
            </ship>
            <ship comment="Goliath Ignite"
                  type="68"
                  resKey="ship68"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="10"
                  enginePositionClassID="10"
                  moveRadius="70"
                  preload="true"
                  precache="true"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="48"
                  labelYOffset="64"
            />
            <ship comment="Citadel"
                  type="69"
                  resKey="ship69"
                  defaultCharacter="player"
                  iconClassID="69"
                  enginePositionClassID="69"
                  expansionClassID="69"
                  hasFactionLayers="true"
                  podType="2"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="34"
                  labelYOffset="114"
            />
            <ship comment="Spearhead"
                  type="70"
                  resKey="ship70"
                  defaultCharacter="player"
                  iconClassID="70"
                  expansionClassID="70"
                  enginePositionClassID="70"
                  engineTypeID="1"
                  hasFactionLayers="true"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="30"
                  labelYOffset="80"
            />
            <ship comment="Lordakia"
                  type="71"
                  resKey="ship71"
                  defaultCharacter="npc"
                  laserClassID="1"
                  loopPlay="true"
                  explodeTypeID="7"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="12"
                  labelYOffset="40"
            />
            <ship comment="Devolarium"
                  type="72"
                  resKey="ship72"
                  defaultCharacter="npc"
                  expansionClassID="72"
                  laserClassID="7"
                  clickRadius="120"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="8"
                  labelYOffset="100"
            />
            <ship comment="Mordon"
                  type="73"
                  resKey="ship73"
                  defaultCharacter="npc"
                  loopPlay="true"
                  laserClassID="-1"
                  clickRadius="55"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="0"
                  labelYOffset="76"
            />
            <ship comment="Sibelon"
                  type="74"
                  resKey="ship74"
                  defaultCharacter="npc"
                  expansionClassID="74"
                  enginePositionClassID="74"
                  clickRadius="100"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  laserClassID="8"
                  energyYOffset="22"
                  labelYOffset="142"
            />
            <ship comment="Saimon"
                  type="75"
                  resKey="ship75"
                  defaultCharacter="npc"
                  expansionClassID="75"
                  enginePositionClassID="75"
                  laserClassID="12"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="-4"
                  energyYOffset="18"
                  labelYOffset="50"
            />
            <ship comment="Sibelonit"
                  type="76"
                  resKey="ship76"
                  defaultCharacter="npc"
                  loopPlay="true"
                  explodeTypeID="7"
                  expansionClassID="76"
                  laserClassID="1"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="8"
                  labelYOffset="52"
            />
            <ship comment="Lordakium (Mothership)"
                  type="77"
                  resKey="ship77"
                  defaultCharacter="npc"
                  loopPlay="true"
                  explodeTypeID="7"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  laserClassID="5"
                  energyYOffset="14"
                  labelYOffset="114"
            />
            <ship comment="Kristallin"
                  type="78"
                  resKey="ship78"
                  defaultCharacter="npc"
                  laserClassID="9"
                  explodeTypeID="8"
                  rotatable="false"
                  loopPlay="true"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="0"
                  labelYOffset="52"
            />
            <ship comment="Kristallon (Mothership)"
                  type="79"
                  resKey="ship79"
                  defaultCharacter="npc"
                  laserClassID="9"
                  explodeTypeID="8"
                  rotatable="false"
                  loopPlay="true"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-14"
                  labelYOffset="96"
            />
            <ship comment="Cubikon"
                  type="80"
                  resKey="ship80"
                  defaultCharacter="npc"
                  megaExplosion="true"
                  rotatable="false"
                  loopPlay="true"
                  clickRadius="90"
                  clickOffsetX="32"
                  clickOffsetY="0"
                  energyYOffset="24"
                  labelYOffset="158"
            />
            <ship comment="Protegit"
                  type="81"
                  resKey="ship81"
                  defaultCharacter="npc"
                  expansionClassID="81"
                  enginePositionClassID="-1"
                  rotatable="true"
                  laserClassID="2"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="14"
                  labelYOffset="30"
            />
            <ship comment="Kucurbium"
                  type="82"
                  resKey="ship82"
                  defaultCharacter="npc"
                  iconClassID="82"
                  laserClassID="2"
                  loopPlay="true"
                  clickRadius="35"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-6"
                  labelYOffset="30"
            />
            <ship comment="Uber Kucurbium"
                  type="83"
                  resKey="ship83"
                  defaultCharacter="npc"
                  loopPlay="true"
                  megaExplosion="true"
                  iconClassID="82"
                  laserClassID="2"
                  clickRadius="90"
                  clickOffsetX="0"
                  clickOffsetY="15"
                  energyYOffset="-46"
                  labelYOffset="110"
            />
            <ship comment="Streuner"
                  type="84"
                  resKey="ship84"
                  defaultCharacter="npc"
                  iconClassID="2"
                  enginePositionClassID="84"
                  expansionClassID="84"
                  moveRadius="70"
                  clickRadius="50"
                  seekInterval="50"
                  clickOffsetX="2"
                  clickOffsetY="4"
                  energyYOffset="14"
                  labelYOffset="48"
            />
            <ship comment="StreuneR"
                  type="85"
                  resKey="ship85"
                  defaultCharacter="npc"
                  iconClassID="2"
                  expansionClassID="85"
                  enginePositionClassID="85"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="64"
            />
            <ship comment="Goliath Kick"
                  type="86"
                  resKey="ship86"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="76"
            />
            <ship comment="Goliath Referee"
                  type="87"
                  resKey="ship87"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="76"
            />
            <ship comment="Goliath Goal"
                  type="88"
                  resKey="ship88"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="76"
            />
            <ship comment="Football-1100101"
                  type="89"
                  resKey="ship89"
                  defaultCharacter="npc"
                  iconClassID="104"
                  expansionClassID="32"
                  loopPlay="false"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-56"
                  labelYOffset="128"
            />
            <ship comment="Century Falcon"
                  type="90"
                  resKey="ship90"
                  defaultCharacter="npc"
                  iconClassID="90"
                  expansionClassID="90"
                  enginePositionClassID="90"
                  megaExplosion="true"
                  clickRadius="90"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="34"
                  labelYOffset="184"
            />
            <ship comment="Corsair"
                  type="91"
                  resKey="ship91"
                  defaultCharacter="npc"
                  iconClassID="91"
                  expansionClassID="91"
                  enginePositionClassID="91"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="70"
            />
            <ship comment="Outcast"
                  type="92"
                  resKey="ship92"
                  defaultCharacter="npc"
                  iconClassID="93"
                  expansionClassID="92"
                  enginePositionClassID="92"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="42"
            />
            <ship comment="Marauder"
                  type="93"
                  resKey="ship93"
                  defaultCharacter="npc"
                  iconClassID="93"
                  expansionClassID="92"
                  enginePositionClassID="92"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="42"
            />
            <ship comment="Vagrant"
                  type="94"
                  resKey="ship94"
                  defaultCharacter="npc"
                  iconClassID="93"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="24"
            />
            <ship comment="Convict"
                  type="95"
                  resKey="ship95"
                  defaultCharacter="npc"
                  iconClassID="93"
                  expansionClassID="95"
                  enginePositionClassID="95"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="96"
            />
            <ship comment="Hooligan"
                  type="96"
                  resKey="ship96"
                  defaultCharacter="npc"
                  iconClassID="93"
                  expansionClassID="95"
                  enginePositionClassID="95"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="14"
                  labelYOffset="60"
            />
            <ship comment="Ravager"
                  type="97"
                  resKey="ship97"
                  defaultCharacter="npc"
                  iconClassID="93"
                  expansionClassID="95"
                  enginePositionClassID="95"
                  clickRadius="60"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="12"
                  labelYOffset="72"
            />
            <ship comment="PoliceShip"
                  type="98"
                  resKey="ship98"
                  defaultCharacter="player"
                  expansionClassID="98"
                  enginePositionClassID="98"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="32"
                  labelYOffset="64"
            />
            <ship comment="UnidentifiedDreadnought"
                  type="99"
                  resKey="ship99"
                  defaultCharacter="npc"
                  iconClassID="99"
                  expansionClassID="99"
                  enginePositionClassID="99"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="16"
                  labelYOffset="62"
            />
            <ship comment="UnidentifiedDestroyer"
                  type="100"
                  resKey="ship100"
                  defaultCharacter="npc"
                  iconClassID="100"
                  expansionClassID="100"
                  moveRadius="70"
                  clickRadius="30"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="36"
            />
            <ship comment="Ice Meteoroid"
                  type="101"
                  resKey="ship101"
                  defaultCharacter="npc"
                  iconClassID="101"
                  loopPlay="true"
                  megaExplosion="true"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-12"
                  labelYOffset="80"
            />
            <ship comment="Unidentified Battleship"
                  type="102"
                  resKey="ship102"
                  defaultCharacter="npc"
                  iconClassID="102"
                  expansionClassID="102"
                  enginePositionClassID="102"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="26"
                  labelYOffset="106"
            />
            <ship comment="Icy"
                  type="103"
                  resKey="ship103"
                  defaultCharacter="npc"
                  iconClassID="103"
                  rotatable="true"
                  moveRadius="70"
                  clickRadius="30"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="30"
            />
            <ship comment="1100101"
                  type="104"
                  resKey="ship104"
                  defaultCharacter="npc"
                  iconClassID="104"
                  expansionClassID="104"
                  loopPlay="false"
                  moveRadius="70"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="8"
                  labelYOffset="122"
            />
            <ship comment="Unidentified Carrier"
                  type="105"
                  resKey="ship105"
                  iconClassID="105"
                  defaultCharacter="npc"
                  moveRadius="70"
                  clickRadius="100"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-110"
                  labelYOffset="255"
            />
            <ship comment="Football-Lordakia"
                  type="106"
                  resKey="ship106"
                  defaultCharacter="npc"
                  iconClassID="71"
                  laserClassID="1"
                  loopPlay="true"
                  explodeTypeID="7"
                  clickRadius="40"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="12"
                  labelYOffset="40"
            />
            <ship comment="Lordakium (SolarClash)"
                  type="107"
                  resKey="ship107"
                  defaultCharacter="npc"
                  iconClassID="77"
                  laserClassID="5"
                  loopPlay="true"
                  explodeTypeID="7"
                  isLegendaryEventNPC="true"
                  effect="43"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-12"
                  labelYOffset="114"
            />
            <ship comment="Evilyou-Havoc"
                  type="108"
                  resKey="ship108"
                  defaultCharacter="npc"
                  iconClassID="71"
                  clickRadius="30"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="8"
                  labelYOffset="32"
            />
            <ship comment="Goliath Saturn"
                  type="109"
                  resKey="ship109"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="76"
            />
            <ship comment="Goliath Centaur"
                  type="110"
                  resKey="ship110"
                  defaultCharacter="player"
                  iconClassID="10"
                  expansionClassID="19"
                  enginePositionClassID="19"
                  unload="false"
                  clickRadius="70"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="76"
            />
            <ship comment="Pirate Interceptor"
                  type="111"
                  resKey="ship111"
                  defaultCharacter="pirate"
                  expansionClassID="111"
                  enginePositionClassID="111"
                  moveRadius="50"
                  clickRadius="30"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="35"
            />
            <ship comment="Pirate Barracuda"
                  type="112"
                  resKey="ship112"
                  defaultCharacter="pirate"
                  iconClassID="111"
                  expansionClassID="112"
                  enginePositionClassID="112"
                  shockwaveID="2"
                  moveRadius="60"
                  clickRadius="50"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="20"
                  labelYOffset="66"
            />
            <ship comment="Pirate Saboteur"
                  type="113"
                  resKey="ship113"
                  defaultCharacter="pirate"
                  iconClassID="111"
                  expansionClassID="113"
                  enginePositionClassID="113"
                  moveRadius="60"
                  clickRadius="50"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="12"
                  labelYOffset="66"
            />
            <ship comment="Pirate Annihilator"
                  type="114"
                  resKey="ship114"
                  defaultCharacter="pirate"
                  iconClassID="111"
                  expansionClassID="114"
                  enginePositionClassID="114"
                  moveRadius="120"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="30"
                  labelYOffset="110"
            />
            <ship comment="Pirate Battleray"
                  type="115"
                  resKey="ship115"
                  defaultCharacter="pirate"
                  iconClassID="111"
                  expansionClassID="115"
                  enginePositionClassID="115"
                  moveRadius="180"
                  clickRadius="100"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="188"
            />
            <ship comment="Hitac Mothership"
                  type="116"
                  resKey="ship116"
                  defaultCharacter="npc"
                  iconClassID="116"
                  laserClassID="10"
                  loopPlay="true"
                  minimapIcon="mapIcon_npc_hitec"
                  soundIDs="108,109"
                  playEngineSoundIfNoEnginePresent="true"
                  dockableElementsPositionClassID="1"
                  moveRadius="175"
                  clickRadius="110"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-30"
                  labelYOffset="100"
            />
            <ship comment="Hitac Minions"
                  type="117"
                  resKey="ship117"
                  defaultCharacter="npc"
                  iconClassID="117"
                  laserClassID="11"
                  loopPlay="true"
                  minimapColor="0x824BFF"
                  dockableElementsPositionClassID="1"
                  moveRadius="180"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="10"
                  labelYOffset="66"
            />
            <ship comment="Boss Curcubitor"
                  type="118"
                  resKey="ship118"
                  defaultCharacter="npc"
                  iconClassID="77"
                  loopPlay="true"
                  explodeTypeID="7"
                  isLegendaryEventNPC="true"
                  clickRadius="80"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  laserClassID="5"
                  energyYOffset="-26"
                  labelYOffset="160"
            />
            <ship comment="Curcubitor"
                  type="119"
                  resKey="ship119"
                  defaultCharacter="npc"
                  iconClassID="71"
                  loopPlay="true"
                  clickRadius="30"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-2"
                  labelYOffset="38"
            />
            <ship comment="Turkey"
                  type="120"
                  resKey="ship120"
                  defaultCharacter="npc"
                  iconClassID="72"
                  expansionClassID="120"
                  enginePositionClassID="120"
                  loopPlay="false"
                  explodeTypeID="7"
                  clickRadius="60"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="-12"
                  labelYOffset="70"
            />
            <ship comment="Snowman"
                  type="121"
                  resKey="ship121"
                  defaultCharacter="player"
                  iconClassID="72"
                  expansionClassID="121"
                  enginePositionClassID="-1"
                  loopPlay="false"
                  explodeTypeID="7"
                  clickRadius="46"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="18"
                  labelYOffset="46"
            />
            <ship comment="spaceball summer"
                  type="442"
                  resKey="ship442"
                  defaultCharacter="npc"
                  iconClassID="0"
                  loopPlay="true"
                  spaceball="true"
                  energyVisible="false"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="0"
                  labelYOffset="52"
            />
            <ship comment="spaceball winter"
                  type="443"
                  resKey="ship443"
                  defaultCharacter="npc"
                  iconClassID="0"
                  loopPlay="true"
                  spaceball="true"
                  energyVisible="false"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="0"
                  labelYOffset="0"
            />
            <ship comment="spaceball soccer"
                  type="444"
                  resKey="ship444"
                  defaultCharacter="npc"
                  iconClassID="0"
                  loopPlay="true"
                  spaceball="true"
                  energyVisible="false"
                  clickRadius="45"
                  clickOffsetX="0"
                  clickOffsetY="0"
                  energyYOffset="0"
                  labelYOffset="50"
            />
        </ships>


        <!-- Backgrounds ............................................................................................................................. -->

        <backgrounds layers="1">
            <!--<background content="custom" type="1" color="dd0000" width="2100" height="1310"/>-->
            <background content="resource" type="1" resKey="background1"/>
            <background content="resource" type="2" resKey="background2"/>
            <background content="resource" type="3" resKey="background3"/>
            <background content="resource" type="4" resKey="background4"/>
            <background content="resource" type="5" resKey="background5"/>
            <background content="resource" type="6" resKey="background6"/>
            <background content="resource" type="7" resKey="background7"/>
            <background content="resource" type="8" resKey="background8"/>
            <background content="resource" type="9" resKey="background9"/>
            <background content="resource" type="10" resKey="background10"/>
            <background content="resource" type="11" resKey="background11"/>
            <background content="resource" type="12" resKey="background12"/>
            <background content="resource" type="13" resKey="background13"/>
            <background content="resource" type="14" resKey="background14"/>
            <background content="resource" type="15" resKey="background15"/>
            <background content="resource" type="16" resKey="background16"/>
            <background content="resource" type="17" resKey="background17"/>
            <background content="resource" type="18" resKey="background18"/>
            <background content="resource" type="19" resKey="background19"/>
            <background content="resource" type="20" resKey="background20"/>
            <background content="resource" type="21" resKey="background21"/>
            <background content="resource" type="22" resKey="background22"/>
            <background content="resource" type="23" resKey="background23"/>
            <background content="resource" type="24" resKey="background24"/>
            <background content="resource" type="25" resKey="background25"/>
            <background content="resource" type="26" resKey="background26"/>
            <background content="resource" type="27" resKey="background27"/>
            <background content="resource" type="28" resKey="background28"/>
            <background content="resource" type="29" resKey="background29"/>
            <!--<background content="custom" type="42" color="000000" width="2100" height="1310"/>-->
            <background content="resource" type="42" resKey="background42"/>
            <background content="resource" type="51" resKey="background51"/>
            <background content="resource" type="52" resKey="background52"/>
            <background content="resource" type="53" resKey="background53"/>
            <background content="resource" type="54" resKey="background54"/>
            <background content="resource" type="55" resKey="background55"/>
            <background content="resource" type="56" resKey="background54"/>
            <background content="resource" type="57" resKey="background57"/>
            <background content="resource" type="58" resKey="background58"/>
            <background content="resource" type="60" resKey="background60"/>
            <background content="resource" type="61" resKey="background61"/>
            <background content="resource" type="62" resKey="background61"/>
            <background content="resource" type="63" resKey="background61"/>
            <background content="resource" type="64" resKey="background61"/>
            <background content="resource" type="65" resKey="background61"/>
            <background content="resource" type="66" resKey="background61"/>
            <background content="resource" type="67" resKey="background61"/>
            <background content="resource" type="68" resKey="background61"/>
            <background content="resource" type="69" resKey="background61"/>
            <background content="resource" type="70" resKey="background70"/>
            <background content="resource" type="71" resKey="background57"/>
            <background content="resource" type="72" resKey="background72"/>
            <background content="resource" type="73" resKey="background73"/>
            <background content="resource" type="74" resKey="background74"/>
            <background content="resource" type="75" resKey="background75"/>
            <background content="resource" type="76" resKey="background76"/>
            <background content="resource" type="81" resKey="background81"/>
            <background content="resource" type="82" resKey="background82"/>
            <background content="resource" type="92" resKey="background92"/>
            <background content="resource" type="101" resKey="background101"/>
            <background content="resource" type="200" resKey="background200"/>
            <background content="resource" type="201" resKey="background201"/>
            <background content="resource" type="255" resKey="background255"/>
            <background content="resource" type="1001" resKey="layer1"/>
            <background content="resource" type="1002" resKey="layer2"/>

            <!-- STARLING BG REFACTOR -->
            <background content="resource" type="1016" resKey="background16-210x131"
                        resKeyStarling="background16-4200x2620" isTiled="true" isReloadable="true" tileWidth="210"
                        tileHeight="131" order="ASC"/>
            <background content="resource" type="1029" resKey="background29-210x131"
                        resKeyStarling="background29-4200x2620" isTiled="true" isReloadable="true" tileWidth="210"
                        tileHeight="131" order="ASC"/>
            <background content="resource" type="1091" resKey="background91-210x131"
                        resKeyStarling="background91-4200x2620" isTiled="true" isReloadable="true" tileWidth="210"
                        tileHeight="131" order="ASC"/>
            <background content="resource" type="1093" resKey="background93-210x131"
                        resKeyStarling="background93-4200x2620" isTiled="true" isReloadable="true" tileWidth="210"
                        tileHeight="131" order="ASC"/>
            <background content="custom" type="1999" color="000000" tileWidth="4200" tileHeight="2620"/>
            <background content="resource" type="2000" resKey="stars1-50x50" isTiled="true" tileWidth="50"
                        tileHeight="50"/>
            <background content="resource" type="2001" resKey="stars2_50x50" resKeyStarling="stars2_50x50_texture"
                        atlasXml="stars2_50x50_atlasXml" isTiled="true" tileWidth="50" tileHeight="50"/>
            <background content="resource" type="2011" resKey="asteroids_small_blue"
                        resKeyStarling="asteroids_small_blue_texture" atlasXml="asteroids_small_blue_atlasXml"
                        isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2012" resKey="asteroids-small-green"
                        resKeyStarling="asteroids-small-green_texture" atlasXml="asteroids-small-green_atlasXml"
                        isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2013" resKey="asteroids-small-darkred"
                        resKeyStarling="asteroids-small-darkred_texture" atlasXml="asteroids-small-darkred_atlasXml"
                        isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2014" resKey="asteroids-small-yellow"
                        resKeyStarling="asteroids-small-yellow_texture" atlasXml="asteroids-small-yellow_atlasXml"
                        isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2015" resKey="asteroids-small-lightblue"
                        resKeyStarling="asteroids_small_lightblue_texture" atlasXml="asteroids_small_lightblue_atlasXml"
                        isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2016" resKey="asteroids2_small_blue"
                        resKeyStarling="asteroids2_small_blue_texture" atlasXml="asteroids2_small_blue_atlasXml"
                        isTiled="true" tileWidth="200" tileHeight="200"/>
            <background content="resource" type="2022" resKey="clouds-blue" resKeyStarling="clouds_blue_texture"
                        atlasXml="clouds_blue_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2023" resKey="clouds-lightblue"
                        resKeyStarling="clouds-lightblue_texture" atlasXml="clouds-lightblue_atlasXml" isTiled="true"
                        tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2024" resKey="clouds-grey" resKeyStarling="clouds_grey_texture"
                        atlasXml="clouds_grey_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2025" resKey="clouds-green" resKeyStarling="clouds-green_texture"
                        atlasXml="clouds-green_atlasXml" isTiled="true" tileWidth="300" tileHeight="300"/>
            <background content="resource" type="2026" resKey="clouds-darkred" resKeyStarling="clouds-darkred_texture"
                        atlasXml="clouds-darkred_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2027" resKey="clouds-green-yellow"
                        resKeyStarling="clouds-green-yellow_texture" atlasXml="clouds-green-yellow_atlasXml"
                        isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="2028" resKey="clouds-yellow" resKeyStarling="clouds-yellow_texture"
                        atlasXml="clouds-yellow_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>

            <!-- poizones begin -->
            <background content="resource" type="3000" resKey="asteroid_desert" resKeyStarling="asteroid_desert_texture"
                        atlasXml="asteroid_desert_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="3001" resKey="asteroid_desert_simple"
                        resKeyStarling="asteroid_desert_simple_texture" atlasXml="asteroid_desert_simple_atlasXml"
                        isTiled="true" tileWidth="128" tileHeight="128"/>
            <background content="resource" type="3002" resKey="asteroid_pirates"
                        resKeyStarling="asteroid_pirates_texture" atlasXml="asteroid_pirates_atlasXml" isTiled="true"
                        tileWidth="256" tileHeight="256"/>
            <background content="resource" type="3003" resKey="asteroid_pirates_simple"
                        resKeyStarling="asteroid_pirates_simple_texture" atlasXml="asteroid_pirates_simple_atlasXml"
                        isTiled="true" tileWidth="128" tileHeight="128"/>
            <background content="resource" type="3004" resKey="scrap_pirates" resKeyStarling="scrap_pirates_texture"
                        atlasXml="scrap_pirates_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="3005" resKey="scrap_pirates_simple"
                        resKeyStarling="scrap_pirates_simple_texture" atlasXml="scrap_pirates_simple_atlasXml"
                        isTiled="true" tileWidth="128" tileHeight="128"/>
            <background content="resource" type="3006" resKey="nebula_pirates" resKeyStarling="nebula_pirates_texture"
                        atlasXml="nebula_pirates_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="3007" resKey="nebula_pirates_simple"
                        resKeyStarling="nebula_pirates_simple_texture" atlasXml="nebula_pirates_simple_atlasXml"
                        isTiled="true" tileWidth="128" tileHeight="128"/>
            <background content="resource" type="3008" resKey="asteroid_blue" resKeyStarling="asteroid_blue_texture"
                        atlasXml="asteroid_blue_atlasXml" isTiled="true" tileWidth="256" tileHeight="256"/>
            <background content="resource" type="3009" resKey="asteroid_blue_simple"
                        resKeyStarling="asteroid_blue_simple_texture" atlasXml="asteroid_blue_simple_atlasXml"
                        isTiled="true" tileWidth="128" tileHeight="128"/>
            <!-- poizones end -->

            <background content="resource" type="3018" resKey="zeta-2-clouds-1"/>
            <background content="resource" type="3019" resKey="zeta-2-clouds-2"/>
            <background content="resource" type="3020" resKey="zeta-3-clouds-1"/>
            <background content="resource" type="3021" resKey="zeta-3-clouds-2"/>
            <background content="resource" type="3022" resKey="epsilon-asteroids"/>
            <background content="resource" type="3023" resKey="epsilon-clouds"/>
            <background content="resource" type="3024" resKey="zeta-2-asteroids-1"/>
            <background content="resource" type="3025" resKey="zeta-2-crystals-1"/>

            <!-- STARLING BG REFACTOR -->
            <background content="resource" type="4001" resKey="freighter-210x131" resKeyStarling="freighter-4200"
                        isTiled="true" isReloadable="true" tileWidth="210" tileHeight="131" order="ASC"
                        showInStarlingMode="true"/>

            <!-- spacecup 2012 non-tiled  -->
            <background content="resource" type="5061" resKey="background61-football"/>
            <background content="resource" type="5062" resKey="background61-football"/>
            <background content="resource" type="5063" resKey="background61-football"/>
            <background content="resource" type="5064" resKey="background61-football"/>
            <background content="resource" type="5065" resKey="background61-football"/>
            <background content="resource" type="5066" resKey="background61-football"/>
            <background content="resource" type="5067" resKey="background61-football"/>
            <background content="resource" type="5068" resKey="background61-football"/>
            <background content="resource" type="5069" resKey="background61-football"/>
            <background content="resource" type="5081" resKey="background81-football"/>
            <background content="resource" type="5082" resKey="background81-football"/>
        </backgrounds>

        <backgroundMasks>
            <backgroundMask type="1" resKey="mask91-1"/>
            <backgroundMask type="2" resKey="mask91-2"/>
            <backgroundMask type="3" resKey="mask91-3"/>
            <backgroundMask type="4" resKey="mask92-0"/>
            <backgroundMask type="5" resKey="mask92-1"/>
            <backgroundMask type="6" resKey="mask92-2"/>
            <backgroundMask type="7" resKey="mask92-3"/>
            <backgroundMask type="8" resKey="mask93-1"/>
            <backgroundMask type="9" resKey="mask93-2"/>
            <backgroundMask type="10" resKey="mask93-3"/>
            <backgroundMask type="11" resKey="mask255_stars"/>
            <backgroundMask type="12" resKey="mask255_clouds-lightblue"/>
            <backgroundMask type="13" resKey="mask255_clouds-grey"/>
            <backgroundMask type="14" resKey="mask255_asteroids"/>
            <backgroundMask type="15" resKey="mask91-1"/>
            <backgroundMask type="16" resKey="mask5_clouds-blue"/>
            <backgroundMask type="17" resKey="mask1_asteroids-small-darkred"/>
            <backgroundMask type="18" resKey="mask1_clouds-grey"/>
            <backgroundMask type="19" resKey="mask9_clouds-darkred"/>
            <backgroundMask type="20" resKey="mask9_clouds-green-yellow"/>
            <backgroundMask type="21" resKey="mask101_clouds-lightblue"/>
        </backgroundMasks>

        <minimaps>
            <minimap type="16" resKey="minimap16"/>
            <minimap type="29" resKey="minimap29"/>
            <minimap type="91" resKey="minimap91"/>
            <minimap type="93" resKey="minimap93"/>
            <minimap type="101" resKey="minimap101"/>
            <minimap type="201" resKey="minimap201"/>
            <minimap type="255" resKey="minimap255"/>
            <minimap type="1016" resKey="minimap1016"/>
            <minimap type="5081" resKey="background5081"/>
        </minimaps>


        <expansions>
            <!-- Expansions for ships compatible with Phoenix Model -->
            <expansion class="1">
                <positionsList name="standard"
                               data="-28.9,-2.9,-28.5,-6.9,-26.8,-10.7,-23.9,-14.4,-20.4,-17.3,-16.1,-19.9,-11.0,-21.7,-5.4,-23.0,0.1,-23.3,5.8,-23.0,11.3,-21.7,16.3,-19.9,20.7,-17.3,24.2,-14.1,26.8,-10.6,28.5,-6.8,28.9,-2.7,28.3,1.3,26.8,5.2,24.1,8.6,20.5,11.7,16.1,14.3,11.1,16.2,5.6,17.2,-0.1,17.7,-5.7,17.2,-11.1,16.2,-16.1,14.1,-20.7,11.7,-24.1,8.6,-26.8,4.9,-28.4,1.0"/>

                <positionsList name="left"
                               data="-36.1,3.6,-38.4,-1.6,-39.1,-6.9,-38.5,-12.3,-36.1,-17.6,-32.5,-22.3,-27.8,-26.4,-21.8,-29.8,-15.0,-32.4,-7.7,-34.0,-0.1,-34.5,7.5,-34.0,14.8,-32.4,21.6,-29.8,27.6,-26.4,32.3,-22.3,36.0,-17.6,38.3,-12.3,39.1,-6.9,38.2,-1.4,35.9,3.6,32.3,8.6,27.6,12.7,21.6,16.1,14.8,18.7,7.5,20.3,-0.2,20.8,-7.8,20.2,-15.1,18.6,-21.8,16.1,-27.7,12.6,-32.6,8.5"/>
                <positionsList name="right"
                               data="-36.1,-17.6,-32.5,-22.3,-27.7,-26.4,-21.8,-29.8,-15.0,-32.4,-7.7,-34.0,-0.1,-34.5,7.5,-34.0,14.8,-32.4,21.6,-29.8,27.6,-26.4,32.5,-22.2,35.9,-17.3,38.2,-12.2,39.0,-6.9,38.3,-1.4,35.9,3.9,32.3,8.6,27.6,12.7,21.6,16.1,14.8,18.7,7.5,20.3,-0.1,20.8,-7.8,20.2,-15.0,18.7,-21.8,16.1,-27.8,12.7,-32.6,8.5,-36.2,3.6,-38.4,-1.4,-39.2,-6.9,-38.5,-12.3"/>
                <positionsList name="centerRear"
                               data="-24.4,-23.0,-23.9,-26.4,-22.6,-29.6,-20.2,-32.7,-17.3,-35.3,-13.7,-37.4,-9.5,-39.0,-4.8,-40.0,-0.1,-40.3,4.6,-40.0,9.3,-39.0,13.5,-37.4,17.1,-35.3,20.0,-32.7,22.4,-29.6,23.7,-26.4,24.2,-23.0,23.7,-19.7,22.4,-16.5,20.2,-13.5,17.1,-11.0,13.5,-8.7,9.2,-7.2,4.7,-6.2,-0.1,-5.8,-4.9,-6.1,-9.5,-7.2,-13.6,-8.7,-17.3,-10.9,-20.3,-13.5,-22.6,-16.5,-23.9,-19.6"/>
                <positionsList name="centerFront"
                               data="-63.3,-2.9,-62.0,-11.6,-58.4,-20.0,-52.6,-27.7,-44.7,-34.5,-35.3,-40.0,-24.4,-44.2,-12.6,-46.8,-0.2,-47.7,12.2,-46.8,23.9,-44.2,34.9,-40.3,44.5,-34.6,52.3,-27.8,58.1,-20.2,61.8,-11.8,63.1,-3.2,61.8,5.7,58.2,14.0,52.5,21.8,44.6,28.4,35.2,34.1,24.2,38.3,12.4,40.7,0.0,41.6,-12.3,40.9,-24.1,38.3,-35.1,34.1,-44.5,28.7,-52.6,21.9,-58.4,14.2,-61.9,5.7"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship1_Emed">
                    <salvo laser="left,right"/>
                </stage>
                <stage id="3" resKey="ship1_Emax">
                    <salvo laser="left,right"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="left,right"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with Yamato Model-->
            <expansion class="2">
                <positionsList name="standard"
                               data="-45.8,2.1,-44.9,-4.3,-42.1,-10.4,-37.9,-16.0,-32.4,-20.9,-25.3,-24.9,-17.5,-27.8,-8.9,-29.7,0.1,-30.4,9.0,-29.7,17.6,-27.8,25.4,-24.8,32.4,-20.8,38.1,-15.9,42.4,-10.4,45.0,-4.2,45.8,2.1,44.9,8.4,42.3,14.5,38.2,20.0,32.3,25.0,25.5,29.0,17.6,32.0,8.9,33.9,0.1,34.4,-8.9,33.9,-17.5,32.0,-25.4,29.0,-32.2,25.0,-37.9,20.0,-42.1,14.4,-45.0,8.4"/>

                <positionsList name="leftFront"
                               data="-46.3,20.4,-50.3,13.8,-52.4,6.6,-52.6,-0.8,-50.7,-7.8,-47.0,-14.7,-41.4,-20.8,-34.2,-26.2,-25.8,-30.2,-16.2,-33.1,-6.0,-34.7,4.3,-34.9,14.5,-33.5,24.1,-30.9,32.7,-26.9,40.2,-21.7,46.0,-15.7,50.1,-9.0,52.4,-1.9,52.5,5.4,50.6,12.7,46.8,19.5,41.1,25.6,34.1,30.8,25.6,35.0,16.0,37.9,5.9,39.5,-4.4,39.5,-14.7,38.3,-24.2,35.5,-32.9,31.7,-40.4,26.6"/>
                <positionsList name="rightFront"
                               data="-46.2,-15.6,-40.4,-21.5,-33.1,-26.7,-24.4,-30.7,-14.8,-33.3,-4.6,-34.7,5.6,-34.7,15.7,-33.0,25.1,-30.2,33.8,-26.2,41.0,-20.9,46.6,-14.9,50.3,-8.1,52.3,-0.8,52.2,6.5,50.1,13.6,46.1,20.2,40.2,26.3,32.9,31.5,24.2,35.5,14.7,38.1,4.5,39.5,-5.8,39.5,-15.9,37.9,-25.3,35.0,-33.9,31.0,-41.1,25.6,-46.7,19.5,-50.6,12.8,-52.4,5.6,-52.4,-1.7,-50.3,-8.8"/>
                <positionsList name="leftRear"
                               data="-17.3,19.3,-24.5,16.4,-30.7,12.4,-36.0,7.9,-39.7,2.5,-42.0,-3.1,-42.7,-9.0,-41.5,-14.9,-39.0,-20.6,-35.0,-25.7,-29.5,-30.2,-22.9,-33.7,-15.6,-36.4,-7.5,-38.0,0.9,-38.5,9.1,-37.7,17.0,-35.9,24.4,-33.0,30.6,-29.3,35.7,-24.6,39.5,-19.4,41.8,-13.7,42.5,-7.8,41.5,-1.9,38.8,3.7,34.8,8.9,29.4,13.4,22.8,17.0,15.5,19.7,7.3,21.3,-1.0,21.8,-9.3,21.1"/>
                <positionsList name="rightRear"
                               data="-16.8,-35.9,-8.9,-37.6,-0.6,-38.2,7.5,-37.7,15.5,-36.1,22.8,-33.5,29.4,-29.7,34.7,-25.3,38.7,-20.2,41.1,-14.7,42.1,-8.8,41.4,-2.9,39.0,2.5,35.3,7.9,30.1,12.4,23.8,16.1,16.6,19.0,8.7,20.8,0.6,21.4,-7.7,20.9,-15.6,19.3,-22.9,16.7,-29.5,12.9,-34.7,8.4,-38.8,3.4,-41.3,-2.2,-42.3,-8.1,-41.5,-13.7,-39.2,-19.4,-35.4,-24.6,-30.2,-29.3,-23.9,-33.0"/>
                <positionsList name="centerRear"
                               data="-22.2,-17.3,-21.8,-20.3,-20.6,-23.1,-18.5,-26.0,-15.9,-28.3,-12.5,-30.3,-8.6,-31.9,-4.4,-32.6,-0.1,-33.0,4.2,-32.7,8.4,-31.9,12.2,-30.4,15.6,-28.4,18.3,-26.0,20.4,-23.4,21.6,-20.4,22.1,-17.3,21.7,-14.3,20.4,-11.4,18.5,-8.5,15.7,-6.2,12.4,-4.3,8.5,-2.7,4.4,-1.9,-0.1,-1.5,-4.3,-1.9,-8.6,-2.6,-12.4,-4.2,-15.7,-6.2,-18.5,-8.5,-20.6,-11.1,-21.8,-14.2"/>
                <positionsList name="centerFront"
                               data="-75.7,1.6,-74.3,-8.8,-70.0,-18.9,-63.1,-28.2,-53.6,-36.3,-42.3,-42.9,-29.2,-47.9,-14.9,-50.9,-0.1,-52.1,14.5,-51.0,28.8,-48.1,41.8,-43.2,53.4,-36.3,62.8,-28.3,69.9,-19.1,74.1,-9.0,75.5,1.4,74.1,12.0,69.9,21.8,62.8,31.2,53.6,39.3,42.1,45.9,28.9,51.0,14.8,53.9,0.0,55.0,-14.8,54.1,-28.9,51.0,-42.0,46.1,-53.6,39.5,-63.0,31.3,-70.0,22.1,-74.3,12.0"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship2_Emed">
                    <salvo laser="leftRear,rightRear"/>
                </stage>
                <stage id="3" resKey="ship2_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFront,rightFront"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Leonov Model-->
            <expansion class="3">
                <positionsList name="standard"
                               data="-19.3,-1.5,-18.9,-4.2,-17.8,-6.7,-15.9,-9.1,-13.6,-11.1,-10.8,-12.8,-7.3,-14.1,-3.7,-14.9,0.1,-15.2,3.7,-14.9,7.3,-14.1,10.6,-12.8,13.5,-11.1,15.8,-9.1,17.8,-6.7,18.9,-4.2,19.2,-1.5,18.9,1.1,17.7,3.7,15.9,6.0,13.5,8.2,10.6,9.8,7.3,11.0,3.7,11.8,-0.1,12.0,-3.7,11.8,-7.3,11.0,-10.8,9.8,-13.7,8.1,-16.0,6.0,-17.9,3.7,-18.9,1.1"/>
                <positionsList name="left"
                               data="-46.4,16.5,-50.6,9.8,-53.1,2.6,-53.5,-4.8,-51.9,-12.2,-48.0,-19.1,-42.5,-25.4,-35.4,-30.9,-27.1,-35.3,-17.5,-38.4,-7.3,-40.0,3.2,-40.3,13.6,-39.2,23.3,-36.4,32.3,-32.7,39.9,-27.6,46.2,-21.6,50.5,-14.9,52.9,-7.6,53.3,-0.3,51.7,7.1,47.8,14.0,42.4,20.3,35.4,25.8,26.9,30.2,17.3,33.3,7.1,34.9,-3.4,35.2,-13.6,34.1,-23.5,31.3,-32.4,27.5,-40.1,22.5"/>
                <positionsList name="right"
                               data="-46.4,-21.6,-40.1,-27.6,-32.4,-32.7,-23.5,-36.5,-13.6,-39.2,-3.2,-40.4,7.2,-40.1,17.5,-38.4,27.0,-35.2,35.4,-30.9,42.6,-25.4,48.1,-19.1,51.7,-12.2,53.4,-4.8,52.8,2.6,50.6,9.9,46.1,16.6,39.9,22.5,32.2,27.7,23.3,31.6,13.4,34.1,3.1,35.2,-7.3,35.0,-17.7,33.3,-27.1,30.2,-35.7,25.8,-42.8,20.3,-48.3,14.0,-51.9,7.1,-53.6,-0.3,-53.0,-7.8,-50.8,-14.9"/>
                <positionsList name="centerRear"
                               data="-29.6,-14.9,-29.0,-19.1,-27.4,-22.9,-24.6,-26.5,-20.9,-29.6,-16.4,-32.3,-11.4,-34.2,-5.9,-35.3,-0.1,-35.9,5.7,-35.3,11.2,-34.2,16.2,-32.3,20.7,-29.6,24.4,-26.5,27.2,-22.9,28.8,-19.1,29.4,-14.9,28.7,-10.9,27.2,-7.0,24.4,-3.4,20.8,-0.3,16.2,2.3,11.2,4.3,5.7,5.4,-0.1,6.0,-5.9,5.4,-11.4,4.3,-16.4,2.4,-20.8,-0.3,-24.6,-3.4,-27.4,-7.0,-29.0,-10.8"/>
                <positionsList name="centerFront"
                               data="-98.8,-0.6,-96.8,-14.2,-91.3,-27.3,-82.2,-39.5,-69.8,-49.9,-54.9,-58.8,-37.9,-65.1,-19.5,-69.1,-0.2,-70.4,18.9,-69.2,37.4,-65.2,54.5,-58.8,69.4,-50.2,81.7,-39.5,90.8,-27.6,96.6,-14.4,98.5,-0.9,96.5,12.8,91.1,25.8,82.0,38.0,69.6,48.4,54.7,57.2,37.7,63.6,19.2,67.6,0.1,69.0,-19.1,67.7,-37.7,63.8,-54.7,57.2,-69.5,48.7,-81.9,38.1,-91.0,26.1,-96.6,12.9"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship3_Emed">
                    <salvo laser="left,right"/>
                </stage>
                <stage id="3" resKey="ship3_Emax">
                    <salvo laser="left,right"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="left,right"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Defcom Model-->
            <expansion class="4">
                <positionsList name="standard"
                               data="-14.4,-1.1,-14.1,-3.1,-13.3,-5.0,-11.8,-6.8,-10.2,-8.3,-8.0,-9.5,-5.5,-10.5,-2.8,-11.1,0.1,-11.3,2.8,-11.1,5.4,-10.5,7.9,-9.5,10.0,-8.3,11.8,-6.8,13.2,-5.0,14.1,-3.1,14.3,-1.1,14.1,0.8,13.2,2.8,11.8,4.5,10.0,6.1,7.9,7.3,5.4,8.2,2.8,8.8,-0.1,9.0,-2.8,8.8,-5.5,8.2,-8.0,7.3,-10.2,6.1,-12.0,4.5,-13.3,2.8,-14.1,0.8"/>
                <positionsList name="left"
                               data="-33.8,27.1,-39.1,22.1,-43.0,16.4,-45.3,10.2,-45.7,3.9,-44.5,-2.5,-41.6,-8.5,-37.1,-13.8,-31.1,-18.8,-23.9,-22.5,-15.9,-25.3,-7.2,-26.8,1.8,-27.2,10.6,-26.4,19.1,-24.3,26.9,-21.0,33.6,-16.9,39.0,-11.8,42.9,-6.0,45.1,0.2,45.7,6.5,44.5,12.7,41.4,18.7,36.9,24.2,31.0,28.9,23.8,32.8,15.8,35.5,7.1,37.2,-1.9,37.6,-10.8,36.5,-19.2,34.5,-27.0,31.4"/>
                <positionsList name="right"
                               data="-33.7,-16.8,-27.0,-21.0,-19.2,-24.3,-10.8,-26.4,-1.9,-27.2,7.0,-26.8,15.7,-25.3,23.8,-22.5,31.0,-18.8,36.9,-14.0,41.4,-8.5,44.3,-2.5,45.6,3.8,45.1,10.2,42.9,16.4,39.0,21.9,33.6,27.1,26.9,31.3,19.2,34.5,10.6,36.5,1.8,37.6,-7.1,37.2,-15.9,35.5,-23.9,32.8,-31.1,28.9,-37.1,24.2,-41.6,18.7,-44.5,12.7,-45.8,6.5,-45.3,0.2,-43.0,-6.0,-39.1,-11.8"/>
                <positionsList name="centerRear"
                               data="-11.4,-14.2,-11.2,-15.9,-10.6,-17.3,-9.5,-18.8,-8.1,-20.0,-6.4,-21.0,-4.4,-21.6,-2.3,-22.1,-0.1,-22.3,2.2,-22.0,4.2,-21.6,6.3,-21.0,7.9,-20.0,9.4,-18.8,10.4,-17.3,11.0,-15.9,11.2,-14.2,11.0,-12.6,10.4,-11.2,9.4,-9.7,7.9,-8.5,6.3,-7.5,4.2,-6.8,2.2,-6.4,-0.1,-6.2,-2.3,-6.4,-4.4,-6.8,-6.4,-7.5,-8.1,-8.5,-9.5,-9.7,-10.6,-11.2,-11.3,-12.6"/>
                <positionsList name="centerFront"
                               data="-44.7,-3.8,-43.9,-9.9,-41.2,-15.9,-37.2,-21.3,-31.7,-26.2,-24.9,-30.1,-17.1,-32.9,-8.9,-34.8,-0.1,-35.4,8.6,-34.8,16.9,-33.0,24.6,-30.1,31.4,-26.2,36.9,-21.4,41.0,-16.1,43.7,-10.1,44.5,-4.0,43.7,2.2,41.2,8.1,37.1,13.5,31.6,18.4,24.8,22.4,17.0,25.2,8.8,27.1,0.1,27.7,-8.7,27.1,-17.0,25.3,-24.7,22.4,-31.5,18.4,-37.1,13.7,-41.2,8.4,-43.8,2.4"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship4_Emed">
                    <salvo laser="left,right"/>
                </stage>
                <stage id="3" resKey="ship4_Emax">
                    <salvo laser="left,right"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="left,right"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Liberator Model-->
            <expansion class="5">
                <positionsList name="standard"
                               data="-30.7,-6.5,-29.4,-10.8,-27.1,-14.6,-23.7,-18.3,-19.4,-21.3,-14.4,-23.5,-8.8,-25.1,-2.7,-26.0,3.3,-26.0,9.1,-25.0,14.7,-23.3,19.8,-21.0,24.1,-18.0,27.2,-14.3,29.5,-10.4,30.8,-6.3,30.8,-2.0,29.6,2.2,27.1,6.2,23.8,9.7,19.4,12.7,14.3,15.1,8.8,16.7,2.9,17.5,-3.2,17.5,-9.1,16.7,-14.7,15.0,-19.7,12.5,-23.9,9.5,-27.4,6.0,-29.6,2.0,-30.7,-2.3"/>
                <positionsList name="left"
                               data="-58.6,23.2,-63.1,14.7,-65.3,5.7,-64.8,-3.3,-62.1,-12.1,-56.8,-20.3,-49.3,-27.8,-40.1,-34.1,-29.3,-38.8,-17.3,-42.1,-4.6,-43.6,8.2,-43.3,20.7,-41.3,32.4,-37.6,42.8,-32.4,51.7,-25.8,58.4,-18.1,62.9,-9.6,65.1,-0.8,64.7,8.4,61.9,17.2,56.7,25.4,49.2,32.9,39.9,39.2,29.2,43.9,17.2,47.2,4.4,48.7,-8.3,48.4,-20.8,46.4,-32.6,42.7,-42.8,37.4,-51.8,30.9"/>
                <positionsList name="right"
                               data="-58.6,-17.8,-51.8,-25.6,-43.1,-32.1,-32.8,-37.3,-21.1,-41.1,-8.7,-43.1,4.2,-43.6,16.7,-42.1,28.7,-38.8,39.7,-34.1,48.9,-27.8,56.4,-20.6,61.7,-12.3,64.6,-3.6,65.0,5.6,62.9,14.4,58.4,22.9,51.7,30.7,42.9,37.2,32.6,42.4,20.9,46.2,8.4,48.4,-4.3,48.7,-16.8,47.2,-28.8,43.9,-39.8,39.2,-49.1,32.9,-56.6,25.7,-61.8,17.4,-64.8,8.6,-65.1,-0.3,-63.1,-9.3"/>
                <positionsList name="centerRear"
                               data="-7.8,-11.3,-7.6,-12.3,-7.1,-13.3,-6.3,-14.3,-5.6,-15.1,-4.3,-15.8,-3.1,-16.3,-1.6,-16.6,-0.1,-16.8,1.4,-16.6,2.9,-16.3,4.2,-15.8,5.4,-15.1,6.4,-14.3,6.9,-13.3,7.4,-12.3,7.7,-11.3,7.4,-10.3,6.9,-9.3,6.3,-8.3,5.3,-7.4,4.2,-6.8,2.9,-6.3,1.4,-6.1,-0.1,-5.8,-1.6,-6.1,-3.1,-6.3,-4.3,-6.8,-5.5,-7.4,-6.4,-8.3,-7.1,-9.3,-7.6,-10.3"/>
                <positionsList name="centerFront"
                               data="-44.3,-2.8,-43.6,-8.8,-41.1,-14.8,-36.9,-20.1,-31.5,-24.9,-24.8,-28.8,-17.1,-31.8,-8.8,-33.6,-0.3,-34.1,8.4,-33.6,16.7,-31.8,24.3,-28.9,31.2,-25.1,36.7,-20.3,40.7,-14.8,43.2,-9.1,44.2,-3.1,43.4,3.2,40.9,8.9,36.7,14.4,31.4,19.2,24.7,23.2,16.9,25.9,8.7,27.9,0.2,28.4,-8.6,27.9,-16.8,26.2,-24.6,23.2,-31.3,19.4,-36.8,14.7,-40.8,9.2,-43.3,3.4"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship5_Emed">
                    <salvo laser="left,right"/>
                </stage>
                <stage id="3" resKey="ship5_Emax">
                    <salvo laser="left,right"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="left,right"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>


            <!--    Expansions for ships compatible with  Model-->
            <expansion class="6">
                <positionsList name="standard"
                               data="-11.6,0.2,-11.4,-1.4,-10.7,-3.0,-9.6,-4.4,-8.1,-5.6,-6.4,-6.7,-4.5,-7.4,-2.3,-7.9,0.1,-8.1,2.2,-7.8,4.5,-7.4,6.5,-6.7,8.2,-5.6,9.7,-4.4,10.7,-3.0,11.4,-1.4,11.6,0.2,11.4,1.8,10.8,3.2,9.7,4.6,8.2,6.0,6.5,6.9,4.4,7.8,2.3,8.2,0.1,8.3,-2.2,8.3,-4.4,7.8,-6.4,6.9,-8.2,6.0,-9.7,4.8,-10.5,3.2,-11.4,1.8"/>

                <positionsList name="leftFront"
                               data="-48.2,-4.9,-49.3,-11.6,-48.6,-18.5,-46.1,-25.0,-41.7,-31.1,-35.7,-36.4,-28.4,-41.0,-20.0,-44.3,-10.8,-46.4,-1.2,-47.2,8.4,-46.7,17.6,-44.9,26.3,-41.8,34.0,-37.5,40.2,-32.5,45.0,-26.5,48.0,-19.9,49.1,-13.2,48.4,-6.3,45.9,0.2,41.5,6.4,35.6,11.7,28.2,16.2,19.7,19.5,10.7,21.6,1.1,22.5,-8.6,22.0,-17.9,20.1,-26.5,17.0,-34.1,12.8,-40.4,7.7,-45.2,1.8"/>
                <positionsList name="rightFront"
                               data="-48.2,-19.8,-45.2,-26.5,-40.4,-32.3,-34.1,-37.5,-26.5,-41.7,-18.0,-44.9,-8.6,-46.7,1.1,-47.2,10.6,-46.4,19.7,-44.2,28.2,-41.0,35.6,-36.4,41.5,-31.1,45.8,-25.0,48.4,-18.5,49.1,-11.6,48.0,-4.9,45.0,1.8,40.3,7.6,34.0,12.8,26.4,17.0,17.8,20.1,8.4,22.0,-1.2,22.5,-10.8,21.7,-19.9,19.5,-28.4,16.3,-35.7,11.7,-41.7,6.4,-46.1,0.2,-48.6,-6.3,-49.3,-13.2"/>
                <positionsList name="leftRear"
                               data="-16.7,3.6,-21.0,1.1,-24.5,-2.1,-27.2,-5.8,-28.7,-9.6,-29.1,-13.6,-28.4,-17.5,-26.5,-21.4,-23.8,-24.9,-20.1,-27.9,-15.7,-30.5,-10.6,-32.3,-5.1,-33.4,0.6,-33.6,6.1,-33.2,11.6,-32.0,16.5,-30.0,20.9,-27.4,24.5,-24.2,27.1,-20.5,28.4,-16.6,28.9,-12.7,28.3,-8.7,26.4,-4.9,23.6,-1.4,19.9,1.8,15.5,4.1,10.5,5.9,5.0,7.1,-0.8,7.3,-6.3,6.8,-11.8,5.7"/>
                <positionsList name="rightRear"
                               data="-16.7,-30.4,-11.8,-32.3,-6.3,-33.6,-0.5,-34.1,5.2,-33.6,10.7,-32.5,15.9,-30.7,20.4,-28.1,24.1,-25.0,26.8,-21.4,28.7,-17.5,29.3,-13.5,28.9,-9.5,27.3,-5.6,24.5,-1.9,21.1,1.3,16.6,3.9,11.6,5.9,6.1,7.1,0.4,7.5,-5.4,7.3,-10.9,6.2,-16.1,4.3,-20.6,1.8,-24.2,-1.4,-27.1,-5.0,-28.8,-8.8,-29.5,-12.9,-29.0,-17.1,-27.5,-21.0,-24.8,-24.5,-21.2,-27.7"/>
                <positionsList name="centerRear"
                               data="-5.3,-18.9,-5.1,-19.6,-4.9,-20.3,-4.5,-21.0,-3.8,-21.4,-3.1,-21.9,-2.1,-22.4,-1.0,-22.6,-0.1,-22.6,0.9,-22.6,2.0,-22.4,2.7,-22.0,3.6,-21.4,4.3,-21.0,4.7,-20.3,5.0,-19.6,5.2,-18.9,5.0,-18.2,4.7,-17.5,4.3,-16.8,3.6,-16.4,2.9,-15.9,2.0,-15.5,0.9,-15.3,-0.1,-15.2,-1.0,-15.2,-2.0,-15.5,-2.9,-15.9,-3.8,-16.4,-4.5,-16.8,-4.9,-17.5,-5.1,-18.2"/>
                <positionsList name="centerFront"
                               data="-102.9,-10.6,-100.9,-24.7,-95.1,-38.5,-85.6,-51.0,-72.9,-62.0,-57.4,-71.1,-39.6,-77.9,-20.3,-81.9,-0.2,-83.4,19.8,-82.0,39.1,-77.9,57.0,-71.1,72.6,-62.2,85.2,-51.1,94.8,-38.6,100.7,-24.9,102.6,-10.7,100.8,3.4,95.0,17.1,85.5,29.6,72.8,40.7,57.2,49.9,39.5,56.5,20.2,60.7,0.1,62.0,-20.1,60.7,-39.2,56.5,-57.1,49.9,-72.8,40.9,-85.4,29.8,-95.1,17.2,-100.8,3.6"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship6_Emed">
                    <salvo laser="leftRear,rightRear"/>
                </stage>
                <stage id="3" resKey="ship6_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFront,rightFront"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with Nostromo Model-->
            <expansion class="7">
                <positionsList name="standard"
                               data="-68.2,-0.2,-66.9,-9.7,-63.0,-18.7,-56.5,-27.1,-48.2,-34.4,-37.8,-40.4,-26.0,-44.8,-13.1,-47.6,0.2,-48.5,13.5,-47.5,26.4,-44.8,38.1,-40.3,48.6,-34.3,57.0,-26.9,63.1,-18.6,67.0,-9.5,68.3,-0.1,67.2,9.2,63.1,18.4,56.8,26.7,48.2,34.1,37.9,40.1,26.1,44.5,13.3,47.3,0.0,48.1,-13.4,47.3,-26.1,44.4,-37.8,39.9,-48.3,33.9,-56.5,26.5,-63.0,18.3,-66.9,9.2"/>

                <positionsList name="rightFront"
                               data="-52.3,-8.3,-48.8,-15.4,-43.7,-21.8,-36.7,-27.4,-28.2,-31.9,-18.8,-35.2,-8.5,-37.1,1.9,-37.5,12.3,-36.5,22.3,-34.2,31.4,-30.3,39.2,-25.4,45.7,-19.4,50.3,-12.8,53.0,-5.6,53.6,1.8,52.1,9.2,48.8,16.2,43.4,22.7,36.5,28.3,28.1,32.8,18.6,36.1,8.5,37.9,-2.1,38.4,-12.4,37.4,-22.4,35.0,-31.5,31.2,-39.4,26.3,-45.7,20.3,-50.4,13.7,-53.1,6.5,-53.7,-0.9"/>
                <positionsList name="centerRear"
                               data="0.3,-21.0,0.3,-21.0,0.3,-21.0,0.2,-20.9,0.1,-20.8,0.1,-20.8,0.1,-20.8,-0.1,-20.8,-0.1,-20.8,-0.1,-20.8,-0.3,-20.8,-0.3,-20.8,-0.3,-20.8,-0.4,-20.9,-0.5,-21.0,-0.5,-21.0,-0.5,-21.0,-0.5,-21.1,-0.5,-21.2,-0.3,-21.2,-0.3,-21.2,-0.3,-21.2,-0.3,-21.3,-0.2,-21.3,-0.1,-21.2,-0.0,-21.3,0.1,-21.2,0.1,-21.2,0.1,-21.2,0.3,-21.2,0.3,-21.2,0.3,-21.1"/>
                <positionsList name="centerFront"
                               data="-85.8,-1.7,-84.1,-13.6,-79.2,-24.9,-71.4,-35.4,-60.7,-44.7,-47.8,-52.3,-33.0,-57.8,-16.9,-61.3,-0.3,-62.5,16.6,-61.3,32.6,-57.8,47.4,-52.3,60.4,-44.7,71.0,-35.6,79.1,-25.1,84.0,-13.8,85.6,-1.9,83.9,9.9,79.1,21.3,71.3,31.8,60.6,41.1,47.6,48.5,32.8,54.2,16.8,57.5,0.1,58.7,-16.7,57.7,-32.8,54.2,-47.6,48.7,-60.5,41.1,-71.3,31.9,-79.2,21.5,-84.1,10.0"/>
                <positionsList name="leftFront"
                               data="-52.3,9.2,-53.7,1.8,-53.1,-5.6,-50.4,-12.8,-45.7,-19.6,-39.4,-25.5,-31.5,-30.3,-22.3,-34.1,-12.5,-36.5,-2.0,-37.5,8.6,-37.1,18.6,-35.2,28.1,-31.9,36.5,-27.4,43.5,-21.8,48.8,-15.3,52.1,-8.3,53.6,-0.9,53.0,6.5,50.3,13.7,45.6,20.4,39.2,26.3,31.4,31.2,22.2,35.0,12.3,37.4,1.8,38.4,-8.7,38.0,-18.9,36.1,-28.2,32.8,-36.7,28.3,-43.6,22.7,-49.0,16.2"/>
                <positionsList name="leftRear"
                               data="9.6,21.5,2.8,22.4,-4.2,22.1,-10.9,21.1,-17.3,19.2,-22.9,16.4,-27.8,12.9,-31.5,8.8,-34.2,4.3,-35.4,-0.7,-35.3,-5.6,-33.8,-10.3,-31.1,-14.9,-27.1,-18.8,-22.1,-22.3,-16.3,-24.9,-9.7,-26.8,-3.0,-27.6,4.0,-27.6,10.8,-26.6,17.2,-24.5,22.8,-21.8,27.7,-18.1,31.4,-14.0,34.0,-9.5,35.3,-4.8,35.1,0.2,33.6,5.1,30.9,9.5,26.9,13.5,21.9,17.0,16.2,19.7"/>
                <positionsList name="rightRear"
                               data="9.8,-26.8,16.2,-24.9,21.9,-22.3,27.0,-18.8,31.0,-14.9,33.6,-10.3,35.1,-5.6,35.3,-0.7,33.9,4.2,31.4,8.8,27.7,12.9,22.7,16.4,17.0,19.2,10.8,21.1,4.0,22.2,-3.0,22.3,-9.8,21.4,-16.3,19.5,-22.1,16.9,-27.0,13.5,-31.0,9.4,-33.8,4.9,-35.2,0.2,-35.4,-4.8,-34.1,-9.6,-31.5,-14.2,-27.8,-18.3,-22.9,-21.8,-17.2,-24.6,-10.8,-26.6,-4.0,-27.6,2.8,-27.6"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship7_Emed">
                    <salvo laser="leftRear,rightRear"/>
                </stage>
                <stage id="3" resKey="ship7_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFront,rightFront"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Vengeance Model-->
            <expansion class="8">
                <positionsList name="standard"
                               data="-68.7,0.1,-67.3,-9.3,-63.4,-18.5,-57.1,-26.8,-48.6,-34.3,-38.1,-40.3,-26.3,-44.8,-13.4,-47.5,-0.0,-48.4,13.4,-47.5,26.2,-44.8,38.1,-40.3,48.5,-34.2,57.0,-26.8,63.3,-18.4,67.2,-9.3,68.6,0.2,67.2,9.7,63.4,18.7,57.0,27.2,48.4,34.4,38.1,40.5,26.2,44.9,13.4,47.7,-0.1,48.7,-13.4,47.7,-26.3,44.9,-38.1,40.5,-48.6,34.4,-57.2,27.1,-63.4,18.7,-67.4,9.6"/>

                <positionsList name="rightFront"
                               data="-63.8,-10.6,-59.6,-19.1,-52.9,-27.1,-44.3,-33.8,-34.1,-39.1,-22.5,-43.1,-10.1,-45.3,2.9,-45.8,15.7,-44.6,27.7,-41.6,38.7,-36.8,48.4,-30.8,55.9,-23.6,61.7,-15.3,64.7,-6.6,65.4,2.5,63.6,11.6,59.4,20.2,52.7,27.9,44.2,34.7,33.9,40.2,22.3,44.1,9.9,46.4,-3.1,46.9,-15.7,45.6,-27.8,42.4,-38.8,37.9,-48.5,31.9,-56.1,24.4,-61.7,16.4,-64.9,7.4,-65.6,-1.6"/>
                <positionsList name="centerRear"
                               data="-20.3,-15.6,-20.1,-18.3,-18.8,-21.1,-16.9,-23.6,-14.3,-25.6,-11.4,-27.4,-7.8,-28.8,-4.1,-29.6,-0.1,-29.8,3.9,-29.6,7.7,-28.8,11.2,-27.3,14.2,-25.6,16.7,-23.6,18.7,-21.1,19.9,-18.3,20.2,-15.6,19.9,-12.8,18.7,-10.1,16.8,-7.5,14.2,-5.3,11.2,-3.6,7.7,-2.3,3.8,-1.4,-0.1,-1.1,-4.1,-1.4,-7.8,-2.3,-11.3,-3.6,-14.3,-5.3,-16.8,-7.6,-18.8,-10.1,-20.0,-12.6"/>
                <positionsList name="centerFront"
                               data="-98.1,-0.1,-96.3,-13.7,-90.6,-26.8,-81.6,-38.8,-69.4,-49.3,-54.6,-57.8,-37.6,-64.3,-19.3,-68.3,-0.2,-69.6,18.9,-68.3,37.4,-64.3,54.2,-58.1,69.2,-49.3,81.4,-38.8,90.4,-26.8,95.9,-13.9,97.9,-0.3,96.2,13.2,90.4,26.2,81.4,38.2,69.4,48.7,54.4,57.4,37.6,63.7,19.2,67.7,0.0,69.1,-19.1,67.7,-37.6,63.9,-54.3,57.4,-69.3,48.9,-81.6,38.4,-90.6,26.4,-96.1,13.4"/>
                <positionsList name="leftFront"
                               data="-63.8,11.7,-65.6,2.7,-65.0,-6.4,-61.8,-15.3,-56.3,-23.4,-48.6,-30.8,-39.1,-36.8,-28.1,-41.6,-15.8,-44.6,-3.1,-45.8,9.7,-45.3,22.2,-43.1,33.7,-39.3,44.2,-33.8,52.7,-27.1,59.3,-19.3,63.6,-10.6,65.4,-1.6,64.9,7.4,61.7,16.2,56.2,24.4,48.4,31.7,38.9,37.9,27.9,42.4,15.7,45.6,2.9,46.9,-9.8,46.4,-22.3,44.2,-33.9,40.3,-44.3,34.9,-52.8,28.2,-59.4,20.2"/>
                <positionsList name="leftRear"
                               data="-13.6,33.7,-23.1,31.2,-31.6,27.4,-39.0,22.6,-45.1,16.7,-49.1,10.2,-51.6,3.1,-51.8,-4.1,-50.1,-11.1,-46.6,-17.8,-41.2,-24.0,-34.3,-29.3,-26.1,-33.3,-16.8,-36.3,-6.8,-38.1,3.3,-38.3,13.4,-37.1,22.9,-34.6,31.4,-30.8,38.9,-25.8,44.8,-20.0,49.0,-13.4,51.3,-6.4,51.7,0.7,49.9,7.9,46.4,14.7,41.2,20.7,34.2,25.9,25.9,30.2,16.6,33.1,6.7,34.7,-3.3,34.9"/>
                <positionsList name="rightRear"
                               data="-13.6,-37.1,-3.4,-38.3,6.7,-38.1,16.7,-36.3,25.9,-33.3,34.1,-29.3,41.1,-24.0,46.4,-17.8,49.9,-11.1,51.7,-4.1,51.4,3.2,48.9,10.2,44.9,16.7,38.8,22.6,31.4,27.4,22.9,31.2,13.3,33.8,3.4,34.9,-6.8,34.7,-16.8,33.1,-26.1,30.2,-34.3,25.9,-41.1,20.7,-46.6,14.7,-50.1,7.9,-51.8,0.7,-51.5,-6.4,-49.2,-13.4,-44.9,-20.0,-39.1,-25.8,-31.6,-30.8,-23.1,-34.6"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship8_Emed">
                    <salvo laser="leftRear,rightRear"/>
                </stage>
                <stage id="3" resKey="ship8_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFront,rightFront"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Bigboy Model-->
            <expansion class="9">
                <positionsList name="standard"
                               data="-70.0,-5.0,-68.9,-14.6,-64.7,-24.0,-58.4,-32.5,-49.6,-40.0,-38.9,-46.3,-27.0,-50.8,-13.7,-53.8,0.0,-54.8,13.6,-53.8,26.8,-51.0,38.9,-46.3,49.6,-40.3,58.3,-32.8,64.8,-24.1,68.9,-14.8,70.2,-5.1,69.0,4.5,64.8,13.9,58.6,22.5,49.8,30.0,39.1,36.2,27.0,40.7,13.8,43.7,0.3,44.5,-13.6,43.7,-26.7,40.9,-38.7,36.2,-49.5,30.2,-58.2,22.6,-64.7,14.0,-68.7,4.7"/>

                <positionsList name="rightFront"
                               data="-59.8,-39.1,-49.1,-46.6,-36.5,-52.6,-22.4,-56.8,-7.6,-58.8,7.7,-58.8,22.4,-56.6,36.4,-52.6,48.9,-46.6,59.7,-39.1,68.2,-30.1,73.9,-20.1,76.9,-9.6,76.8,1.1,73.9,11.7,68.2,21.4,59.7,30.4,48.9,37.9,36.4,43.9,22.4,47.9,7.4,50.2,-7.7,50.1,-22.6,47.9,-36.6,43.9,-49.1,37.9,-59.8,30.4,-68.3,21.4,-74.1,11.4,-77.1,0.9,-77.1,-9.8,-74.1,-20.3,-68.3,-30.2"/>
                <positionsList name="centerRear"
                               data="-29.3,-25.1,-28.7,-29.1,-27.1,-33.1,-24.3,-36.6,-20.7,-39.8,-16.3,-42.3,-11.3,-44.3,-5.8,-45.3,-0.1,-45.8,5.7,-45.3,11.1,-44.3,16.2,-42.3,20.6,-39.8,24.2,-36.6,26.9,-33.1,28.5,-29.1,29.1,-25.1,28.4,-21.1,26.9,-17.3,24.1,-13.7,20.6,-10.5,16.2,-8.1,11.2,-6.1,5.6,-4.9,-0.1,-4.6,-5.8,-4.9,-11.3,-6.1,-16.3,-8.1,-20.6,-10.6,-24.3,-13.6,-27.1,-17.3,-28.6,-21.1"/>
                <positionsList name="leftRear"
                               data="3.2,36.2,-7.8,35.9,-18.7,34.1,-28.6,30.7,-37.6,26.2,-45.1,20.4,-50.8,13.7,-54.8,6.4,-56.5,-1.4,-56.0,-9.2,-53.3,-16.8,-48.8,-23.9,-42.3,-30.3,-34.1,-35.6,-24.7,-39.6,-14.3,-42.3,-3.3,-43.6,7.7,-43.3,18.4,-41.3,28.4,-38.1,37.4,-33.6,44.9,-27.8,50.7,-21.1,54.6,-13.8,56.3,-6.0,55.9,1.9,53.2,9.4,48.7,16.7,42.2,22.9,33.9,28.2,24.5,32.3,14.2,34.9"/>
                <positionsList name="leftFront"
                               data="-59.8,30.4,-68.2,21.5,-74.1,11.7,-77.1,1.1,-77.1,-9.6,-74.1,-20.1,-68.3,-30.1,-59.8,-39.1,-49.1,-46.6,-36.6,-52.6,-22.6,-56.6,-7.8,-58.8,7.4,-58.8,22.3,-56.6,36.4,-52.6,48.9,-46.6,59.7,-39.1,68.1,-30.1,73.9,-20.3,76.9,-9.8,76.9,0.9,73.9,11.4,68.2,21.4,59.7,30.4,48.9,37.9,36.4,43.9,22.4,47.9,7.6,50.1,-7.6,50.2,-22.4,48.0,-36.4,44.0,-49.1,37.9"/>
                <positionsList name="rightRear"
                               data="3.2,-43.6,14.0,-42.4,24.4,-39.8,33.9,-35.6,42.2,-30.3,48.7,-24.1,53.4,-16.8,55.9,-9.3,56.4,-1.3,54.7,6.4,50.9,13.7,45.2,20.4,37.7,26.2,28.7,30.9,18.7,34.2,7.9,35.9,-3.3,36.3,-14.2,35.1,-24.6,32.4,-34.1,28.4,-42.3,22.9,-48.8,16.7,-53.6,9.6,-56.1,1.9,-56.6,-5.8,-54.8,-13.6,-51.1,-21.1,-45.3,-27.8,-37.8,-33.6,-28.8,-38.1,-18.8,-41.4,-8.1,-43.3"/>
                <positionsList name="centerFront"
                               data="-97.6,-5.9,-95.6,-19.3,-90.1,-32.3,-81.1,-44.3,-69.1,-54.6,-54.3,-63.3,-37.6,-69.6,-19.3,-73.6,-0.3,-75.1,18.7,-73.6,37.1,-69.8,53.9,-63.3,68.7,-54.8,80.8,-44.4,89.9,-32.6,95.4,-19.6,97.4,-6.1,95.5,7.3,89.9,20.2,80.9,32.2,68.9,42.7,54.2,51.2,37.4,57.7,19.1,61.6,0.2,62.9,-18.9,61.6,-37.2,57.7,-54.1,51.4,-68.8,42.9,-81.1,32.4,-90.1,20.4,-95.6,7.7"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship9_Emed">
                    <salvo laser="leftRear,rightRear"/>
                </stage>
                <stage id="3" resKey="ship9_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFront,rightFront"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with normal Goliath Model-->
            <expansion class="10">
                <positionsList name="standard"
                               data="-1.0,-10.3,-0.7,-10.5,-0.8,-10.6,-0.4,-10.8,-0.4,-10.8,-0.2,-10.8,0.1,-10.8,0.1,-10.8,0.4,-10.8,0.6,-10.8,0.7,-10.6,0.8,-10.5,1.0,-10.3,1.1,-10.3,1.0,-10.1,1.1,-10.0,0.9,-9.8,0.8,-9.8,0.7,-9.6,0.6,-9.5,0.6,-9.5,0.2,-9.3,-0.0,-9.3,-0.2,-9.4,-0.2,-9.5,-0.4,-9.5,-0.6,-9.5,-0.7,-9.8,-0.9,-9.8,-0.9,-10.0,-1.0,-10.1,-0.9,-10.3"/>

                <positionsList name="rightFrontIn"
                               data="-73.2,-49.4,-61.1,-58.6,-46.6,-66.1,-30.3,-71.6,-12.8,-74.6,5.2,-75.1,22.9,-73.1,39.7,-68.6,55.2,-62.1,68.3,-53.4,78.8,-43.1,86.4,-31.6,90.7,-19.3,91.4,-6.6,88.7,5.9,82.4,17.9,73.1,28.7,60.9,38.2,46.4,45.4,30.2,50.9,12.7,53.9,-5.3,54.4,-23.1,52.4,-39.9,48.1,-55.3,41.4,-68.4,32.9,-79.0,22.6,-86.6,10.9,-90.8,-1.3,-91.6,-14.1,-88.8,-26.6,-82.6,-38.6"/>
                <positionsList name="centerFront"
                               data="-31.1,-10.8,-30.3,-15.1,-28.7,-19.2,-25.8,-23.1,-22.1,-26.3,-17.3,-29.1,-12.1,-31.1,-6.2,-32.4,-0.1,-32.8,5.9,-32.3,11.7,-31.1,16.9,-29.1,21.7,-26.4,25.7,-23.1,28.4,-19.3,30.2,-15.3,30.9,-11.1,30.2,-6.8,28.4,-2.6,25.7,1.2,21.9,4.4,17.2,7.2,11.9,9.2,6.1,10.4,-0.1,10.9,-6.0,10.6,-11.8,9.4,-17.2,7.4,-21.8,4.7,-25.8,1.3,-28.6,-2.6,-30.3,-6.6"/>
                <positionsList name="leftRearIn"
                               data="23.2,5.9,15.4,8.7,6.9,10.2,-1.6,10.7,-10.1,9.7,-18.3,7.8,-25.7,4.7,-32.1,0.7,-37.3,-4.1,-41.3,-9.6,-43.4,-15.5,-44.1,-21.6,-42.8,-27.6,-40.1,-33.3,-35.8,-38.6,-30.1,-43.3,-23.3,-46.9,-15.6,-49.6,-7.2,-51.2,1.4,-51.6,9.9,-50.8,18.2,-48.8,25.6,-45.8,32.1,-41.8,37.2,-36.9,41.1,-31.4,43.3,-25.5,43.8,-19.4,42.7,-13.3,39.9,-7.6,35.7,-2.3,29.9,2.2"/>
                <positionsList name="rightRearOut"
                               data="-17.8,-37.6,-11.5,-39.7,-4.8,-40.8,2.2,-41.1,9.2,-40.1,15.7,-38.3,21.7,-35.8,26.7,-32.3,30.7,-28.4,33.6,-23.9,35.2,-19.1,35.4,-14.3,34.2,-9.3,31.7,-4.8,28.2,-0.6,23.4,2.9,17.7,5.9,11.4,7.9,4.5,9.1,-2.3,9.2,-9.3,8.4,-15.8,6.7,-21.7,4.1,-26.8,0.7,-30.8,-3.3,-33.8,-7.8,-35.3,-12.6,-35.6,-17.6,-34.3,-22.3,-31.8,-27.1,-28.3,-31.2,-23.6,-34.8"/>
                <positionsList name="rightFrontOut"
                               data="-64.3,-55.8,-50.6,-63.8,-34.8,-69.8,-17.7,-73.4,0.2,-74.6,17.9,-73.3,34.9,-69.6,50.7,-63.6,64.4,-55.6,75.9,-45.8,84.2,-34.7,89.4,-22.6,91.1,-10.1,89.3,2.6,84.2,14.7,75.6,25.8,64.2,35.6,50.4,43.7,34.7,49.4,17.4,53.2,-0.3,54.4,-18.1,53.2,-35.1,49.4,-50.8,43.4,-64.6,35.4,-76.1,25.6,-84.3,14.4,-89.5,2.3,-91.3,-10.3,-89.3,-22.8,-84.2,-34.9,-75.8,-46.1"/>
                <positionsList name="leftFrontIn"
                               data="-73.2,28.5,-82.6,17.7,-88.6,5.7,-91.3,-6.8,-90.6,-19.6,-86.3,-31.8,-78.8,-43.3,-68.1,-53.6,-54.8,-62.1,-39.6,-68.6,-22.8,-73.1,-5.1,-74.8,12.9,-74.3,30.2,-71.3,46.4,-66.1,60.9,-58.6,73.0,-49.1,82.4,-38.3,88.4,-26.3,91.2,-13.8,90.4,-1.1,86.2,11.2,78.7,22.7,67.9,32.9,54.7,41.4,39.4,47.9,22.7,52.4,4.9,54.2,-13.1,53.7,-30.3,50.7,-46.6,45.4,-61.1,37.9"/>
                <positionsList name="leftFrontOut"
                               data="-64.3,35.2,-75.6,25.4,-84.1,14.4,-89.2,2.4,-90.9,-10.2,-89.1,-22.8,-83.8,-34.8,-75.6,-45.8,-64.3,-55.6,-50.5,-63.6,-34.8,-69.6,-17.7,-73.1,-0.1,-74.3,17.7,-73.1,34.7,-69.6,50.4,-63.6,64.2,-55.6,75.4,-45.8,83.8,-34.6,88.9,-22.6,90.7,-10.1,88.9,2.4,83.7,14.4,75.4,25.7,64.1,35.4,50.3,43.4,34.7,49.2,17.7,52.9,-0.1,54.2,-17.8,52.9,-34.8,49.2,-50.6,43.2"/>
                <positionsList name="leftRearOut"
                               data="-17.9,5.6,-23.3,2.7,-28.1,-0.8,-31.6,-5.1,-34.1,-9.6,-35.1,-14.3,-34.8,-19.3,-33.1,-24.1,-30.3,-28.3,-26.1,-32.3,-21.1,-35.6,-15.3,-38.1,-8.8,-39.8,-2.1,-40.6,4.9,-40.3,11.4,-39.3,17.7,-37.1,23.2,-34.3,27.9,-30.8,31.4,-26.6,33.9,-22.1,34.9,-17.3,34.7,-12.3,32.9,-7.6,30.2,-3.3,26.2,0.7,20.9,3.9,15.2,6.4,8.7,8.2,1.9,8.9,-4.9,8.7,-11.6,7.7"/>
                <positionsList name="rightRearIn"
                               data="23.2,-47.3,30.2,-43.6,35.8,-38.9,40.2,-33.6,43.1,-27.8,44.2,-21.8,43.7,-15.6,41.4,-9.6,37.7,-4.1,32.5,0.8,25.9,4.9,18.4,7.9,10.2,9.9,1.6,10.9,-7.1,10.4,-15.6,8.9,-23.3,6.2,-30.2,2.5,-36.1,-2.1,-40.4,-7.4,-43.1,-13.3,-44.3,-19.3,-43.8,-25.6,-41.7,-31.4,-37.8,-37.1,-32.6,-41.8,-26.1,-45.9,-18.6,-49.1,-10.3,-51.1,-1.8,-51.8,6.9,-51.6,15.3,-49.9"/>
                <positionsList name="centerRear"
                               data="-4.6,-20.8,-4.6,-21.6,-4.3,-22.1,-3.8,-22.6,-3.3,-23.1,-2.6,-23.6,-1.8,-23.8,-1.1,-24.1,-0.1,-24.1,0.7,-24.1,1.7,-23.8,2.4,-23.6,3.0,-23.1,3.6,-22.7,4.0,-22.1,4.4,-21.6,4.4,-20.8,4.4,-20.3,4.1,-19.8,3.7,-19.1,3.1,-18.6,2.4,-18.3,1.7,-18.1,0.9,-17.8,-0.1,-17.8,-0.8,-17.8,-1.8,-17.9,-2.6,-18.3,-3.2,-18.6,-3.8,-19.1,-4.2,-19.6,-4.4,-20.3"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship10_Emed">
                    <salvo laser="leftRearIn,rightRearIn"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="centerFront"/>
                </stage>
                <stage id="3" resKey="ship10_Emax">
                    <salvo laser="leftRearIn,rightRearIn"/>
                    <salvo laser="leftFrontIn,rightFrontIn,centerRear"/>
                    <salvo laser="leftFrontOut,rightFrontOut"/>
                    <salvo laser="leftRearOut,rightRearOut,centerFront"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with updated Goliath models (Jade [19], Sapphire[54] and Amber[52])-->

            <expansion class="19">
                <positionsList name="leftRearInner"
                               data="12.2,15.3,8.1,16.6,4.0,18.0,0.0,18.0,-4.5,18.0,-8.5,17.1,-12.6,15.8,-15.8,13.5,-18.9,11.2,-20.7,8.5,-22.0,5.8,-22.5,2.7,-22.0,-0.5,-21.1,-3.2,-18.9,-6.3,-16.2,-8.5,-13.0,-10.4,-9.0,-12.2,-5.0,-13.0,-0.5,-13.0,3.6,-13.0,7.7,-12.2,11.7,-10.8,14.9,-8.5,18.0,-6.3,19.8,-3.6,21.2,-0.9,21.6,2.2,21.2,5.4,20.2,8.1,18.0,10.8,15.3,13.5"/>
                <positionsList name="rightRearInner"
                               data="12.2,-10.4,15.8,-8.1,18.5,-5.9,20.2,-3.2,21.2,0.0,21.6,2.7,21.2,5.8,19.8,9.0,17.6,11.7,14.9,14.0,11.2,15.8,7.2,17.1,3.2,18.0,-0.9,18.0,-5.4,17.5,-9.5,16.6,-13.0,15.3,-16.6,13.0,-19.3,10.8,-21.1,8.1,-22.0,5.0,-22.5,1.8,-22.0,-0.9,-20.7,-4.0,-18.5,-6.8,-15.8,-9.0,-12.1,-10.8,-8.1,-12.2,-4.0,-13.0,0.0,-13.0,4.5,-12.6,8.5,-11.7"/>
                <positionsList name="centerRear"
                               data="-4.5,14.0,-4.5,13.5,-4.0,13.0,-3.6,12.1,-3.1,11.7,-2.7,11.7,-1.8,11.2,-1.3,11.2,-0.5,11.2,0.5,11.2,0.9,11.2,1.8,11.7,2.2,12.1,2.7,12.1,3.2,13.0,3.6,13.5,3.6,14.0,3.6,14.4,3.2,14.8,3.2,15.8,2.2,15.8,1.8,16.2,0.9,16.6,0.5,16.6,-0.5,16.6,-1.3,16.6,-1.8,16.6,-2.7,16.2,-3.1,16.2,-3.6,15.8,-4.0,14.8,-4.5,14.4"/>
                <positionsList name="leftFrontOuter"
                               data="-65.7,43.7,-75.2,33.8,-81.9,23.0,-85.5,11.2,-85.5,-0.5,-82.3,-12.2,-76.0,-23.4,-67.0,-33.3,-55.4,-41.4,-41.4,-48.2,-26.1,-53.1,-9.9,-55.4,7.2,-55.4,23.4,-53.6,39.2,-49.1,53.1,-42.3,64.8,-34.2,74.7,-24.3,81.0,-13.5,84.6,-1.8,84.6,9.9,81.5,21.6,75.6,32.8,66.2,42.8,54.5,50.8,40.5,57.6,25.2,62.6,9.0,64.8,-7.6,64.8,-24.3,62.6,-40.0,58.5,-54.0,51.8"/>
                <positionsList name="rightFrontOuter"
                               data="-66.2,-34.2,-54.4,-42.8,-40.0,-49.1,-24.8,-53.6,-8.1,-55.8,8.5,-55.8,25.2,-53.1,40.5,-48.6,54.5,-41.9,66.6,-33.3,75.6,-23.4,81.9,-12.6,85.1,-0.9,85.1,11.2,81.5,23.0,74.7,33.8,65.2,43.7,53.6,52.2,39.2,58.5,23.8,63.0,7.2,65.2,-9.5,65.2,-26.1,62.6,-41.4,58.1,-55.4,51.3,-67.0,42.8,-76.5,32.8,-82.8,21.6,-86.0,10.3,-86.0,-1.8,-82.3,-13.5,-75.6,-24.3"/>
                <positionsList name="rightRearOuter"
                               data="36.9,-20.2,41.8,-14.9,45.0,-9.0,46.8,-2.2,46.3,4.0,44.1,10.8,40.5,16.6,35.1,22.0,28.3,26.5,20.7,29.7,12.2,32.4,3.2,33.3,-6.3,33.3,-15.3,31.5,-23.8,29.2,-31.5,25.2,-37.8,20.7,-42.8,14.8,-45.9,9.0,-47.2,2.2,-47.2,-4.0,-45.0,-10.4,-41.4,-16.7,-36.0,-21.6,-29.2,-26.1,-21.6,-29.7,-13.0,-32.0,-3.6,-33.3,5.4,-32.9,14.4,-31.5,23.0,-28.8,30.6,-25.2"/>
                <positionsList name="leftRearOuter"
                               data="36.9,20.7,30.6,25.2,23.0,29.2,14.4,31.9,5.4,33.3,-3.6,33.3,-13.0,32.4,-21.6,30.2,-29.2,26.5,-36.0,22.0,-41.4,16.6,-45.5,10.8,-47.2,4.0,-47.7,-2.2,-45.9,-8.5,-42.8,-14.9,-37.8,-20.7,-31.5,-25.2,-23.8,-29.2,-15.3,-31.5,-6.3,-33.3,2.7,-33.3,12.2,-32.4,20.7,-29.7,28.3,-26.5,35.1,-22.0,40.5,-16.7,44.6,-10.4,46.3,-4.0,46.8,2.2,45.0,9.0,41.8,14.8"/>
                <positionsList name="standard"
                               data="-4.5,14.0,-4.5,13.5,-4.0,13.0,-3.6,12.1,-3.1,11.7,-2.7,11.7,-1.8,11.2,-1.3,11.2,-0.5,11.2,0.5,11.2,0.9,11.2,1.8,11.7,2.2,12.1,2.7,12.1,3.2,13.0,3.6,13.5,3.6,14.0,3.6,14.4,3.2,14.8,3.2,15.8,2.2,15.8,1.8,16.2,0.9,16.6,0.5,16.6,-0.5,16.6,-1.3,16.6,-1.8,16.6,-2.7,16.2,-3.1,16.2,-3.6,15.8,-4.0,14.8,-4.5,14.4"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship19_Emed">
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                    <salvo laser="standard"/>
                </stage>
                <stage id="3" resKey="ship19_Emax">
                    <salvo laser="leftRearInner,rightRearInner"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                    <salvo laser="leftRearOuter,rightRearOuter,standard"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with demaNeR Model-->
            <expansion class="11">
                <positionsList name="leftFrontInner"
                               data="-87.2,26.8,-92.4,14.4,-93.6,1.6,-91.6,-11.2,-86.0,-23.2,-77.2,-34.8,-65.2,-44.4,-50.8,-52.4,-34.4,-58.0,-16.8,-61.6,1.6,-62.8,19.6,-61.2,37.2,-57.2,53.2,-50.8,66.8,-42.4,78.4,-32.4,86.8,-21.2,91.6,-8.8,93.2,4.0,90.8,16.8,85.2,29.2,76.4,40.0,64.4,50.0,50.0,58.0,33.6,63.6,16.0,67.2,-2.0,68.4,-20.4,66.8,-37.6,62.8,-53.6,56.4,-67.6,48.0,-79.2,38.0"/>
                <positionsList name="center"
                               data="1.6,-0.8,1.6,-0.8,1.6,-0.4,1.2,0.0,0.8,0.0,0.8,0.4,0.4,0.4,0.0,0.4,-0.4,0.4,-0.8,0.4,-1.2,0.4,-1.6,0.0,-2.0,0.0,-2.0,-0.4,-2.4,-0.4,-2.4,-0.8,-2.4,-1.2,-2.4,-1.2,-2.0,-1.6,-2.0,-1.6,-1.6,-2.0,-1.2,-2.0,-1.2,-2.4,-0.8,-2.4,-0.4,-2.4,0.0,-2.4,0.4,-2.4,0.8,-2.0,1.2,-2.0,1.2,-1.6,1.6,-1.6,1.6,-1.2"/>
                <positionsList name="rightFrontInner"
                               data="-87.2,-20.4,-79.2,-32.0,-68.0,-42.0,-54.0,-50.4,-38.4,-56.8,-20.8,-60.8,-2.8,-62.4,15.2,-61.6,32.8,-58.0,49.2,-52.4,63.6,-44.4,75.6,-34.8,84.8,-24.0,90.4,-11.6,92.8,1.2,91.6,14.0,86.8,26.0,78.4,37.6,67.2,47.6,53.6,56.0,37.6,62.4,20.4,66.4,2.0,68.0,-16.0,67.2,-33.6,63.6,-50.0,58.0,-64.4,50.0,-76.4,40.4,-85.6,29.2,-91.2,17.2,-93.6,4.4,-92.4,-8.4"/>
                <stage id="1">
                    <salvo laser="center"/>
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with UFO Model-->
            <expansion class="20">
                <positionsList name="left"
                               data="-21,-10,-19,-13,-17,-15,-14,-18,-11,-20,-8,-21,-4,-22,0,-23,4,-22,8,-22,11,-21,14,-19,17,-17,20,-14,21,-11,22,-8,23,-5,22,-1,21,2,18,5,16,8,13,10,9,12,5,13,-1,13,-4,12,-7,10,-11,9,-15,7,-17,4,-19,0,-20,-2"/>
                <positionsList name="right"
                               data="-21,-4,-21,-7,-21,-11,-18,-13,-16,-16,-13,-18,-10,-20,-7,-22,-3,-22,1,-23,5,-22,9,-22,12,-21,15,-19,18,-16,20,-13,21,-10,22,-7,22,-4,22,0,20,3,18,6,16,9,12,11,8,12,4,13,0,11,-5,12,-9,11,-13,9,-16,6,-17,4"/>

                <stage id="1">
                    <salvo laser="left,right"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with P.E.T. Model begin-->
            <expansion class="12">
                <positionsList name="standard"
                               data="-14.8,-9.4,-14.4,-11.5,-13.5,-13.1,-11.9,-15.2,-10.2,-16.4,-8.2,-17.6,-5.7,-18.5,-2.9,-19.3,-0.4,-19.3,2.5,-19.3,5.3,-18.5,7.8,-17.6,9.8,-16.4,11.5,-14.8,12.7,-13.1,13.5,-11.5,13.9,-9.4,13.9,-7.4,13.1,-5.7,11.9,-3.7,9.8,-2.5,7.8,-0.8,5.3,0.0,2.5,0.4,-0.4,0.8,-3.3,0.4,-5.7,0.0,-8.2,-1.2,-10.7,-2.5,-12.3,-3.7,-13.5,-5.7,-14.4,-7.4"/>
                <positionsList name="centerFront"
                               data="-40.2,2.0,-39.0,-3.3,-36.5,-8.6,-32.4,-13.5,-27.5,-17.2,-21.3,-20.5,-14.8,-23.0,-7.8,-24.6,-0.4,-25.0,7.0,-24.6,14.3,-23.0,20.9,-20.5,27.1,-17.2,32.0,-13.5,35.7,-8.6,38.1,-3.3,39.4,2.0,38.9,7.4,36.9,13.1,33.6,18.0,28.7,22.5,22.5,26.6,15.6,29.5,7.8,31.2,-0.4,31.6,-8.2,31.2,-16.0,29.1,-23.4,26.6,-29.5,22.5,-34.0,18.0,-37.7,13.1,-39.8,7.4"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship12_Emed">
                    <salvo laser="centerFront"/>
                </stage>
                <stage id="3" resKey="ship12_Emax">
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <expansion class="13">
                <positionsList name="centerFront"
                               data="-40.2,2.0,-39.0,-3.3,-36.5,-8.6,-32.4,-13.5,-27.5,-17.2,-21.3,-20.5,-14.8,-23.0,-7.8,-24.6,-0.4,-25.0,7.0,-24.6,14.3,-23.0,20.9,-20.5,27.1,-17.2,32.0,-13.5,35.7,-8.6,38.1,-3.3,39.4,2.0,38.9,7.4,36.9,13.1,33.6,18.0,28.7,22.5,22.5,26.6,15.6,29.5,7.8,31.2,-0.4,31.6,-8.2,31.2,-16.0,29.1,-23.4,26.6,-29.5,22.5,-34.0,18.0,-37.7,13.1,-39.8,7.4"/>
                <positionsList name="centerRear"
                               data="-39.8,-24.6,-38.5,-29.9,-36.1,-34.9,-32.4,-39.4,-27.1,-43.0,-21.3,-45.9,-14.8,-48.4,-7.8,-49.6,-0.4,-50.4,7.0,-49.6,14.3,-48.4,20.9,-45.9,26.7,-43.0,31.6,-39.4,35.7,-34.9,38.1,-29.9,38.9,-24.6,38.9,-19.3,36.9,-14.3,33.2,-9.4,28.7,-4.9,22.5,-1.2,15.6,1.2,7.8,2.9,-0.4,3.7,-8.2,2.9,-16.0,1.2,-23.0,-1.6,-29.1,-4.9,-34.0,-9.4,-37.3,-14.3,-39.4,-19.3"/>

                <stage id="1">
                    <salvo laser="centerFront"/>
                </stage>
                <stage id="2" resKey="ship13_Emed">
                    <salvo laser="centerFront"/>
                </stage>
                <stage id="3" resKey="ship13_Emax">
                    <salvo laser="centerFront"/>
                    <salvo laser="centerRear"/>
                </stage>
            </expansion>
            <expansion class="14">
                <positionsList name="centerFront"
                               data="-40.2,2.0,-39.0,-3.3,-36.5,-8.6,-32.4,-13.5,-27.5,-17.2,-21.3,-20.5,-14.8,-23.0,-7.8,-24.6,-0.4,-25.0,7.0,-24.6,14.3,-23.0,20.9,-20.5,27.1,-17.2,32.0,-13.5,35.7,-8.6,38.1,-3.3,39.4,2.0,38.9,7.4,36.9,13.1,33.6,18.0,28.7,22.5,22.5,26.6,15.6,29.5,7.8,31.2,-0.4,31.6,-8.2,31.2,-16.0,29.1,-23.4,26.6,-29.5,22.5,-34.0,18.0,-37.7,13.1,-39.8,7.4"/>
                <positionsList name="centerRear"
                               data="-39.8,-24.6,-38.5,-29.9,-36.1,-34.9,-32.4,-39.4,-27.1,-43.0,-21.3,-45.9,-14.8,-48.4,-7.8,-49.6,-0.4,-50.4,7.0,-49.6,14.3,-48.4,20.9,-45.9,26.7,-43.0,31.6,-39.4,35.7,-34.9,38.1,-29.9,38.9,-24.6,38.9,-19.3,36.9,-14.3,33.2,-9.4,28.7,-4.9,22.5,-1.2,15.6,1.2,7.8,2.9,-0.4,3.7,-8.2,2.9,-16.0,1.2,-23.0,-1.6,-29.1,-4.9,-34.0,-9.4,-37.3,-14.3,-39.4,-19.3"/>
                <positionsList name="rightRearOuter"
                               data="25.0,-31.6,29.9,-27.9,33.6,-23.4,36.1,-18.9,36.9,-13.9,36.5,-8.6,34.8,-3.7,31.6,0.8,27.1,4.9,21.3,8.6,14.8,11.1,7.4,12.7,0.0,13.1,-7.8,12.7,-14.8,11.1,-21.7,8.6,-27.5,5.3,-32.0,1.2,-35.3,-3.7,-36.9,-8.6,-37.7,-13.5,-36.5,-18.5,-34.0,-23.4,-30.8,-27.5,-25.8,-31.2,-20.5,-34.4,-13.9,-36.5,-7.4,-38.1,-0.4,-38.5,6.6,-38.1,13.1,-36.5,19.7,-34.4"/>
                <positionsList name="leftRearOuter"
                               data="26.2,4.9,20.5,8.6,13.9,11.1,7.0,12.3,-0.8,13.1,-8.2,12.3,-15.2,10.7,-21.7,8.2,-27.5,4.9,-32.0,0.8,-34.9,-4.1,-36.9,-9.0,-36.9,-13.9,-36.1,-18.9,-33.6,-23.4,-29.9,-27.9,-25.4,-31.6,-19.7,-34.4,-13.5,-36.5,-7.0,-37.7,0.0,-38.1,7.0,-37.7,13.5,-36.1,19.7,-34.0,25.4,-31.2,29.9,-27.5,33.2,-23.0,35.7,-18.5,36.5,-13.5,36.1,-8.6,34.0,-3.7,30.8,1.2"/>

                <stage id="1">
                    <salvo laser="centerFront"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="centerFront,centerRear"/>
                </stage>
                <stage id="2" resKey="ship14_Emed">
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerRear"/>
                </stage>
                <stage id="3" resKey="ship14_Emax">
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerRear"/>
                </stage>
            </expansion>
            <expansion class="15">
                <positionsList name="centerFront"
                               data="-40.2,2.0,-39.0,-3.3,-36.5,-8.6,-32.4,-13.5,-27.5,-17.2,-21.3,-20.5,-14.8,-23.0,-7.8,-24.6,-0.4,-25.0,7.0,-24.6,14.3,-23.0,20.9,-20.5,27.1,-17.2,32.0,-13.5,35.7,-8.6,38.1,-3.3,39.4,2.0,38.9,7.4,36.9,13.1,33.6,18.0,28.7,22.5,22.5,26.6,15.6,29.5,7.8,31.2,-0.4,31.6,-8.2,31.2,-16.0,29.1,-23.4,26.6,-29.5,22.5,-34.0,18.0,-37.7,13.1,-39.8,7.4"/>
                <positionsList name="centerRear"
                               data="-39.8,-24.6,-38.5,-29.9,-36.1,-34.9,-32.4,-39.4,-27.1,-43.0,-21.3,-45.9,-14.8,-48.4,-7.8,-49.6,-0.4,-50.4,7.0,-49.6,14.3,-48.4,20.9,-45.9,26.7,-43.0,31.6,-39.4,35.7,-34.9,38.1,-29.9,38.9,-24.6,38.9,-19.3,36.9,-14.3,33.2,-9.4,28.7,-4.9,22.5,-1.2,15.6,1.2,7.8,2.9,-0.4,3.7,-8.2,2.9,-16.0,1.2,-23.0,-1.6,-29.1,-4.9,-34.0,-9.4,-37.3,-14.3,-39.4,-19.3"/>
                <positionsList name="rightRearOuter"
                               data="25.0,-31.6,29.9,-27.9,33.6,-23.4,36.1,-18.9,36.9,-13.9,36.5,-8.6,34.8,-3.7,31.6,0.8,27.1,4.9,21.3,8.6,14.8,11.1,7.4,12.7,0.0,13.1,-7.8,12.7,-14.8,11.1,-21.7,8.6,-27.5,5.3,-32.0,1.2,-35.3,-3.7,-36.9,-8.6,-37.7,-13.5,-36.5,-18.5,-34.0,-23.4,-30.8,-27.5,-25.8,-31.2,-20.5,-34.4,-13.9,-36.5,-7.4,-38.1,-0.4,-38.5,6.6,-38.1,13.1,-36.5,19.7,-34.4"/>
                <positionsList name="leftRearOuter"
                               data="26.2,4.9,20.5,8.6,13.9,11.1,7.0,12.3,-0.8,13.1,-8.2,12.3,-15.2,10.7,-21.7,8.2,-27.5,4.9,-32.0,0.8,-34.9,-4.1,-36.9,-9.0,-36.9,-13.9,-36.1,-18.9,-33.6,-23.4,-29.9,-27.9,-25.4,-31.6,-19.7,-34.4,-13.5,-36.5,-7.0,-37.7,0.0,-38.1,7.0,-37.7,13.5,-36.1,19.7,-34.0,25.4,-31.2,29.9,-27.5,33.2,-23.0,35.7,-18.5,36.5,-13.5,36.1,-8.6,34.0,-3.7,30.8,1.2"/>
                <positionsList name="rightFrontInner"
                               data="-30.3,-20.1,-25.0,-23.8,-19.3,-26.7,-12.7,-28.7,-5.7,-29.9,1.6,-29.9,8.6,-29.5,15.6,-27.9,21.7,-25.0,27.1,-21.7,32.0,-17.6,35.3,-13.1,37.3,-8.2,38.1,-2.9,37.3,2.5,34.8,7.4,31.2,12.3,26.2,16.4,20.1,19.7,13.1,22.1,5.7,23.8,-2.5,23.8,-9.8,23.0,-17.2,21.3,-23.8,18.0,-29.5,14.3,-34.0,9.8,-36.9,4.9,-38.5,-0.4,-38.5,-5.7,-36.9,-10.7,-34.0,-15.6"/>
                <positionsList name="leftFrontInner"
                               data="-32.0,12.3,-35.7,7.4,-37.7,2.0,-38.5,-2.9,-37.7,-8.2,-35.7,-13.1,-32.4,-18.0,-27.5,-21.7,-22.1,-25.0,-16.0,-27.5,-9.0,-29.1,-2.1,-29.9,5.3,-29.5,12.3,-28.3,18.9,-26.2,24.6,-23.4,29.5,-19.7,33.6,-15.6,36.5,-10.7,37.7,-5.3,37.7,-0.4,36.1,4.9,33.2,9.8,28.7,14.3,23.4,18.0,16.8,20.9,9.4,23.0,1.6,23.8,-6.2,23.4,-13.9,22.1,-20.9,19.7,-26.7,16.4"/>
                <positionsList name="leftFrontOuter"
                               data="-47.2,39.4,-54.9,32.0,-60.7,23.4,-63.6,14.8,-64.0,5.7,-61.9,-3.3,-57.8,-11.5,-51.7,-18.9,-43.5,-25.4,-34.0,-30.3,-23.8,-34.0,-12.7,-36.5,-0.8,-37.3,10.7,-36.5,21.7,-34.4,32.4,-30.8,41.8,-25.8,50.0,-19.7,56.6,-12.3,61.1,-4.1,63.5,4.5,63.1,13.5,60.7,22.5,55.3,31.2,48.0,38.5,38.1,45.1,26.7,50.0,13.9,53.3,0.4,54.5,-12.7,53.3,-25.8,50.4,-37.3,45.9"/>
                <positionsList name="rightFrontOuter"
                               data="-42.6,-25.8,-32.8,-30.8,-22.6,-34.4,-11.1,-36.5,0.4,-37.3,11.9,-36.5,23.0,-34.0,33.6,-30.3,43.0,-25.0,50.8,-18.9,57.0,-11.5,61.5,-3.3,63.5,5.7,63.1,14.8,59.9,23.4,54.5,32.0,46.7,39.4,36.9,45.9,25.4,50.4,12.3,53.3,-0.8,54.5,-14.4,53.3,-27.1,50.0,-38.5,45.1,-48.4,38.5,-55.8,31.2,-61.1,22.5,-63.6,13.5,-64.0,4.5,-61.5,-4.1,-57.0,-12.3,-50.8,-19.7"/>

                <stage id="1">
                    <salvo laser="centerRear"/>
                    <salvo laser="centerFront,rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="centerFront,rightFrontOuter,leftFrontOuter"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                </stage>
                <stage id="2" resKey="ship15_Emed">
                    <salvo laser="centerRear"/>
                    <salvo laser="centerFront,rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="centerFront,rightFrontOuter,leftFrontOuter"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                </stage>
                <stage id="3" resKey="ship15_Emax">
                    <salvo laser="centerRear"/>
                    <salvo laser="centerFront,rightRearOuter,leftRearOuter"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="centerFront,rightFrontOuter,leftFrontOuter"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                </stage>
            </expansion>
            <expansion class="22">
                <positionsList name="centerFront"
                               data="-40.2,2.0,-39.0,-3.3,-36.5,-8.6,-32.4,-13.5,-27.5,-17.2,-21.3,-20.5,-14.8,-23.0,-7.8,-24.6,-0.4,-25.0,7.0,-24.6,14.3,-23.0,20.9,-20.5,27.1,-17.2,32.0,-13.5,35.7,-8.6,38.1,-3.3,39.4,2.0,38.9,7.4,36.9,13.1,33.6,18.0,28.7,22.5,22.5,26.6,15.6,29.5,7.8,31.2,-0.4,31.6,-8.2,31.2,-16.0,29.1,-23.4,26.6,-29.5,22.5,-34.0,18.0,-37.7,13.1,-39.8,7.4"/>
                <positionsList name="centerMiddle"
                               data="-99.2,1.6,-95.1,-11.9,-87.7,-24.2,-77.5,-35.3,-64.8,-44.3,-50.4,-51.7,-34.4,-57.0,-17.6,-60.3,-0.4,-61.5,16.8,-60.3,33.6,-57.0,49.6,-51.7,64.4,-44.3,76.7,-35.3,86.9,-24.2,94.3,-11.9,98.4,1.6,98.8,15.6,95.1,29.9,87.7,43.5,75.8,55.8,60.7,66.4,42.2,74.2,21.3,79.5,-0.4,81.2,-22.1,79.5,-42.6,74.2,-61.1,66.4,-76.3,55.8,-88.2,43.5,-95.9,29.9,-99.2,15.6"/>
                <positionsList name="centerRear"
                               data="-39.8,-24.6,-38.5,-29.9,-36.1,-34.9,-32.4,-39.4,-27.1,-43.0,-21.3,-45.9,-14.8,-48.4,-7.8,-49.6,-0.4,-50.4,7.0,-49.6,14.3,-48.4,20.9,-45.9,26.7,-43.0,31.6,-39.4,35.7,-34.9,38.1,-29.9,38.9,-24.6,38.9,-19.3,36.9,-14.3,33.2,-9.4,28.7,-4.9,22.5,-1.2,15.6,1.2,7.8,2.9,-0.4,3.7,-8.2,2.9,-16.0,1.2,-23.0,-1.6,-29.1,-4.9,-34.0,-9.4,-37.3,-14.3,-39.4,-19.3"/>
                <positionsList name="rightRearOuter"
                               data="25.0,-31.6,29.9,-27.9,33.6,-23.4,36.1,-18.9,36.9,-13.9,36.5,-8.6,34.8,-3.7,31.6,0.8,27.1,4.9,21.3,8.6,14.8,11.1,7.4,12.7,0.0,13.1,-7.8,12.7,-14.8,11.1,-21.7,8.6,-27.5,5.3,-32.0,1.2,-35.3,-3.7,-36.9,-8.6,-37.7,-13.5,-36.5,-18.5,-34.0,-23.4,-30.8,-27.5,-25.8,-31.2,-20.5,-34.4,-13.9,-36.5,-7.4,-38.1,-0.4,-38.5,6.6,-38.1,13.1,-36.5,19.7,-34.4"/>
                <positionsList name="leftRearOuter"
                               data="26.2,4.9,20.5,8.6,13.9,11.1,7.0,12.3,-0.8,13.1,-8.2,12.3,-15.2,10.7,-21.7,8.2,-27.5,4.9,-32.0,0.8,-34.9,-4.1,-36.9,-9.0,-36.9,-13.9,-36.1,-18.9,-33.6,-23.4,-29.9,-27.9,-25.4,-31.6,-19.7,-34.4,-13.5,-36.5,-7.0,-37.7,0.0,-38.1,7.0,-37.7,13.5,-36.1,19.7,-34.0,25.4,-31.2,29.9,-27.5,33.2,-23.0,35.7,-18.5,36.5,-13.5,36.1,-8.6,34.0,-3.7,30.8,1.2"/>
                <positionsList name="rightFrontInner"
                               data="-30.3,-20.1,-25.0,-23.8,-19.3,-26.7,-12.7,-28.7,-5.7,-29.9,1.6,-29.9,8.6,-29.5,15.6,-27.9,21.7,-25.0,27.1,-21.7,32.0,-17.6,35.3,-13.1,37.3,-8.2,38.1,-2.9,37.3,2.5,34.8,7.4,31.2,12.3,26.2,16.4,20.1,19.7,13.1,22.1,5.7,23.8,-2.5,23.8,-9.8,23.0,-17.2,21.3,-23.8,18.0,-29.5,14.3,-34.0,9.8,-36.9,4.9,-38.5,-0.4,-38.5,-5.7,-36.9,-10.7,-34.0,-15.6"/>
                <positionsList name="leftFrontInner"
                               data="-32.0,12.3,-35.7,7.4,-37.7,2.0,-38.5,-2.9,-37.7,-8.2,-35.7,-13.1,-32.4,-18.0,-27.5,-21.7,-22.1,-25.0,-16.0,-27.5,-9.0,-29.1,-2.1,-29.9,5.3,-29.5,12.3,-28.3,18.9,-26.2,24.6,-23.4,29.5,-19.7,33.6,-15.6,36.5,-10.7,37.7,-5.3,37.7,-0.4,36.1,4.9,33.2,9.8,28.7,14.3,23.4,18.0,16.8,20.9,9.4,23.0,1.6,23.8,-6.2,23.4,-13.9,22.1,-20.9,19.7,-26.7,16.4"/>
                <positionsList name="leftFrontOuter"
                               data="-47.2,39.4,-54.9,32.0,-60.7,23.4,-63.6,14.8,-64.0,5.7,-61.9,-3.3,-57.8,-11.5,-51.7,-18.9,-43.5,-25.4,-34.0,-30.3,-23.8,-34.0,-12.7,-36.5,-0.8,-37.3,10.7,-36.5,21.7,-34.4,32.4,-30.8,41.8,-25.8,50.0,-19.7,56.6,-12.3,61.1,-4.1,63.5,4.5,63.1,13.5,60.7,22.5,55.3,31.2,48.0,38.5,38.1,45.1,26.7,50.0,13.9,53.3,0.4,54.5,-12.7,53.3,-25.8,50.4,-37.3,45.9"/>
                <positionsList name="rightFrontOuter"
                               data="-42.6,-25.8,-32.8,-30.8,-22.6,-34.4,-11.1,-36.5,0.4,-37.3,11.9,-36.5,23.0,-34.0,33.6,-30.3,43.0,-25.0,50.8,-18.9,57.0,-11.5,61.5,-3.3,63.5,5.7,63.1,14.8,59.9,23.4,54.5,32.0,46.7,39.4,36.9,45.9,25.4,50.4,12.3,53.3,-0.8,54.5,-14.4,53.3,-27.1,50.0,-38.5,45.1,-48.4,38.5,-55.8,31.2,-61.1,22.5,-63.6,13.5,-64.0,4.5,-61.5,-4.1,-57.0,-12.3,-50.8,-19.7"/>

                <stage id="1">
                    <salvo laser="centerRear"/>
                    <salvo laser="centerFront,rightRearOuter,leftRearOuter"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerFront,rightFrontOuter,leftFrontOuter"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                    <salvo laser="centerRear,rightRearOuter,leftRearOuter"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                </stage>
                <stage id="2" resKey="ship22_Emed">
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                    <salvo laser="centerFront,rightRearOuter,leftRearOuter"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                    <salvo laser="centerFront,rightFrontOuter,leftFrontOuter"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                    <salvo laser="centerRear,rightRearOuter,leftRearOuter"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                </stage>
                <stage id="3" resKey="ship22_Emax">
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                    <salvo laser="centerFront,rightRearOuter,leftRearOuter"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                    <salvo laser="centerMiddle,rightRearOuter,leftRearOuter"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                    <salvo laser="centerFront,rightFrontOuter,leftFrontOuter"/>
                    <salvo laser="rightFrontInner,leftFrontInner"/>
                    <salvo laser="centerMiddle,rightRearOuter,leftRearOuter"/>
                </stage>
            </expansion>
            <expansion class="23">
                <positionsList name="leftFrontInner"
                               data="-48.4,38.3,-55.9,30.4,-61.2,21.6,-63.8,12.8,-63.8,4.0,-61.6,-4.8,-56.8,-12.8,-50.6,-19.4,-42.7,-25.5,-33.4,-30.4,-23.8,-33.9,-13.2,-36.1,-2.2,-37.0,8.8,-36.5,19.4,-34.8,29.5,-31.7,39.2,-27.3,47.1,-21.6,54.1,-15.0,59.4,-7.5,62.5,0.9,63.4,9.7,61.6,18.9,57.2,27.7,50.2,35.6,40.9,42.7,29.0,48.4,15.8,51.9,2.2,53.7,-12.3,52.8,-26.0,49.7,-37.8,44.9"/>
                <positionsList name="rightFrontInner"
                               data="-40.0,-26.8,-30.4,-31.2,-20.7,-34.3,-9.7,-36.1,0.9,-36.5,11.9,-35.6,22.4,-33.4,32.1,-29.9,41.4,-25.5,49.3,-19.8,55.4,-12.8,59.8,-4.8,62.5,3.5,62.5,12.3,59.8,21.1,55.0,29.9,47.1,37.8,37.4,44.4,25.1,49.3,11.9,52.4,-2.2,53.2,-16.3,51.5,-29.0,48.4,-40.9,42.7,-50.2,35.6,-57.2,27.7,-61.6,18.9,-63.4,10.1,-62.9,1.3,-59.8,-7.0,-55.0,-14.5,-48.0,-21.1"/>
                <positionsList name="centerFront"
                               data="-83.2,11.4,-79.2,0.0,-72.2,-10.1,-63.4,-18.9,-52.8,-26.4,-40.9,-32.1,-27.7,-36.5,-14.5,-39.2,-0.4,-40.0,13.2,-39.2,26.8,-36.5,39.6,-32.1,51.5,-26.4,62.5,-19.4,71.3,-10.1,78.3,0.0,82.3,11.0,83.6,23.3,81.4,35.6,75.7,48.0,66.4,59.4,53.2,69.1,37.4,77.0,19.4,81.8,0.0,83.6,-19.8,81.8,-37.8,77.0,-54.1,69.5,-66.9,59.4,-76.6,48.0,-82.3,35.6,-84.5,23.3"/>

                <!-- TODO: Adapting/Adding salvos for each expansion (stage)  -->
                <stage id="1">
                    <salvo laser="centerFront,leftFrontInner,rightFrontInner"/>
                </stage>
                <stage id="2">
                    <salvo laser="centerFront,leftFrontInner,rightFrontInner"/>
                </stage>
                <stage id="3">
                    <salvo laser="centerFront,leftFrontInner,rightFrontInner"/>
                </stage>
            </expansion>
            <expansion class="25">
                <positionsList name="center"
                               data="-48.9,5.7,-46.2,-0.9,-42.3,-6.9,-36.9,-12.3,-30.6,-16.5,-23.4,-19.8,-15.9,-22.2,-8.1,-23.7,0.0,-24.3,8.1,-23.7,15.9,-22.5,23.4,-20.1,30.6,-16.8,36.9,-12.6,42.3,-7.5,46.5,-1.5,49.5,5.1,50.4,12.3,49.5,19.8,46.5,27.3,40.8,34.2,33.3,40.5,23.7,45.3,12.6,48.3,0.9,49.5,-11.1,48.6,-22.2,45.6,-31.8,40.8,-39.6,34.8,-45.3,27.9,-48.6,20.4,-49.8,12.9"/>
                <stage id="1">
                    <salvo laser="center"/>
                </stage>
            </expansion>
            <expansion class="26">
                <positionsList name="rightRearInner"
                               data="37.7,-78.0,47.9,-72.4,56.1,-65.3,62.7,-57.6,67.3,-48.4,68.9,-39.3,68.3,-29.6,64.3,-20.4,58.1,-11.7,49.5,-4.1,38.2,2.6,25.5,7.1,11.2,10.2,-3.1,10.7,-17.8,9.2,-31.6,5.6,-43.9,0.5,-54.1,-6.6,-61.7,-14.8,-67.3,-24.0,-69.4,-33.2,-69.4,-42.8,-66.8,-52.0,-61.7,-60.7,-54.6,-68.3,-45.4,-74.5,-34.7,-79.6,-22.9,-83.1,-10.7,-85.7,2.0,-85.7,14.3,-84.7,26.5,-82.1"/>
                <positionsList name="leftFrontInner"
                               data="-77.5,6.1,-87.2,-5.6,-92.8,-18.4,-94.9,-31.6,-93.3,-44.4,-88.2,-56.6,-80.1,-67.8,-69.4,-77.5,-56.1,-85.2,-41.8,-91.8,-26.0,-95.9,-9.2,-97.9,7.1,-97.9,24.0,-95.9,39.8,-91.8,54.6,-85.7,67.3,-78.0,78.5,-68.3,86.7,-57.6,91.8,-45.4,93.8,-32.6,92.3,-19.4,86.7,-6.6,77.5,5.1,64.3,15.8,48.5,24.5,30.1,30.6,10.2,33.7,-10.2,33.7,-30.1,30.6,-48.4,25.0,-64.8,16.3"/>
                <positionsList name="rightFrontInner"
                               data="-68.3,-78.0,-55.6,-85.7,-40.8,-91.8,-25.0,-95.9,-8.7,-97.9,8.2,-97.9,24.5,-95.9,40.3,-91.3,55.1,-85.7,67.8,-77.5,78.5,-67.8,86.7,-56.6,91.8,-44.9,93.8,-31.6,91.8,-18.9,86.2,-6.1,76.5,5.6,63.8,16.3,47.4,24.5,29.1,30.6,9.2,33.7,-11.2,33.7,-31.1,30.6,-49.0,24.5,-65.3,15.8,-78.0,5.6,-87.2,-6.6,-92.8,-19.4,-94.3,-32.1,-92.8,-45.4,-87.7,-57.1,-79.0,-68.3"/>
                <positionsList name="leftRearInner"
                               data="42.8,0.5,30.1,5.6,16.8,9.2,2.0,10.7,-12.8,10.2,-26.5,7.1,-39.3,2.6,-50.5,-4.1,-59.2,-11.7,-65.8,-20.4,-69.4,-30.1,-69.9,-39.3,-68.3,-49.0,-63.8,-57.6,-57.1,-65.8,-49.0,-72.4,-38.8,-78.0,-27.5,-82.1,-15.3,-85.2,-2.5,-86.2,9.7,-85.7,22.4,-83.1,33.7,-79.6,44.4,-74.5,53.6,-68.3,60.7,-60.2,65.8,-52.0,68.9,-42.8,68.9,-33.2,66.3,-24.0,60.7,-14.8,53.0,-6.6"/>

                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                </stage>
            </expansion>
            <expansion class="27">
                <positionsList name="bottomInner"
                               data="-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0,-5.0,28.0"/>
                <stage id="1">
                    <salvo laser="bottomInner"/>
                </stage>
            </expansion>
            <expansion class="34">
                <positionsList name="leftFrontInner"
                               data="-44.0,34.8,-50.8,27.6,-55.6,19.6,-58.0,11.6,-58.0,3.6,-56.0,-4.4,-51.6,-11.6,-46.0,-17.6,-38.8,-23.2,-30.4,-27.6,-21.6,-30.8,-12.0,-32.8,-2.0,-33.6,8.0,-33.2,17.6,-31.6,26.8,-28.8,35.6,-24.8,42.8,-19.6,49.2,-13.6,54.0,-6.8,56.8,0.8,57.6,8.8,56.0,17.2,52.0,25.2,45.6,32.4,37.2,38.8,26.4,44.0,14.4,47.2,2.0,48.8,-11.2,48.0,-23.6,45.2,-34.4,40.8"/>
                <positionsList name="rightFrontInner"
                               data="-36.4,-24.4,-27.6,-28.4,-18.8,-31.2,-8.8,-32.8,0.8,-33.2,10.8,-32.4,20.4,-30.4,29.2,-27.2,37.6,-23.2,44.8,-18.0,50.4,-11.6,54.4,-4.4,56.8,3.2,56.8,11.2,54.4,19.2,50.0,27.2,42.8,34.4,34.0,40.4,22.8,44.8,10.8,47.6,-2.0,48.4,-14.8,46.8,-26.4,44.0,-37.2,38.8,-45.6,32.4,-52.0,25.2,-56.0,17.2,-57.6,9.2,-57.2,1.2,-54.4,-6.4,-50.0,-13.2,-43.6,-19.2"/>
                <positionsList name="centerFront"
                               data="-75.6,10.4,-72.0,0.0,-65.6,-9.2,-57.6,-17.2,-48.0,-24.0,-37.2,-29.2,-25.2,-33.2,-13.2,-35.6,-0.4,-36.4,12.0,-35.6,24.4,-33.2,36.0,-29.2,46.8,-24.0,56.8,-17.6,64.8,-9.2,71.2,0.0,74.8,10.0,76.0,21.2,74.0,32.4,68.8,43.6,60.4,54.0,48.4,62.8,34.0,70.0,17.6,74.4,0.0,76.0,-18.0,74.4,-34.4,70.0,-49.2,63.2,-60.8,54.0,-69.6,43.6,-74.8,32.4,-76.8,21.2"/>

                <stage id="1">
                    <salvo laser="centerFront"/>
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                </stage>
            </expansion>
            <expansion class="46">
                <positionsList name="center"
                               data="-165.4,9.4,-161.7,-16.0,-151.3,-40.4,-133.5,-63.0,-110.0,-82.7,-82.7,-98.7,-49.8,-110.0,-15.0,-117.5,20.7,-120.3,56.4,-117.5,91.2,-109.0,122.2,-96.8,150.4,-80.8,173.0,-60.2,189.9,-37.6,199.3,-13.2,203.0,12.2,198.3,37.6,188.0,62.0,170.1,84.6,147.6,104.3,119.4,120.3,87.4,132.5,52.6,139.1,16.9,141.9,-18.8,139.1,-53.6,131.6,-85.5,118.4,-112.8,102.5,-135.4,82.7,-152.3,59.2,-162.6,34.8"/>
                <stage id="1">
                    <salvo laser="center"/>
                </stage>
            </expansion>
            <expansion class="49">
                <positionsList name="rightFrontInner"
                               data="-50.0,-9.0,-44.5,-15.5,-37.0,-20.5,-28.5,-25.0,-19.5,-28.0,-9.5,-30.0,0.5,-30.5,10.5,-29.5,20.0,-27.5,29.0,-24.0,37.5,-20.0,44.5,-14.0,50.0,-8.0,54.0,-0.5,56.0,7.0,55.5,15.5,53.5,23.5,48.5,31.0,41.5,38.0,32.5,43.5,22.0,48.0,10.5,50.5,-1.5,51.5,-14.0,50.0,-25.0,47.0,-35.5,42.5,-44.0,36.5,-50.5,29.5,-55.0,22.0,-57.0,14.0,-56.5,6.0,-54.5,-2.0"/>
                <positionsList name="rightRearInner"
                               data="-3.5,-24.0,2.0,-24.0,7.5,-23.0,13.0,-22.0,17.5,-20.0,21.5,-17.0,25.0,-14.0,27.5,-10.5,29.0,-6.5,29.5,-2.5,28.5,2.0,26.5,6.0,23.5,9.5,19.5,12.5,14.5,15.0,8.5,16.5,2.5,17.5,-3.5,17.5,-9.5,17.0,-15.0,15.0,-20.0,12.5,-24.0,9.5,-27.5,6.0,-29.5,2.0,-30.0,-2.0,-30.0,-6.0,-28.5,-10.0,-26.0,-13.5,-23.0,-17.0,-18.5,-19.5,-14.0,-21.5,-9.0,-23.0"/>
                <positionsList name="leftRearInner"
                               data="-19.5,21.5,-25.0,18.5,-30.0,14.5,-33.5,10.0,-35.5,5.0,-36.5,0.0,-36.0,-4.5,-34.0,-9.5,-30.5,-13.5,-26.5,-17.5,-21.5,-20.5,-15.5,-23.0,-9.5,-24.5,-3.0,-25.0,4.0,-25.0,10.5,-24.0,16.5,-22.5,22.0,-19.5,27.0,-16.5,30.5,-12.5,33.5,-8.0,35.0,-3.5,35.5,1.5,34.0,6.5,31.5,11.5,27.5,15.5,22.5,19.5,16.5,22.5,9.5,24.5,2.0,25.5,-5.5,25.0,-12.5,24.0"/>
                <positionsList name="standard"
                               data="-72.0,17.5,-69.0,7.5,-63.5,-1.5,-56.0,-10.0,-47.0,-16.5,-36.5,-22.0,-25.0,-26.0,-13.0,-28.5,-0.5,-29.0,12.0,-28.5,24.0,-26.0,35.5,-22.0,46.0,-16.5,55.0,-9.5,62.5,-1.5,68.0,7.5,71.0,17.5,71.5,28.0,69.0,39.0,63.5,49.5,55.0,58.5,44.0,66.5,30.5,73.0,15.5,76.5,-0.5,78.0,-16.5,77.0,-31.5,73.0,-45.0,66.5,-56.0,58.5,-64.5,49.5,-70.0,39.0,-72.5,28.0"/>
                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2">
                    <salvo laser="standard"/>
                </stage>
                <stage id="3" resKey="ship49_Emed">
                    <salvo laser="leftRearInner,rightRearInner"/>
                    <salvo laser="rightFrontInner,standard"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with P.E.T. Model end-->
            <expansion class="18">
                <positionsList name="standard"
                               data="-66.2,8.5,-67.5,-0.5,-66.2,-9.9,-62.5,-18.9,-56.2,-27.0,-47.7,-34.2,-37.8,-40.1,-26.1,-44.6,-13.5,-47.3,-0.5,-48.2,12.6,-47.3,25.2,-44.6,36.9,-40.1,46.8,-34.2,55.3,-27.0,61.7,-18.9,65.2,-9.9,66.6,-0.5,65.2,8.5,61.7,17.5,55.3,25.6,46.8,32.8,36.9,38.7,25.2,43.2,12.6,45.9,-0.5,46.8,-13.5,45.9,-26.1,43.2,-37.8,38.7,-47.7,32.8,-56.2,25.6,-62.5,17.5"/>
                <positionsList name="leftRearInner"
                               data="19.3,36.4,7.7,38.2,-4.5,38.2,-16.6,36.9,-27.9,33.8,-38.2,29.2,-47.2,23.4,-54.0,16.6,-58.9,8.5,-61.6,0.5,-62.1,-8.1,-60.3,-16.7,-55.8,-24.8,-49.5,-32.0,-41.0,-38.3,-31.0,-43.2,-20.2,-46.8,-8.1,-48.6,3.6,-49.1,15.8,-47.3,27.0,-44.6,37.3,-40.1,46.3,-33.8,53.1,-27.0,58.1,-19.4,60.8,-10.8,61.2,-2.2,59.4,6.3,54.9,14.4,48.6,21.6,40.1,27.9,30.2,32.8"/>
                <positionsList name="rightRearInner"
                               data="19.3,-44.1,29.7,-40.5,38.7,-35.5,46.3,-29.7,52.2,-23.0,56.2,-15.3,57.6,-7.2,57.2,0.9,54.5,8.5,49.5,16.2,42.8,22.5,34.2,27.9,24.3,31.9,13.5,34.7,2.2,36.0,-9.0,35.6,-20.2,33.8,-30.6,30.2,-39.6,25.2,-47.2,19.3,-53.1,12.6,-57.1,5.0,-58.5,-3.2,-58.0,-11.2,-55.4,-19.4,-50.4,-26.5,-43.6,-32.9,-35.1,-38.3,-25.2,-42.3,-14.4,-45.5,-3.1,-46.4,8.1,-45.9"/>
                <positionsList name="centerRear"
                               data="-18.0,-15.8,-18.0,-18.5,-16.6,-20.7,-15.3,-23.0,-13.0,-24.8,-10.3,-26.1,-7.2,-27.5,-4.0,-28.4,-0.5,-28.4,3.2,-28.4,6.3,-27.5,9.5,-26.1,12.2,-24.8,14.4,-23.0,15.8,-20.7,17.1,-18.5,17.1,-15.8,17.1,-13.5,15.8,-11.2,14.4,-9.0,12.2,-7.2,9.5,-5.4,6.3,-4.0,3.2,-3.6,-0.5,-3.2,-4.0,-3.6,-7.2,-4.5,-10.3,-5.4,-13.0,-7.2,-15.3,-9.0,-16.6,-11.2,-18.0,-13.5"/>
                <positionsList name="leftFrontOuter"
                               data="-70.2,9.0,-71.1,-0.9,-69.8,-10.8,-65.2,-19.8,-58.5,-28.4,-49.5,-36.0,-38.7,-41.9,-26.1,-46.4,-13.0,-49.1,0.9,-50.0,14.9,-48.6,27.9,-45.9,40.1,-41.0,50.4,-34.7,59.0,-27.0,65.2,-18.0,69.3,-8.5,70.2,0.9,68.8,10.8,64.3,20.2,57.6,28.8,48.6,36.4,37.8,42.3,25.2,46.8,12.2,49.5,-1.8,50.4,-15.8,49.1,-28.8,45.9,-41.0,41.4,-51.3,34.7,-59.9,27.0,-66.2,18.5"/>
                <positionsList name="rightFrontOuter"
                               data="-70.2,-8.5,-66.2,-18.0,-59.9,-27.0,-51.3,-34.7,-41.0,-41.0,-28.8,-45.9,-15.8,-48.6,-1.8,-50.0,12.2,-49.1,25.2,-46.4,37.8,-41.9,48.6,-36.0,57.6,-28.4,64.3,-19.8,68.8,-10.4,70.2,-0.9,69.3,9.0,65.2,18.5,59.0,27.0,50.4,34.7,40.1,41.4,27.9,45.9,14.9,49.1,0.9,50.4,-13.0,49.5,-26.1,46.8,-38.7,42.3,-49.5,36.0,-58.5,28.8,-65.2,20.2,-69.8,10.8,-71.1,0.9"/>
                <positionsList name="rightRearOuter"
                               data="-1.8,-56.7,13.5,-55.8,27.9,-52.7,41.4,-47.7,53.1,-41.0,63.0,-32.9,70.2,-23.9,74.7,-13.5,76.5,-2.7,75.2,7.6,71.1,18.0,64.3,27.5,54.9,36.0,43.2,42.8,30.2,48.2,15.8,51.3,0.9,52.7,-14.4,51.8,-28.8,48.6,-42.3,43.7,-54.0,36.9,-63.9,28.8,-71.1,19.8,-75.6,9.5,-77.4,-1.4,-76.0,-11.7,-72.0,-22.0,-65.2,-31.5,-55.8,-40.1,-44.1,-46.8,-31.0,-52.2,-16.6,-55.4"/>
                <positionsList name="leftRearOuter"
                               data="-1.8,54.9,-17.1,53.6,-32.4,50.4,-46.3,45.0,-58.0,37.8,-67.9,28.8,-75.2,18.9,-79.7,8.1,-81.0,-2.7,-79.2,-14.0,-74.2,-24.8,-66.6,-34.2,-56.7,-42.8,-44.1,-50.0,-30.1,-54.9,-14.8,-58.1,0.9,-59.0,16.7,-57.6,31.5,-54.5,45.5,-49.1,57.2,-41.9,67.1,-32.9,74.2,-23.0,78.8,-12.2,80.1,-1.4,78.3,9.9,73.3,20.7,66.2,30.2,55.8,38.7,43.2,45.9,29.2,50.8,14.0,54.0"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship18_Emed">
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                </stage>
                <stage id="3" resKey="ship18_Emax">
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                    <salvo laser="standard"/>
                    <salvo laser="leftRearOuter,rightRearOuter"/>
                </stage>
            </expansion>

            <!-- Expansion for Santa-1100101 -->
            <expansion class="32">
                <positionsList name="leftFrontInner"
                               data="-106.5,74.5,-122.5,59.5,-133.5,41.5,-139.5,23.5,-140.5,4.5,-135.5,-14.5,-125.5,-32.5,-111.5,-48.5,-92.5,-62.5,-69.5,-73.5,-45.5,-80.5,-18.5,-85.5,8.5,-85.5,35.5,-82.5,61.5,-75.5,84.5,-65.5,103.5,-52.5,119.5,-36.5,130.5,-19.5,136.5,-0.5,137.5,18.5,132.5,36.5,123.5,54.5,108.5,70.5,89.5,84.5,67.5,95.5,42.5,103.5,15.5,107.5,-11.5,107.5,-38.5,104.5,-63.5,97.5,-86.5,87.5"/>
                <positionsList name="rightFrontInner"
                               data="-100.5,-51.5,-81.5,-63.5,-57.5,-72.5,-32.5,-78.5,-6.5,-81.5,20.5,-80.5,46.5,-75.5,69.5,-67.5,91.5,-56.5,108.5,-42.5,122.5,-26.5,131.5,-8.5,134.5,9.5,133.5,28.5,126.5,45.5,114.5,62.5,98.5,77.5,78.5,89.5,55.5,98.5,30.5,105.5,3.5,107.5,-22.5,106.5,-48.5,101.5,-72.5,93.5,-93.5,82.5,-111.5,68.5,-125.5,52.5,-133.5,35.5,-137.5,16.5,-135.5,-2.5,-128.5,-19.5,-117.5,-36.5"/>

                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with black Goliath Model-->
            <expansion class="56">
                <positionsList name="standard"
                               data="-1.0,-10.3,-0.7,-10.5,-0.8,-10.6,-0.4,-10.8,-0.4,-10.8,-0.2,-10.8,0.1,-10.8,0.1,-10.8,0.4,-10.8,0.6,-10.8,0.7,-10.6,0.8,-10.5,1.0,-10.3,1.1,-10.3,1.0,-10.1,1.1,-10.0,0.9,-9.8,0.8,-9.8,0.7,-9.6,0.6,-9.5,0.6,-9.5,0.2,-9.3,-0.0,-9.3,-0.2,-9.4,-0.2,-9.5,-0.4,-9.5,-0.6,-9.5,-0.7,-9.8,-0.9,-9.8,-0.9,-10.0,-1.0,-10.1,-0.9,-10.3"/>

                <positionsList name="rightFrontIn"
                               data="-73.2,-49.4,-61.1,-58.6,-46.6,-66.1,-30.3,-71.6,-12.8,-74.6,5.2,-75.1,22.9,-73.1,39.7,-68.6,55.2,-62.1,68.3,-53.4,78.8,-43.1,86.4,-31.6,90.7,-19.3,91.4,-6.6,88.7,5.9,82.4,17.9,73.1,28.7,60.9,38.2,46.4,45.4,30.2,50.9,12.7,53.9,-5.3,54.4,-23.1,52.4,-39.9,48.1,-55.3,41.4,-68.4,32.9,-79.0,22.6,-86.6,10.9,-90.8,-1.3,-91.6,-14.1,-88.8,-26.6,-82.6,-38.6"/>
                <positionsList name="centerFront"
                               data="-31.1,-10.8,-30.3,-15.1,-28.7,-19.2,-25.8,-23.1,-22.1,-26.3,-17.3,-29.1,-12.1,-31.1,-6.2,-32.4,-0.1,-32.8,5.9,-32.3,11.7,-31.1,16.9,-29.1,21.7,-26.4,25.7,-23.1,28.4,-19.3,30.2,-15.3,30.9,-11.1,30.2,-6.8,28.4,-2.6,25.7,1.2,21.9,4.4,17.2,7.2,11.9,9.2,6.1,10.4,-0.1,10.9,-6.0,10.6,-11.8,9.4,-17.2,7.4,-21.8,4.7,-25.8,1.3,-28.6,-2.6,-30.3,-6.6"/>
                <positionsList name="leftRearIn"
                               data="23.2,5.9,15.4,8.7,6.9,10.2,-1.6,10.7,-10.1,9.7,-18.3,7.8,-25.7,4.7,-32.1,0.7,-37.3,-4.1,-41.3,-9.6,-43.4,-15.5,-44.1,-21.6,-42.8,-27.6,-40.1,-33.3,-35.8,-38.6,-30.1,-43.3,-23.3,-46.9,-15.6,-49.6,-7.2,-51.2,1.4,-51.6,9.9,-50.8,18.2,-48.8,25.6,-45.8,32.1,-41.8,37.2,-36.9,41.1,-31.4,43.3,-25.5,43.8,-19.4,42.7,-13.3,39.9,-7.6,35.7,-2.3,29.9,2.2"/>
                <positionsList name="rightRearOut"
                               data="-17.8,-37.6,-11.5,-39.7,-4.8,-40.8,2.2,-41.1,9.2,-40.1,15.7,-38.3,21.7,-35.8,26.7,-32.3,30.7,-28.4,33.6,-23.9,35.2,-19.1,35.4,-14.3,34.2,-9.3,31.7,-4.8,28.2,-0.6,23.4,2.9,17.7,5.9,11.4,7.9,4.5,9.1,-2.3,9.2,-9.3,8.4,-15.8,6.7,-21.7,4.1,-26.8,0.7,-30.8,-3.3,-33.8,-7.8,-35.3,-12.6,-35.6,-17.6,-34.3,-22.3,-31.8,-27.1,-28.3,-31.2,-23.6,-34.8"/>
                <positionsList name="rightFrontOut"
                               data="-64.3,-55.8,-50.6,-63.8,-34.8,-69.8,-17.7,-73.4,0.2,-74.6,17.9,-73.3,34.9,-69.6,50.7,-63.6,64.4,-55.6,75.9,-45.8,84.2,-34.7,89.4,-22.6,91.1,-10.1,89.3,2.6,84.2,14.7,75.6,25.8,64.2,35.6,50.4,43.7,34.7,49.4,17.4,53.2,-0.3,54.4,-18.1,53.2,-35.1,49.4,-50.8,43.4,-64.6,35.4,-76.1,25.6,-84.3,14.4,-89.5,2.3,-91.3,-10.3,-89.3,-22.8,-84.2,-34.9,-75.8,-46.1"/>
                <positionsList name="leftFrontIn"
                               data="-73.2,28.5,-82.6,17.7,-88.6,5.7,-91.3,-6.8,-90.6,-19.6,-86.3,-31.8,-78.8,-43.3,-68.1,-53.6,-54.8,-62.1,-39.6,-68.6,-22.8,-73.1,-5.1,-74.8,12.9,-74.3,30.2,-71.3,46.4,-66.1,60.9,-58.6,73.0,-49.1,82.4,-38.3,88.4,-26.3,91.2,-13.8,90.4,-1.1,86.2,11.2,78.7,22.7,67.9,32.9,54.7,41.4,39.4,47.9,22.7,52.4,4.9,54.2,-13.1,53.7,-30.3,50.7,-46.6,45.4,-61.1,37.9"/>
                <positionsList name="leftFrontOut"
                               data="-64.3,35.2,-75.6,25.4,-84.1,14.4,-89.2,2.4,-90.9,-10.2,-89.1,-22.8,-83.8,-34.8,-75.6,-45.8,-64.3,-55.6,-50.5,-63.6,-34.8,-69.6,-17.7,-73.1,-0.1,-74.3,17.7,-73.1,34.7,-69.6,50.4,-63.6,64.2,-55.6,75.4,-45.8,83.8,-34.6,88.9,-22.6,90.7,-10.1,88.9,2.4,83.7,14.4,75.4,25.7,64.1,35.4,50.3,43.4,34.7,49.2,17.7,52.9,-0.1,54.2,-17.8,52.9,-34.8,49.2,-50.6,43.2"/>
                <positionsList name="leftRearOut"
                               data="-17.9,5.6,-23.3,2.7,-28.1,-0.8,-31.6,-5.1,-34.1,-9.6,-35.1,-14.3,-34.8,-19.3,-33.1,-24.1,-30.3,-28.3,-26.1,-32.3,-21.1,-35.6,-15.3,-38.1,-8.8,-39.8,-2.1,-40.6,4.9,-40.3,11.4,-39.3,17.7,-37.1,23.2,-34.3,27.9,-30.8,31.4,-26.6,33.9,-22.1,34.9,-17.3,34.7,-12.3,32.9,-7.6,30.2,-3.3,26.2,0.7,20.9,3.9,15.2,6.4,8.7,8.2,1.9,8.9,-4.9,8.7,-11.6,7.7"/>
                <positionsList name="rightRearIn"
                               data="23.2,-47.3,30.2,-43.6,35.8,-38.9,40.2,-33.6,43.1,-27.8,44.2,-21.8,43.7,-15.6,41.4,-9.6,37.7,-4.1,32.5,0.8,25.9,4.9,18.4,7.9,10.2,9.9,1.6,10.9,-7.1,10.4,-15.6,8.9,-23.3,6.2,-30.2,2.5,-36.1,-2.1,-40.4,-7.4,-43.1,-13.3,-44.3,-19.3,-43.8,-25.6,-41.7,-31.4,-37.8,-37.1,-32.6,-41.8,-26.1,-45.9,-18.6,-49.1,-10.3,-51.1,-1.8,-51.8,6.9,-51.6,15.3,-49.9"/>
                <positionsList name="centerRear"
                               data="-4.6,-20.8,-4.6,-21.6,-4.3,-22.1,-3.8,-22.6,-3.3,-23.1,-2.6,-23.6,-1.8,-23.8,-1.1,-24.1,-0.1,-24.1,0.7,-24.1,1.7,-23.8,2.4,-23.6,3.0,-23.1,3.6,-22.7,4.0,-22.1,4.4,-21.6,4.4,-20.8,4.4,-20.3,4.1,-19.8,3.7,-19.1,3.1,-18.6,2.4,-18.3,1.7,-18.1,0.9,-17.8,-0.1,-17.8,-0.8,-17.8,-1.8,-17.9,-2.6,-18.3,-3.2,-18.6,-3.8,-19.1,-4.2,-19.6,-4.4,-20.3"/>


                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship10_Emed">
                    <salvo laser="leftRearIn,rightRearIn"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="centerFront"/>
                </stage>
                <stage id="3" resKey="ship10_Ecombat">
                    <salvo laser="leftRearIn,rightRearIn"/>
                    <salvo laser="leftFrontIn,rightFrontIn,centerRear"/>
                    <salvo laser="leftFrontOut,rightFrontOut"/>
                    <salvo laser="leftRearOut,rightRearOut,centerFront"/>
                </stage>
            </expansion>

            <!--    Expansions for ships compatible with Skill Design Replacement Model 1-->
            <expansion class="63">
                <positionsList name="standard"
                               data="-2.1,-19.8,-1.8,-20.3,-1.8,-20.4,-1.3,-20.7,-1.3,-20.7,-1.4,-21.0,-0.9,-21.4,0.1,-21.6,0.5,-21.6,0.9,-21.6,1.3,-21.3,1.2,-20.8,1.5,-20.7,1.4,-20.4,1.9,-20.3,1.6,-19.8,1.9,-19.8,1.5,-19.3,1.5,-19.3,1.2,-18.9,1.1,-18.9,1.0,-18.9,0.2,-18.5,-0.2,-18.5,-0.3,-18.4,-0.9,-18.5,-1.1,-18.6,-1.2,-18.9,-1.6,-18.9,-1.8,-19.3,-2.0,-19.4,-1.8,-19.8"/>

                <positionsList name="leftRear"
                               data="47.6,-1.4,40.8,5.0,32.4,10.1,22.4,14.2,11.6,16.5,0.1,17.5,-11.4,16.5,-22.7,14.2,-32.6,10.1,-41.2,5.0,-47.8,-1.4,-52.6,-8.3,-55.2,-15.8,-55.1,-23.5,-53.3,-30.8,-49.6,-37.7,-44.5,-43.7,-37.2,-49.2,-29.3,-53.4,-20.1,-56.6,-10.3,-58.5,-0.2,-59.1,10.0,-58.5,19.9,-56.6,29.1,-53.4,37.3,-49.2,44.0,-43.8,49.8,-37.7,53.4,-30.8,55.3,-23.5,54.8,-15.8,52.3,-8.3"/>
                <positionsList name="rightRear"
                               data="44.3,-44.2,49.7,-37.8,53.4,-30.9,55.2,-23.6,55.3,-16.1,53.0,-8.8,48.1,-1.4,41.4,4.9,33.2,10.1,23.1,14.2,12.0,16.8,0.0,17.8,-11.4,17.0,-22.5,14.6,-32.5,10.6,-41.4,5.4,-48.0,-1.0,-52.9,-7.9,-55.1,-15.7,-55.8,-23.1,-54.0,-30.4,-50.6,-37.4,-44.9,-43.7,-37.6,-49.2,-29.8,-53.4,-20.6,-56.6,-10.8,-58.7,-0.3,-59.4,9.7,-58.9,19.9,-57.1,29.1,-53.8,37.1,-49.5"/>

                <positionsList name="rightFrontIn"
                               data="-18.3,-35.4,-8.2,-37.3,1.7,-37.4,11.6,-36.4,21.3,-34.1,30.4,-30.5,38.4,-25.8,45.6,-20.3,50.6,-13.5,54.4,-6.5,55.7,1.4,55.3,9.2,52.5,17.0,47.1,24.4,40.1,30.8,31.1,36.3,21.2,40.0,9.9,42.5,-1.7,43.2,-13.3,41.8,-24.3,39.1,-34.3,34.9,-42.2,29.0,-49.2,22.4,-53.5,14.9,-55.8,7.1,-55.6,-0.9,-53.8,-8.4,-49.5,-15.7,-44.0,-22.1,-37.3,-27.7,-29.0,-32.3"/>
                <positionsList name="leftFrontIn"
                               data="-21.4,40.0,-31.2,35.9,-40.2,30.8,-47.4,24.3,-52.2,17.0,-54.7,9.2,-55.5,1.4,-53.7,-6.5,-50.8,-13.6,-45.0,-20.3,-38.5,-25.8,-30.6,-30.4,-21.1,-34.1,-11.7,-36.1,-1.7,-37.3,8.1,-36.9,19.3,-35.4,28.5,-32.2,36.9,-27.6,43.5,-21.7,49.0,-15.2,53.0,-8.3,55.1,-0.6,54.8,7.2,52.7,14.9,48.3,22.4,42.0,29.0,33.7,34.5,23.8,39.0,13.0,41.8,1.5,42.8,-10.3,42.3"/>

                <positionsList name="centerFront"
                               data="-37.5,-18.5,-36.2,-23.5,-34.0,-28.2,-29.8,-32.7,-25.2,-36.4,-19.6,-39.1,-13.3,-41.4,-7.2,-42.8,-0.5,-44.9,7.3,-42.4,13.8,-41.1,20.1,-38.8,25.8,-35.9,30.2,-32.0,33.7,-27.6,36.4,-23.0,37.3,-18.0,36.9,-12.9,34.6,-7.8,31.4,-3.2,26.8,0.9,21.2,4.1,14.1,6.8,7.0,8.3,-0.4,8.7,-8.1,8.3,-15.1,6.4,-22.1,3.9,-27.5,0.4,-32.4,-3.7,-35.4,-8.4,-37.0,-13.4"/>
                <positionsList name="centerRear"
                               data="-22.3,-26.5,-21.5,-29.5,-20.1,-32.2,-18.1,-34.7,-15.0,-36.8,-11.8,-38.7,-7.7,-40.0,-3.9,-40.7,0.5,-41.0,4.4,-40.5,8.5,-39.6,12.2,-38.2,15.5,-36.4,18.2,-34.1,20.3,-31.8,21.4,-28.8,21.9,-25.8,21.7,-23.0,20.3,-19.9,18.5,-17.5,15.7,-15.2,12.0,-13.0,7.8,-11.6,3.9,-10.8,-0.7,-10.6,-5.0,-11.1,-9.1,-12.0,-13.1,-13.4,-16.0,-15.6,-18.8,-18.0,-20.6,-20.7,-21.9,-23.5"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship63_Emed">
                    <salvo laser="centerFront"/>
                    <salvo laser="centerRear"/>
                </stage>
                <stage id="3" resKey="ship63_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Skill Design Replacement Model 2-->
            <expansion class="64">
                <positionsList name="standard"
                               data="-85.4,5.1,-80.7,-6.5,-73.5,-17.2,-64.5,-26.2,-54.0,-33.6,-42.1,-39.8,-29.3,-44.1,-16.0,-47.4,0.6,-49.1,15.7,-47.9,29.2,-44.4,42.0,-39.8,53.8,-33.7,65.0,-26.2,74.4,-17.2,81.1,-6.5,85.4,5.1,86.9,17.5,85.2,30.1,78.9,43.0,69.3,54.6,55.6,64.9,39.6,72.7,20.7,77.8,0.5,79.5,-19.7,77.8,-38.2,72.7,-55.4,64.9,-68.3,54.6,-78.5,43.0,-83.8,30.1,-86.7,17.6"/>

                <positionsList name="leftRear"
                               data="8.2,17.2,-2.1,17.6,-12.0,16.6,-21.3,14.2,-29.2,10.3,-35.7,5.6,-40.8,-0.0,-44.6,-5.7,-46.0,-12.0,-45.8,-18.1,-43.4,-24.1,-40.0,-29.5,-34.8,-34.4,-28.7,-38.3,-22.1,-41.3,-13.7,-43.9,-6.0,-45.2,1.9,-45.2,10.0,-44.4,18.1,-42.7,25.5,-40.0,32.3,-36.6,37.9,-32.3,42.2,-27.1,45.6,-21.5,46.9,-15.5,45.9,-9.1,44.0,-3.0,40.0,2.6,34.4,7.7,26.7,12.0,17.4,15.5"/>
                <positionsList name="rightRear"
                               data="6.9,-45.2,15.1,-43.9,22.4,-41.5,29.4,-38.3,35.7,-34.4,40.9,-29.7,44.3,-24.1,46.2,-18.1,46.9,-12.0,45.0,-5.6,41.8,0.3,37.0,5.6,30.6,10.3,22.0,14.2,12.2,16.7,2.6,17.6,-7.3,17.2,-16.7,15.5,-26.0,12.4,-33.4,8.1,-39.4,2.9,-43.3,-3.0,-45.8,-9.1,-46.0,-15.5,-44.7,-21.5,-41.7,-27.1,-37.4,-32.3,-31.7,-36.6,-25.2,-40.0,-17.6,-43.0,-9.4,-44.7,-1.9,-45.2"/>

                <positionsList name="rightFrontIn"
                               data="-21.4,-25.0,-14.5,-27.2,-6.4,-28.8,1.3,-29.0,9.1,-28.4,16.5,-26.7,23.8,-24.1,30.2,-20.7,35.8,-16.4,39.7,-11.2,43.1,-6.0,44.0,0.3,43.9,6.4,41.8,12.5,37.9,18.3,32.4,23.5,25.2,27.9,17.7,31.0,8.2,33.0,-1.1,33.5,-10.5,32.6,-18.9,30.1,-27.0,26.6,-33.1,21.9,-38.6,16.8,-41.7,10.7,-43.3,4.7,-43.6,-1.3,-41.6,-7.3,-38.2,-12.9,-33.5,-17.6,-28.3,-21.6"/>
                <positionsList name="rightFrontOut"
                               data="-40.8,-28.4,-30.5,-33.1,-20.0,-36.1,-8.8,-37.9,2.7,-38.3,14.7,-37.4,25.5,-34.9,36.2,-31.0,45.7,-25.8,54.2,-19.4,60.4,-11.6,65.1,-3.0,68.0,6.0,67.6,15.9,64.7,25.8,58.8,35.2,50.8,43.4,39.7,50.7,26.7,55.9,12.1,58.9,-3.3,59.8,-18.6,58.0,-32.2,53.7,-44.5,47.5,-54.1,39.6,-61.5,30.7,-65.7,21.1,-67.1,11.2,-66.2,1.7,-62.7,-7.3,-57.1,-15.5,-49.7,-22.4"/>
                <positionsList name="leftFrontIn"
                               data="-24.8,27.9,-31.7,23.6,-37.3,18.5,-40.8,12.5,-43.0,6.4,-43.7,0.4,-43.4,-5.8,-39.5,-11.2,-35.2,-16.4,-29.6,-20.7,-23.5,-24.1,-16.3,-26.7,-8.5,-28.4,-1.2,-28.9,7.4,-28.8,14.6,-27.3,22.0,-25.0,28.4,-21.7,34.1,-17.6,39.2,-12.9,42.2,-7.3,43.7,-1.3,44.3,4.7,43.0,10.7,39.2,16.8,34.1,22.3,28.0,26.7,19.5,30.4,11.3,32.7,1.8,33.5,-7.6,33.1,-16.8,31.2"/>
                <positionsList name="leftFrontOut"
                               data="-50.3,43.6,-58.7,35.2,-64.4,25.8,-67.0,15.9,-67.5,6.2,-64.8,-3.0,-60.1,-11.6,-53.3,-19.4,-45.1,-25.8,-35.6,-31.0,-25.2,-34.9,-14.1,-37.4,-2.7,-38.3,9.0,-38.1,20.3,-36.1,31.4,-33.1,41.4,-28.4,50.0,-22.5,57.7,-15.5,63.3,-7.3,66.8,1.7,68.4,11.2,66.7,21.1,62.8,30.5,55.5,39.6,45.0,47.7,33.2,53.7,19.1,58.0,4.0,59.8,-11.2,59.1,-25.3,55.9,-39.0,50.7"/>

                <positionsList name="centerFront"
                               data="-58.7,29.2,-57.8,21.9,-54.8,15.0,-49.8,8.6,-43.4,3.2,-35.6,-1.3,-27.2,-4.8,-17.5,-7.3,-7.9,-8.7,2.3,-9.1,12.2,-8.2,22.0,-6.5,31.1,-3.5,39.6,0.4,46.5,5.5,52.5,11.2,56.8,17.6,58.8,24.9,59.0,32.2,56.8,39.6,51.7,46.9,44.7,53.3,34.9,58.9,23.2,63.1,10.8,65.4,-2.6,66.0,-15.0,64.5,-27.9,61.5,-38.2,56.8,-46.8,50.7,-53.3,43.9,-57.1,36.5"/>
                <positionsList name="centerRear"
                               data="14.2,-24.9,14.2,-23.2,13.4,-21.5,12.1,-19.8,10.8,-18.5,8.6,-17.2,6.5,-16.3,3.3,-15.5,0.9,-15.5,-2.1,-15.5,-5.0,-15.9,-7.1,-16.8,-9.0,-18.1,-11.1,-19.4,-12.0,-21.1,-12.9,-22.8,-13.3,-24.5,-13.2,-26.2,-12.0,-28.0,-11.2,-29.3,-9.0,-31.0,-7.6,-31.8,-5.1,-32.7,-2.7,-33.2,0.1,-33.5,2.6,-33.3,4.8,-32.8,7.8,-32.3,9.4,-31.0,11.3,-29.7,12.9,-28.4,13.8,-26.7"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship64_Emed">
                    <salvo laser="centerFront"/>
                    <salvo laser="centerRear"/>
                </stage>
                <stage id="3" resKey="ship64_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontOut,rightFrontOut"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Skill Design Replacement Model 3-->
            <expansion class="65">
                <positionsList name="standard"
                               data="-55.5,-21.1,-52.8,-28.4,-48.8,-34.8,-43.5,-40.4,-36.8,-45.2,-29.0,-49.6,-20.6,-52.3,-8.8,-56.4,1.0,-56.8,10.3,-56.4,20.5,-52.8,29.0,-49.8,37.0,-45.6,43.5,-40.5,49.3,-34.9,53.6,-28.5,56.4,-21.6,56.9,-14.2,54.7,-6.4,51.0,0.5,44.2,7.3,35.1,13.2,24.6,17.5,13.3,20.1,0.6,21.1,-11.7,20.1,-23.9,17.6,-34.2,13.2,-42.6,7.3,-49.7,0.9,-53.8,-6.4,-56.0,-13.8"/>

                <positionsList name="leftRear"
                               data="3.0,55.6,-12.9,54.8,-27.3,51.4,-40.1,45.6,-50.9,38.2,-59.5,29.8,-64.1,20.1,-67.1,10.7,-66.5,0.9,-63.7,-8.1,-58.5,-16.2,-51.8,-23.6,-43.6,-29.6,-34.0,-34.6,-23.4,-38.2,-13.0,-40.2,-1.7,-41.2,9.6,-40.7,20.4,-39.0,31.1,-35.8,40.9,-31.4,49.5,-25.6,57.1,-18.7,62.9,-10.8,66.3,-2.0,67.7,7.3,66.3,17.1,61.8,26.8,55.0,35.8,44.8,43.6,32.2,49.9,18.2,53.9"/>
                <positionsList name="rightRear"
                               data="2.6,-41.2,13.5,-40.2,24.5,-37.9,34.9,-34.3,44.3,-29.4,52.4,-23.2,59.8,-16.2,64.7,-7.8,67.0,1.4,67.7,10.8,65.3,20.6,59.6,30.1,51.5,38.7,40.8,46.0,27.5,51.4,12.4,54.8,-2.4,55.4,-18.3,53.8,-32.2,49.5,-44.5,43.1,-54.3,35.3,-61.6,26.4,-65.6,16.6,-66.6,6.9,-65.6,-2.5,-61.6,-11.3,-56.2,-19.1,-48.8,-26.0,-40.2,-31.5,-30.4,-35.9,-19.5,-39.2,-8.8,-40.8"/>

                <positionsList name="rightFrontIn"
                               data="-96.9,-32.8,-87.1,-44.1,-75.4,-53.5,-61.9,-61.3,-46.5,-67.6,-31.2,-71.6,-15.0,-74.0,1.6,-75.0,18.2,-74.0,34.0,-71.1,49.6,-66.7,64.0,-60.3,78.0,-52.4,89.8,-42.6,98.8,-30.9,105.9,-18.1,108.5,-3.5,107.4,11.7,101.1,27.4,90.2,42.1,73.1,55.4,51.5,65.7,25.7,72.5,-1.4,74.5,-28.4,71.5,-53.7,64.6,-74.8,53.8,-91.0,40.1,-101.4,25.0,-107.3,9.7,-107.3,-5.9,-103.8,-20.1"/>
                <positionsList name="rightFrontOut"
                               data="-34.7,-40.8,-24.9,-44.7,-17.3,-46.8,-9.0,-48.1,-0.8,-48.6,7.3,-47.7,15.0,-45.8,22.7,-43.6,29.7,-40.2,36.1,-36.3,41.4,-31.6,45.4,-26.0,47.7,-20.1,48.7,-13.8,47.2,-7.4,43.9,-1.0,39.0,4.8,32.0,9.8,23.6,13.7,13.7,16.4,3.1,17.6,-7.2,17.1,-17.1,15.2,-26.9,12.1,-34.2,7.3,-40.6,2.0,-45.0,-3.9,-47.8,-10.4,-48.9,-16.9,-48.0,-23.3,-45.1,-30.0,-40.9,-35.6"/>
                <positionsList name="leftFrontIn"
                               data="-107.7,-3.9,-105.0,-18.2,-98.3,-31.4,-88.7,-42.9,-76.9,-52.6,-63.1,-60.8,-48.7,-66.7,-33.3,-71.2,-17.0,-74.0,-0.4,-75.0,15.7,-74.2,32.0,-71.6,47.8,-67.2,62.8,-61.3,76.5,-53.4,88.2,-43.7,97.8,-32.4,105.4,-19.6,108.8,-5.4,108.3,9.8,102.5,25.5,91.3,40.6,75.5,53.9,54.4,64.7,28.6,72.0,2.0,74.5,-25.7,72.5,-50.9,65.6,-72.9,55.2,-88.7,41.6,-100.8,26.9,-106.8,11.3"/>
                <positionsList name="leftFrontOut"
                               data="-38.6,4.4,-43.5,-1.5,-46.5,-7.8,-47.9,-14.2,-46.9,-20.6,-44.5,-26.5,-40.6,-31.9,-35.2,-36.8,-28.8,-40.7,-21.9,-43.6,-14.6,-45.8,-6.9,-47.7,1.2,-48.3,9.6,-48.1,17.9,-46.8,26.2,-44.6,35.1,-40.5,41.0,-35.4,45.4,-29.5,48.1,-23.3,49.2,-16.7,48.1,-10.1,45.6,-3.6,41.3,2.4,35.0,7.8,27.1,12.2,17.7,15.6,7.9,17.1,-3.2,17.6,-13.2,16.2,-23.2,13.7,-31.3,9.3"/>

                <positionsList name="centerFront"
                               data="-88.1,-13.2,-83.2,-24.5,-75.6,-34.4,-65.6,-43.1,-54.4,-50.2,-41.6,-55.9,-28.2,-59.8,-14.1,-62.3,0.3,-62.8,14.8,-62.2,28.6,-59.8,42.2,-55.9,54.9,-50.1,66.3,-43.2,76.2,-34.4,84.3,-24.5,89.3,-13.2,91.7,-1.0,89.5,12.2,84.4,25.0,74.2,37.2,60.1,48.0,42.7,56.3,22.2,61.7,0.2,63.7,-21.5,61.7,-42.0,56.3,-60.0,48.0,-73.8,37.2,-83.6,25.0,-89.2,12.1,-90.1,-1.0"/>
                <positionsList name="centerRear"
                               data="-46.4,-45.1,-44.4,-50.5,-41.0,-55.4,-36.1,-59.8,-30.3,-63.7,-23.4,-66.7,-16.2,-68.7,-7.7,-70.1,0.2,-70.6,8.5,-70.1,16.2,-68.7,23.7,-66.7,30.6,-63.7,36.5,-60.0,41.7,-55.9,45.1,-50.7,46.8,-45.3,47.2,-39.7,45.6,-34.3,42.2,-28.9,36.8,-24.0,29.0,-19.6,20.2,-16.3,10.6,-14.3,0.6,-13.7,-9.6,-14.2,-19.4,-16.2,-27.4,-19.6,-35.5,-23.6,-41.0,-28.5,-44.8,-33.9,-46.0,-39.7"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship65_Emed">
                    <salvo laser="centerFront"/>
                    <salvo laser="centerRear"/>
                </stage>
                <stage id="3" resKey="ship65_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontOut,rightFrontOut"/>
                    <salvo laser="centerFront"/>
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Skill Design Replacement Model 4-->
            <expansion class="66">
                <positionsList name="standard"
                               data="-27.9,6.8,-27.8,2.8,-25.6,-1.1,-23.7,-4.6,-19.3,-8.0,-16.1,-10.3,-10.2,-12.5,-5.1,-13.7,0.0,-13.8,6.3,-13.7,11.5,-12.5,16.2,-10.3,20.6,-8.0,24.1,-4.6,26.9,-1.2,28.6,2.8,29.2,6.8,28.3,11.1,27.4,14.8,23.7,18.7,21.2,21.7,16.2,24.5,11.5,26.2,6.3,27.4,0.7,27.9,-5.1,27.4,-10.2,26.2,-15.3,24.5,-19.3,21.7,-23.7,18.8,-26.2,15.1,-27.9,11.3"/>

                <positionsList name="leftRear"
                               data="23.0,4.4,19.6,7.4,15.5,9.7,10.9,11.4,5.2,12.5,-0.8,13.0,-6.1,12.5,-11.6,11.3,-15.8,9.1,-20.5,6.7,-23.3,3.4,-26.1,-0.1,-27.7,-4.0,-27.7,-8.0,-27.1,-12.0,-25.0,-16.0,-24.6,-19.7,-17.0,-24.8,-13.7,-25.2,-9.6,-26.8,-3.9,-27.9,0.8,-28.0,6.5,-27.4,11.6,-26.3,16.5,-24.2,20.6,-21.7,23.7,-18.3,26.4,-14.9,27.7,-10.9,28.1,-6.9,27.6,-2.9,26.3,0.6"/>
                <positionsList name="rightRear"
                               data="24.2,-19.7,26.3,-16.0,28.0,-12.0,28.1,-8.0,28.0,-4.0,26.4,-0.0,24.0,3.4,20.1,6.7,16.6,9.1,11.2,11.3,6.1,12.5,0.6,13.0,-4.5,12.5,-9.6,11.4,-14.7,9.7,-19.2,7.3,-22.2,4.0,-25.0,0.6,-26.7,-3.4,-27.3,-7.4,-27.4,-11.0,-25.9,-14.9,-23.4,-18.5,-19.8,-21.7,-15.3,-24.5,-10.7,-26.2,-5.5,-27.4,-0.4,-28.0,5.1,-27.6,10.3,-26.5,13.5,-25.2,20.3,-25.2"/>

                <positionsList name="rightFrontIn"
                               data="-96.3,-8.6,-85.4,-21.7,-71.2,-33.1,-54.6,-42.2,-35.7,-48.5,-15.3,-52.5,5.8,-53.0,26.4,-50.8,46.3,-45.6,64.1,-37.7,79.9,-27.4,92.1,-14.9,101.6,-1.2,106.7,13.7,107.4,29.0,104.1,44.4,97.1,58.7,86.2,71.8,72.0,83.2,55.4,92.3,36.5,98.6,15.6,102.6,-5.0,103.2,-25.6,100.9,-45.5,95.7,-63.2,87.8,-79.1,77.5,-91.8,65.3,-100.8,51.3,-105.8,36.4,-106.5,21.1,-103.7,6.0"/>
                <positionsList name="rightFrontOut"
                               data="-41.4,-47.3,-27.3,-52.5,-12.4,-55.3,2.6,-55.9,18.9,-54.7,32.9,-50.8,46.4,-45.1,58.3,-37.7,67.6,-28.6,74.1,-18.4,78.3,-7.4,79.2,3.8,77.6,14.8,72.5,25.6,65.0,35.3,54.8,43.9,42.2,50.7,28.1,55.8,13.2,58.7,-2.2,59.3,-18.0,58.1,-32.4,54.1,-45.5,48.4,-57.4,41.0,-66.6,31.9,-74.1,22.1,-77.5,10.8,-78.6,-0.6,-76.8,-11.4,-71.7,-22.2,-64.0,-32.0,-53.9,-40.5"/>

                <positionsList name="leftFrontIn"
                               data="-96.2,58.7,-103.7,44.3,-106.5,29.1,-105.3,13.7,-100.2,-1.2,-92.0,-14.9,-79.1,-27.4,-63.7,-37.6,-45.5,-45.6,-25.6,-50.7,-5.0,-53.0,16.0,-52.4,36.1,-48.5,55.4,-42.2,72.5,-33.1,86.2,-21.7,97.0,-8.6,103.8,6.1,107.3,21.1,106.2,36.4,101.0,51.3,92.4,65.0,79.9,77.5,64.1,87.7,46.3,95.7,26.4,100.9,5.8,103.2,-15.6,102.5,-35.3,98.6,-54.5,92.3,-71.6,83.2,-85.4,71.8"/>
                <positionsList name="leftFrontOut"
                               data="-41.0,50.7,-53.5,43.9,-63.8,35.3,-71.7,25.6,-76.3,14.8,-79.0,4.0,-77.9,-7.4,-74.3,-18.3,-67.5,-28.6,-57.9,-37.7,-46.4,-45.1,-32.7,-50.8,-17.6,-54.7,-2.8,-56.0,12.8,-55.3,28.0,-52.5,41.6,-47.5,53.9,-40.5,64.2,-32.0,72.2,-22.3,77.3,-11.5,79.9,-0.6,78.7,10.8,74.7,21.9,67.9,31.9,58.8,41.0,46.8,48.4,33.7,54.1,18.5,58.1,2.9,59.7,-11.9,58.7,-27.2,55.8"/>

                <positionsList name="centerFront"
                               data="-60.3,12.0,-59.1,3.4,-55.7,-5.1,-50.4,-12.6,-42.6,-19.4,-33.0,-25.1,-22.7,-29.1,-11.6,-31.4,0.6,-32.5,11.8,-31.4,23.5,-29.1,34.3,-25.1,43.0,-19.4,50.5,-12.6,56.5,-5.1,59.4,3.3,60.8,11.9,59.5,20.5,56.5,28.5,50.4,36.4,43.1,43.2,34.3,48.4,23.4,52.9,12.2,55.3,0.3,56.1,-11.3,55.3,-23.2,52.9,-33.0,48.4,-42.5,43.3,-50.0,36.5,-55.9,28.9,-59.2,20.5"/>
                <positionsList name="centerMid"
                               data="20.1,-16.6,19.6,-13.7,19.4,-11.4,16.7,-8.6,14.5,-6.3,11.5,-4.6,8.6,-3.4,4.7,-2.3,0.6,-2.0,-3.3,-2.3,-7.0,-2.9,-10.2,-4.6,-13.0,-6.3,-16.2,-8.1,-17.6,-10.8,-18.7,-13.7,-19.6,-16.2,-19.4,-19.0,-18.4,-21.7,-15.9,-24.5,-13.6,-26.8,-10.8,-28.5,-7.8,-29.7,-3.4,-30.8,-0.2,-30.9,4.1,-30.8,7.4,-29.8,11.0,-28.5,13.9,-26.8,16.3,-24.6,18.9,-22.2,19.6,-19.4"/>
                <positionsList name="centerRear"
                               data="77.9,-2.4,77.0,8.5,72.0,19.3,65.1,29.1,55.4,37.6,43.1,45.0,29.9,50.1,15.4,53.3,0.6,54.1,-14.8,53.0,-29.8,50.1,-43.3,44.7,-54.6,37.6,-64.3,29.1,-72.0,19.3,-76.2,8.5,-77.5,-2.4,-75.7,-13.7,-71.2,-24.5,-64.3,-34.2,-54.6,-42.8,-43.2,-49.7,-29.0,-55.3,-15.0,-58.2,0.2,-59.3,15.6,-58.2,30.2,-55.0,43.5,-49.6,55.4,-42.8,65.6,-34.2,72.4,-24.2,77.0,-13.7"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship66_Emed">
                    <salvo laser="centerFront"/>
                    <salvo laser="centerRear"/>
                </stage>
                <stage id="3" resKey="ship66_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontOut,rightFrontOut"/>
                    <salvo laser="centerMid"/>
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Skill Design Replacement Model 5-->
            <expansion class="67">
                <positionsList name="standard"
                               data="-11.2,-21.9,-10.6,-23.5,-9.3,-25.0,-8.1,-26.1,-6.5,-27.1,-4.5,-28.1,-2.8,-28.7,0.0,-29.2,2.3,-29.5,4.6,-28.7,6.2,-27.7,8.4,-27.1,10.0,-26.0,11.1,-24.5,11.7,-22.9,12.0,-21.5,12.0,-19.9,11.6,-18.8,10.6,-17.2,9.3,-15.7,7.7,-14.7,5.9,-14.1,3.8,-13.6,1.3,-13.1,-1.0,-13.1,-3.0,-13.6,-5.4,-14.1,-7.1,-15.1,-8.7,-16.2,-10.1,-17.4,-10.6,-18.8,-11.2,-20.3"/>

                <positionsList name="leftRear"
                               data="-14.4,-1.6,-18.5,-3.7,-22.1,-6.8,-25.0,-10.0,-26.6,-13.7,-27.1,-17.3,-26.4,-21.1,-25.0,-24.7,-22.0,-28.1,-18.4,-30.8,-12.5,-32.2,-8.2,-33.6,-3.5,-34.1,1.4,-34.1,6.4,-33.8,10.9,-33.5,14.8,-32.3,20.3,-30.4,23.1,-27.1,25.0,-22.5,26.7,-19.3,26.8,-15.7,26.3,-12.2,24.7,-8.9,22.1,-5.8,18.5,-3.2,14.7,-1.1,10.0,0.5,5.0,1.5,0.2,1.5,-5.0,1.0,-9.8,-0.0"/>
                <positionsList name="rightRear"
                               data="-14.4,-32.8,-9.6,-34.4,-4.0,-35.4,1.3,-35.6,7.1,-35.1,12.6,-33.8,17.2,-31.9,21.9,-29.7,25.1,-26.6,27.7,-22.9,28.9,-19.3,29.7,-15.6,28.5,-11.6,26.5,-7.9,24.1,-4.7,20.1,-1.8,15.8,0.5,10.6,2.0,5.4,3.1,-0.6,3.5,-6.2,3.0,-11.3,1.5,-16.0,-0.5,-20.8,-2.7,-24.2,-5.8,-26.4,-9.4,-27.9,-13.0,-28.3,-16.7,-27.4,-20.8,-25.4,-24.5,-22.1,-28.2,-19.2,-30.3"/>

                <positionsList name="rightFrontIn"
                               data="-75.6,-43.9,-65.4,-53.6,-53.3,-61.4,-39.2,-67.7,-23.2,-71.8,-6.8,-74.0,10.1,-74.1,26.8,-71.9,42.7,-67.3,58.0,-60.5,69.8,-51.8,78.5,-41.7,84.6,-31.0,87.4,-19.4,87.1,-7.9,83.6,3.5,76.6,14.0,67.2,23.4,54.4,31.7,39.9,37.8,24.2,42.1,7.2,44.1,-9.7,43.6,-26.4,41.1,-42.0,36.4,-56.4,29.9,-68.3,21.6,-77.5,11.8,-83.6,1.0,-86.6,-10.5,-86.3,-22.0,-82.5,-33.3"/>
                <positionsList name="rightFrontOut"
                               data="-44.3,-50.6,-30.9,-55.7,-16.4,-58.8,-1.0,-60.3,14.2,-59.3,28.3,-56.8,41.7,-52.3,54.0,-46.1,65.4,-38.3,72.7,-28.9,77.4,-18.9,78.9,-8.5,77.6,2.0,73.5,11.9,66.3,21.3,56.7,29.5,45.1,36.3,31.9,41.0,17.2,44.6,2.2,45.7,-12.9,44.7,-27.9,42.1,-41.4,37.4,-53.7,31.1,-63.3,22.9,-71.1,14.0,-75.8,4.1,-77.4,-6.3,-76.3,-16.7,-72.1,-26.6,-65.4,-35.9,-55.9,-43.7"/>
                <positionsList name="leftFrontIn"
                               data="-75.6,12.4,-82.0,1.5,-85.4,-9.5,-85.1,-20.9,-82.0,-32.3,-75.7,-42.7,-66.6,-52.7,-54.7,-60.9,-39.0,-67.6,-23.4,-71.5,-7.0,-73.5,9.5,-73.1,26.2,-70.8,41.5,-66.2,55.4,-59.9,67.4,-51.7,76.7,-42.2,83.3,-31.7,86.1,-20.3,86.1,-8.9,82.8,2.0,76.2,12.7,66.8,22.3,54.8,30.1,41.2,36.4,25.0,40.9,8.6,43.1,-8.6,43.1,-24.8,40.5,-40.4,36.4,-54.6,30.0,-66.3,21.8"/>
                <positionsList name="leftFrontOut"
                               data="-44.0,34.3,-55.5,27.5,-64.5,19.6,-70.6,10.4,-74.3,0.5,-75.2,-9.4,-73.2,-19.3,-68.6,-28.7,-61.0,-37.5,-50.8,-45.3,-39.2,-51.0,-25.4,-55.7,-10.8,-58.3,3.8,-58.8,18.4,-57.2,32.4,-54.1,45.4,-48.9,56.3,-42.2,65.3,-34.1,71.9,-25.0,75.7,-15.1,76.6,-5.2,74.5,4.6,69.4,14.5,62.0,22.8,52.2,30.6,40.0,36.8,26.7,41.0,12.2,43.6,-2.4,44.2,-17.1,42.6,-31.4,39.5"/>

                <positionsList name="centerFront"
                               data="-56.0,-18.8,-55.1,-26.1,-51.3,-33.3,-45.7,-40.1,-38.9,-45.8,-30.5,-50.5,-20.9,-53.9,-10.5,-56.1,2.2,-57.0,13.5,-56.0,23.6,-53.4,33.0,-49.5,41.7,-44.8,48.1,-38.5,53.1,-31.9,56.2,-24.6,57.4,-17.2,55.8,-9.9,52.7,-2.6,46.8,4.0,39.8,9.8,31.1,14.4,21.4,17.7,10.6,19.7,-0.4,20.3,-11.7,19.5,-22.2,17.1,-32.0,13.5,-40.5,8.7,-47.2,2.6,-51.9,-4.2,-55.0,-11.5"/>
                <positionsList name="centerMid"
                               data="-25.1,-31.3,-24.3,-34.9,-22.6,-38.0,-20.0,-40.8,-16.8,-43.3,-12.8,-45.3,-8.7,-46.9,-4.2,-48.0,0.8,-48.7,7.3,-48.1,11.9,-46.4,16.0,-44.9,19.5,-42.2,22.5,-39.6,24.6,-36.4,25.6,-33.3,25.9,-29.8,25.6,-26.5,23.6,-23.4,21.1,-20.3,17.7,-17.8,13.5,-15.7,9.5,-14.6,4.3,-13.6,-0.4,-13.5,-5.6,-14.1,-10.2,-15.1,-14.8,-16.7,-18.3,-18.9,-21.2,-21.9,-23.6,-24.7,-24.8,-28.1"/>
                <positionsList name="centerRear"
                               data="82.2,-12.6,81.3,-2.1,76.7,8.6,69.3,18.2,59.4,26.5,47.1,33.7,32.9,39.0,17.8,42.1,1.8,43.6,-14.3,42.6,-29.5,39.5,-43.9,34.8,-56.7,27.9,-67.1,19.6,-74.7,9.8,-79.8,-0.3,-81.4,-11.0,-79.9,-21.9,-75.6,-32.3,-68.0,-42.1,-58.4,-50.5,-45.7,-57.7,-31.6,-62.9,-16.8,-66.1,-0.7,-67.3,15.2,-66.6,30.8,-63.5,45.0,-58.5,57.6,-51.6,68.0,-43.3,75.7,-33.9,80.6,-23.5"/>

                <stage id="1">
                    <salvo laser="standard"/>
                </stage>
                <stage id="2" resKey="ship67_Emed">
                    <salvo laser="centerFront"/>
                    <salvo laser="centerRear"/>
                </stage>
                <stage id="3" resKey="ship67_Emax">
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontOut,rightFrontOut"/>
                    <salvo laser="centerMid"/>
                    <salvo laser="leftRear,rightRear"/>
                    <salvo laser="centerRear"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <expansion class="69">
                <positionsList name="rightRearInner"
                               data="10.5,-69.3,21.0,-67.2,30.8,-64.4,39.2,-60.2,46.2,-54.6,52.5,-48.3,56.0,-41.3,57.4,-33.6,57.4,-25.9,54.6,-18.2,49.7,-11.2,42.0,-4.9,32.9,0.7,22.4,4.2,10.5,7.0,-1.4,7.7,-14.0,6.3,-25.2,3.5,-35.7,-0.7,-44.8,-5.6,-51.8,-12.6,-56.0,-19.6,-58.8,-27.3,-58.8,-35.0,-56.7,-42.0,-52.5,-49.0,-46.9,-55.3,-39.2,-60.9,-30.8,-65.1,-21.0,-67.9,-10.5,-70.0,0.0,-70.0"/>
                <positionsList name="leftFrontInner"
                               data="-55.3,30.1,-60.9,21.7,-63.7,13.3,-63.7,4.2,-61.6,-4.2,-57.4,-12.6,-51.1,-19.6,-43.4,-25.9,-34.3,-30.8,-23.8,-35.0,-12.6,-37.1,-1.4,-37.8,10.5,-37.1,21.7,-35.0,32.2,-31.5,41.3,-26.6,49.7,-20.3,56.0,-13.3,60.2,-5.6,62.3,3.5,62.3,11.9,60.2,21.0,54.6,29.4,46.9,37.1,37.8,43.4,25.9,48.3,13.3,51.1,0.0,52.5,-13.3,51.8,-25.9,49.0,-37.8,44.1,-47.6,37.8"/>
                <positionsList name="rightFrontInner"
                               data="-50.4,-21.0,-42.0,-27.3,-32.9,-32.2,-22.4,-35.7,-11.2,-37.8,0.7,-38.5,11.9,-37.1,23.1,-35.0,33.6,-30.8,42.7,-25.9,50.4,-19.6,56.7,-12.6,60.9,-4.2,63.0,4.9,62.3,13.3,59.5,22.4,53.9,30.8,46.2,38.5,36.4,44.8,24.5,49.0,11.2,51.8,-2.1,53.2,-15.4,51.8,-28.0,48.3,-39.9,43.4,-49.0,37.1,-56.7,29.4,-61.6,21.0,-64.4,11.9,-64.4,2.8,-61.6,-5.6,-57.4,-14.0"/>
                <positionsList name="leftRearInner"
                               data="12.6,7.0,0.0,7.7,-11.9,7.0,-23.8,4.9,-35.0,0.7,-44.1,-4.9,-51.1,-11.2,-56.0,-18.2,-58.8,-25.9,-59.5,-33.6,-57.4,-41.3,-53.9,-48.3,-48.3,-54.6,-40.6,-60.2,-32.2,-64.4,-22.4,-67.9,-11.9,-70.0,-1.4,-70.7,9.1,-70.0,19.6,-67.9,29.4,-65.1,38.5,-60.9,45.5,-55.3,51.8,-49.0,56.0,-42.0,58.1,-35.0,58.1,-27.3,55.3,-19.6,50.4,-11.9,44.1,-5.6,35.0,0.0,24.5,4.2"/>
                <positionsList name="standart"
                               data="-102.2,21.0,-98.0,7.0,-90.3,-6.3,-79.8,-17.5,-66.5,-27.3,-51.8,-35.0,-35.7,-40.6,-18.2,-44.1,-0.7,-44.8,16.8,-44.1,34.3,-40.6,50.4,-35.0,65.1,-27.3,78.4,-17.5,88.9,-6.3,96.6,7.0,100.8,21.0,101.5,35.7,98.0,51.1,90.3,65.1,78.4,78.4,62.3,90.3,43.4,98.7,21.7,104.3,-0.7,106.4,-23.1,104.3,-44.8,98.7,-63.7,90.3,-79.8,78.4,-91.7,65.1,-99.4,51.1,-102.9,35.7"/>
                <positionsList name="fortified"
                               data="0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0,0.0,-90.0"/>

                <stage id="1">
                    <salvo laser="standart"/>
                </stage>
                <stage id="2">
                    <salvo laser="standart"/>
                </stage>
                <stage id="3" resKey="ship69_Emed">
                    <salvo laser="standart"/>
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                </stage>
                <stage id="1001">
                    <salvo laser="fortified"/>
                </stage>
            </expansion>
            <expansion class="70">
                <positionsList name="rightRearInner"
                               data="41.4,-22.0,43.7,-16.7,44.5,-10.6,43.3,-4.6,40.3,1.1,35.3,6.5,29.3,11.4,21.3,14.8,12.5,17.5,2.7,18.6,-6.8,18.2,-16.3,16.7,-24.7,13.7,-32.3,9.5,-38.0,4.9,-42.2,-0.8,-44.5,-6.8,-45.2,-12.5,-43.7,-18.6,-41.0,-23.9,-36.9,-28.9,-31.9,-33.1,-25.5,-36.5,-18.2,-39.1,-10.6,-41.0,-3.0,-41.8,4.9,-41.4,12.9,-40.3,20.1,-38.4,27.0,-35.3,33.1,-31.9,38.0,-27.4"/>
                <positionsList name="leftFrontInner"
                               data="-70.3,20.5,-70.3,10.3,-67.3,0.8,-62.3,-8.4,-55.5,-16.0,-47.1,-22.8,-37.2,-28.1,-26.6,-31.9,-15.2,-34.6,-3.4,-35.7,8.4,-35.3,19.8,-33.4,30.8,-30.4,41.0,-25.8,50.2,-19.8,58.1,-12.5,64.2,-4.2,68.4,4.9,69.9,14.8,68.8,25.1,64.6,35.3,57.4,45.2,47.1,53.6,34.6,60.4,19.8,65.0,3.8,67.3,-12.2,66.5,-27.7,63.1,-41.4,57.4,-52.8,49.8,-61.9,40.7,-67.6,30.8"/>
                <positionsList name="rightFrontInner"
                               data="-65.0,-4.2,-58.9,-12.5,-50.9,-19.8,-41.8,-25.8,-31.5,-30.4,-20.5,-33.4,-8.7,-35.3,3.0,-35.7,14.4,-34.6,25.8,-31.9,36.5,-28.1,46.4,-22.8,54.7,-16.0,61.9,-8.4,66.9,0.8,69.5,10.3,69.5,20.5,66.9,30.8,60.8,41.0,52.1,50.2,40.7,57.8,26.6,63.5,11.0,66.5,-4.9,67.3,-20.9,65.0,-35.3,60.4,-48.3,53.6,-58.1,45.2,-65.4,35.3,-69.5,25.1,-70.7,14.8,-69.2,4.9"/>
                <positionsList name="leftRearInner"
                               data="43.7,-6.8,41.4,-0.8,37.2,4.9,31.5,9.9,23.9,13.7,15.6,16.7,6.1,18.2,-3.4,18.6,-13.3,17.5,-22.0,14.8,-29.6,11.4,-36.1,6.5,-41.0,1.1,-44.1,-4.6,-45.2,-10.6,-44.5,-16.7,-42.2,-22.0,-38.8,-27.4,-33.4,-31.9,-27.7,-35.7,-20.9,-38.4,-13.3,-40.3,-5.7,-41.4,2.3,-41.8,10.3,-41.0,17.5,-39.1,24.7,-36.5,30.8,-33.1,36.1,-28.9,40.3,-23.9,43.3,-18.6,44.5,-12.5"/>
                <positionsList name="standart"
                               data="-77.5,8.7,-73.7,-1.9,-67.3,-11.4,-58.9,-19.8,-48.6,-26.2,-37.6,-31.9,-25.8,-35.7,-13.3,-38.0,-0.4,-38.8,12.5,-38.0,25.1,-35.7,36.9,-31.9,48.3,-26.6,58.1,-19.8,66.5,-11.4,73.0,-1.9,76.8,8.7,78.3,20.1,76.4,31.9,71.1,43.3,61.9,54.3,49.8,63.5,35.0,70.7,17.9,75.6,-0.4,77.1,-18.6,75.6,-35.7,70.7,-50.5,63.5,-62.7,54.3,-71.8,43.3,-76.8,31.9,-78.7,20.1"/>

                <stage id="1">
                    <salvo laser="standart"/>
                </stage>
                <stage id="2">
                    <salvo laser="standart"/>
                </stage>
                <stage id="3" resKey="ship70_Emed">
                    <salvo laser="standart"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                </stage>

            </expansion>
            <expansion class="72">
                <positionsList name="leftFrontInner"
                               data="0.0,2.3,-9.1,1.5,-17.5,-0.4,-25.1,-3.4,-31.9,-7.6,-36.9,-12.5,-40.3,-18.2,-42.2,-24.3,-42.2,-30.0,-40.3,-35.7,-36.9,-41.0,-32.3,-46.0,-26.6,-49.8,-19.8,-52.8,-12.5,-55.1,-4.6,-56.2,3.4,-56.2,11.4,-55.1,18.6,-53.2,25.5,-50.2,31.5,-46.0,36.1,-41.4,39.5,-36.1,41.4,-30.4,41.4,-24.3,39.9,-18.6,36.5,-12.9,31.5,-8.0,25.1,-3.8,17.5,-0.4,8.7,1.5,0.0,2.3"/>
                <positionsList name="rightFrontInner"
                               data="0.0,-56.2,8.0,-55.5,15.6,-54.0,22.4,-51.3,28.9,-47.9,34.2,-43.7,38.0,-38.4,40.7,-33.1,41.4,-27.0,40.7,-21.3,38.0,-15.6,33.8,-10.3,27.7,-5.7,20.9,-1.9,12.5,0.8,3.8,1.9,-4.9,1.9,-13.7,0.4,-22.0,-1.9,-28.9,-5.7,-34.6,-10.3,-38.8,-15.6,-41.4,-21.7,-42.2,-27.4,-41.0,-33.4,-38.4,-38.8,-34.6,-43.7,-29.3,-48.3,-22.8,-51.7,-15.6,-54.3,-8.0,-55.9,0.0,-56.2"/>
                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                </stage>
            </expansion>

            <expansion class="74">
                <positionsList name="center_middle_"
                               data="-158.4,9.0,-154.8,-15.3,-144.9,-38.7,-127.8,-60.3,-105.3,-79.2,-79.2,-94.5,-47.7,-105.3,-14.4,-112.5,19.8,-115.2,54.0,-112.5,87.3,-104.4,117.0,-92.7,144.0,-77.4,165.6,-57.6,181.8,-36.0,190.8,-12.6,194.4,11.7,189.9,36.0,180.0,59.4,162.9,81.0,141.3,99.9,114.3,115.2,83.7,126.9,50.4,133.2,16.2,135.9,-18.0,133.2,-51.3,126.0,-81.9,113.4,-108.0,98.1,-129.6,79.2,-145.8,56.7,-155.7,33.3"/>
                <stage id="1">
                    <salvo laser="center_middle_"/>
                </stage>
            </expansion>

            <expansion class="75">
                <positionsList name="center"
                               data="-39.1,4.6,-37.0,-0.7,-33.8,-5.5,-29.5,-9.8,-24.5,-13.2,-18.7,-15.8,-12.7,-17.8,-6.5,-19.0,0.0,-19.4,6.5,-19.0,12.7,-18.0,18.7,-16.1,24.5,-13.4,29.5,-10.1,33.8,-6.0,37.2,-1.2,39.6,4.1,40.3,9.8,39.6,15.8,37.2,21.8,32.6,27.4,26.6,32.4,19.0,36.2,10.1,38.6,0.7,39.6,-8.9,38.9,-17.8,36.5,-25.4,32.6,-31.7,27.8,-36.2,22.3,-38.9,16.3,-39.8,10.3"/>
                <stage id="1">
                    <salvo laser="center"/>
                </stage>
            </expansion>

            <expansion class="76">
                <positionsList name="bottomInner"
                               data="-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5,-2.0,27.5"/>
                <stage id="1">
                    <salvo laser="bottomInner"/>
                </stage>
            </expansion>

            <expansion class="81">
                <positionsList name="leftFrontOuter"
                               data="-37.0,8.0,-37.8,3.0,-37.0,-2.2,-35.0,-7.0,-31.6,-11.4,-27.2,-15.2,-21.8,-18.4,-15.8,-20.8,-9.4,-22.4,-2.6,-23.0,4.4,-23.0,11.0,-22.0,17.4,-20.2,23.4,-17.6,28.4,-14.4,32.8,-10.4,35.8,-6.0,37.6,-1.0,38.0,4.0,37.0,9.2,34.4,14.2,30.4,18.6,25.0,22.6,18.6,25.8,11.2,27.8,3.4,29.0,-4.6,28.8,-12.4,27.6,-19.6,25.2,-26.0,21.8,-31.0,17.8,-34.8,13.0"/>
                <positionsList name="rightFrontOuter"
                               data="-35.4,-6.0,-32.2,-10.6,-28.0,-14.4,-23.0,-17.8,-17.0,-20.2,-10.6,-22.0,-3.8,-23.0,3.0,-23.0,9.8,-22.2,16.2,-20.6,22.2,-18.2,27.6,-15.0,32.0,-11.2,35.2,-6.8,37.4,-2.0,38.0,3.0,37.2,8.2,35.0,13.2,31.2,17.8,26.2,21.8,20.0,25.2,12.8,27.6,5.0,28.8,-3.2,29.0,-11.0,27.8,-18.4,25.6,-24.8,22.6,-30.2,18.6,-34.2,14.0,-36.6,9.0,-37.6,4.0,-37.2,-1.2"/>

                <stage id="1">
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with Streuner Model-->
            <!--             <expansion class="84"> -->
            <!--                 <positionsList name="standard" data="-45.8,2.1,-44.9,-4.3,-42.1,-10.4,-37.9,-16.0,-32.4,-20.9,-25.3,-24.9,-17.5,-27.8,-8.9,-29.7,0.1,-30.4,9.0,-29.7,17.6,-27.8,25.4,-24.8,32.4,-20.8,38.1,-15.9,42.4,-10.4,45.0,-4.2,45.8,2.1,44.9,8.4,42.3,14.5,38.2,20.0,32.3,25.0,25.5,29.0,17.6,32.0,8.9,33.9,0.1,34.4,-8.9,33.9,-17.5,32.0,-25.4,29.0,-32.2,25.0,-37.9,20.0,-42.1,14.4,-45.0,8.4" /> -->

            <!--                  <stage id="1" > -->
            <!--                    <salvo laser="standard" /> -->
            <!--                  </stage> -->
            <!--              </expansion>			  -->

            <expansion class="84">
                <positionsList name="centerFront"
                               data="-48.4,4.6,-46.1,-2.0,-42.3,-7.8,-37.1,-13.0,-31.0,-17.4,-24.1,-20.6,-16.5,-23.2,-8.4,-24.6,-0.3,-25.2,7.8,-24.6,15.7,-23.2,23.2,-20.9,30.4,-17.4,36.5,-13.0,41.5,-7.8,45.5,-2.0,47.6,4.3,48.1,11.3,46.7,18.3,43.2,25.2,37.7,31.6,30.4,37.1,21.2,41.2,10.7,43.8,-0.3,45.0,-11.0,44.1,-21.5,41.2,-30.7,37.1,-38.3,31.6,-43.8,25.2,-47.3,18.6,-48.7,11.6"/>
                <stage id="1">
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>
            <!--    Expansions for ships compatible with StreuneR Model-->
            <expansion class="85">
                <positionsList name="leftFrontInner"
                               data="-39.6,31.3,-45.7,24.8,-50.0,17.6,-52.2,10.4,-52.2,3.2,-50.4,-4.0,-46.4,-10.4,-41.4,-15.8,-34.9,-20.9,-27.4,-24.8,-19.4,-27.7,-10.8,-29.5,-1.8,-30.2,7.2,-29.9,15.8,-28.4,24.1,-25.9,32.0,-22.3,38.5,-17.6,44.3,-12.2,48.6,-6.1,51.1,0.7,51.8,7.9,50.4,15.5,46.8,22.7,41.0,29.2,33.5,34.9,23.8,39.6,13.0,42.5,1.8,43.9,-10.1,43.2,-21.2,40.7,-31.0,36.7"/>
                <positionsList name="rightFrontInner"
                               data="-32.8,-22.0,-24.8,-25.6,-16.9,-28.1,-7.9,-29.5,0.7,-29.9,9.7,-29.2,18.4,-27.4,26.3,-24.5,33.8,-20.9,40.3,-16.2,45.4,-10.4,49.0,-4.0,51.1,2.9,51.1,10.1,49.0,17.3,45.0,24.5,38.5,31.0,30.6,36.4,20.5,40.3,9.7,42.8,-1.8,43.6,-13.3,42.1,-23.8,39.6,-33.5,34.9,-41.0,29.2,-46.8,22.7,-50.4,15.5,-51.8,8.3,-51.5,1.1,-49.0,-5.8,-45.0,-11.9,-39.2,-17.3"/>
                <positionsList name="centerFront"
                               data="-68.0,9.4,-64.8,0.0,-59.0,-8.3,-51.8,-15.5,-43.2,-21.6,-33.5,-26.3,-22.7,-29.9,-11.9,-32.0,-0.4,-32.8,10.8,-32.0,22.0,-29.9,32.4,-26.3,42.1,-21.6,51.1,-15.8,58.3,-8.3,64.1,0.0,67.3,9.0,68.4,19.1,66.6,29.2,61.9,39.2,54.4,48.6,43.6,56.5,30.6,63.0,15.8,67.0,0.0,68.4,-16.2,67.0,-31.0,63.0,-44.3,56.9,-54.7,48.6,-62.6,39.2,-67.3,29.2,-69.1,19.1"/>

                <!-- TODO: Adapting/Adding salvos for each expansion (stage)  -->
                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner,centerFront"/>
                </stage>
            </expansion>
            <expansion class="90">
                <positionsList name="rightFrontIn"
                               data="-265.0,-39.0,-249.9,-75.0,-224.8,-108.0,-190.6,-137.1,-147.9,-161.0,-101.6,-178.1,-51.6,-189.1,1.0,-193.1,59.0,-189.1,109.8,-176.6,155.6,-158.1,197.1,-134.0,229.2,-104.0,254.1,-71.0,269.1,-35.0,272.4,2.9,267.1,40.0,251.2,76.0,225.4,108.9,191.3,137.7,151.1,161.0,103.2,179.0,52.0,189.5,-0.9,193.0,-52.9,189.0,-104.9,178.0,-150.9,160.0,-192.0,136.0,-226.8,107.0,-251.0,73.0,-266.9,37.0,-270.9,-1.0"/>
                <positionsList name="leftFrontIn"
                               data="-266.5,42.5,-273.2,4.9,-268.6,-33.1,-253.9,-70.0,-228.9,-104.0,-196.9,-134.0,-157.4,-158.3,-111.5,-177.1,-56.1,-189.3,-1.5,-193.1,50.6,-189.1,102.2,-179.0,148.4,-161.1,191.1,-138.0,224.4,-109.1,250.4,-76.1,266.8,-40.1,273.2,-3.0,270.1,34.0,254.6,70.9,231.1,104.0,198.2,134.0,158.0,158.5,112.1,177.0,61.1,189.0,7.2,194.0,-45.9,191.0,-97.9,181.0,-145.9,164.0,-188.4,140.9,-223.6,111.9,-250.2,78.9"/>
                <positionsList name="rightFrontOut"
                               data="-214.4,-67.1,-191.9,-96.0,-161.9,-121.0,-125.9,-141.0,-83.9,-156.0,-40.0,-165.0,4.2,-167.1,47.6,-163.5,91.2,-154.3,136.4,-138.5,169.2,-116.3,198.2,-91.0,218.2,-62.0,230.2,-31.0,234.1,1.0,229.1,33.0,214.3,63.7,191.8,91.9,164.1,116.0,128.1,136.0,88.1,151.0,44.1,160.0,-1.9,163.0,-46.0,159.0,-91.6,149.9,-130.0,134.0,-166.5,113.5,-193.9,88.0,-216.5,59.5,-228.0,28.0,-232.8,-4.0,-228.4,-36.1"/>
                <positionsList name="leftFrontOut"
                               data="-213.9,67.0,-228.9,36.0,-234.0,3.0,-232.6,-29.1,-219.9,-61.0,-199.7,-90.1,-171.8,-116.1,-139.4,-138.3,-94.1,-155.0,-50.3,-164.6,-5.7,-168.3,41.1,-166.0,84.2,-157.0,126.1,-143.0,163.1,-123.0,191.8,-98.1,215.2,-70.0,229.5,-39.5,235.4,-7.1,233.1,25.0,222.1,56.0,200.3,85.7,174.0,111.0,139.1,133.0,100.0,149.0,55.1,160.0,8.5,164.7,-37.6,162.9,-80.9,154.0,-122.9,140.0,-159.9,120.0,-191.0,95.5"/>
                <positionsList name="rightRearIn"
                               data="-58.8,-64.0,-50.9,-72.0,-42.9,-79.0,-33.5,-84.1,-22.6,-88.1,-11.3,-90.7,-0.3,-93.3,14.6,-95.6,31.6,-92.6,48.7,-86.6,57.5,-75.9,63.9,-66.3,67.6,-56.5,69.3,-47.1,67.6,-37.1,65.2,-28.0,61.1,-20.0,53.1,-12.0,43.4,-5.1,33.2,-0.0,20.5,3.5,9.0,5.0,-5.0,5.5,-18.6,3.9,-29.0,-0.0,-40.9,-5.0,-51.6,-11.1,-57.9,-19.0,-62.0,-28.0,-65.9,-37.0,-66.8,-46.0,-64.2,-55.1"/>
                <positionsList name="leftRearIn"
                               data="-57.9,-18.0,-65.4,-26.1,-68.8,-36.0,-70.4,-45.3,-69.8,-55.6,-66.5,-65.4,-61.1,-77.6,-48.0,-87.5,-30.0,-93.1,-15.1,-94.8,-3.2,-92.4,8.9,-91.3,21.0,-89.3,32.4,-85.1,43.2,-80.0,52.3,-73.3,61.1,-66.0,66.1,-57.0,69.1,-48.0,68.3,-38.3,67.2,-29.0,62.2,-20.0,55.2,-12.0,45.4,-5.1,36.0,-0.0,23.1,4.0,10.1,6.0,-4.2,6.9,-16.9,5.0,-29.6,1.9,-41.6,-3.1,-49.9,-10.0"/>
                <positionsList name="rightRearOut"
                               data="30.4,-4.1,15.2,-1.0,-0.6,-0.1,-16.6,-1.1,-33.7,-5.1,-50.1,-11.7,-63.5,-21.6,-72.6,-32.5,-67.6,-42.5,-72.1,-50.8,-74.6,-59.7,-74.1,-69.3,-70.7,-79.1,-65.2,-88.1,-53.9,-97.0,-41.9,-104.0,-27.9,-109.0,-13.0,-112.0,2.1,-113.0,18.0,-112.0,31.4,-108.1,45.2,-103.0,57.2,-96.0,68.1,-88.0,75.1,-78.0,78.4,-67.1,79.8,-56.1,78.4,-45.1,75.1,-35.0,67.1,-25.0,56.6,-16.1,44.3,-9.3"/>
                <positionsList name="leftRearOut"
                               data="32.0,-106.0,43.3,-100.3,56.0,-94.0,63.4,-85.1,67.6,-76.3,69.4,-67.3,69.0,-59.1,67.2,-51.6,74.0,-43.0,67.8,-31.6,57.2,-20.8,43.4,-12.6,28.7,-7.1,13.6,-4.1,0.1,-4.0,-14.9,-5.0,-28.9,-8.0,-41.8,-13.0,-51.9,-20.0,-61.9,-28.0,-68.8,-37.0,-72.9,-47.0,-74.7,-57.3,-71.9,-68.0,-67.0,-78.0,-60.9,-87.0,-50.9,-95.0,-40.6,-101.1,-26.8,-106.0,-12.9,-109.0,2.1,-110.0,18.0,-109.0"/>

                <stage id="1">
                    <salvo laser="leftRearIn,rightRearIn"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="leftFrontOut,rightFrontOut"/>
                    <salvo laser="leftRearOut,rightRearOut"/>
                </stage>
            </expansion>

            <expansion class="91">
                <positionsList name="rightFrontIn"
                               data="-104.9,-15.2,-99.2,-29.3,-88.8,-42.5,-74.9,-54.2,-58.5,-63.6,-40.1,-70.6,-20.1,-74.5,0.2,-76.1,22.3,-74.5,43.2,-69.9,61.3,-62.6,77.7,-53.0,90.5,-41.3,99.9,-28.1,106.1,-14.0,108.1,0.8,105.7,15.6,99.9,29.6,89.1,42.9,76.1,54.2,59.7,63.6,41.0,70.6,20.8,74.9,-0.3,76.3,-21.0,74.9,-41.2,70.6,-59.9,63.5,-75.6,53.8,-89.8,42.5,-99.4,29.2,-105.3,14.8,-107.7,-0.0"/>
                <positionsList name="leftFrontIn"
                               data="-104.9,16.4,-107.6,1.6,-106.2,-13.3,-100.5,-27.8,-90.1,-41.3,-77.5,-53.1,-61.9,-62.8,-43.6,-70.0,-21.6,-74.7,-0.8,-76.2,20.4,-74.9,40.6,-70.6,59.0,-63.6,75.4,-54.2,89.0,-42.9,99.5,-30.0,105.4,-15.7,108.4,-1.2,106.9,13.6,100.7,28.1,91.3,41.3,78.0,53.0,62.1,62.8,43.4,70.2,23.3,74.8,2.8,76.4,-18.3,75.3,-39.0,71.4,-58.0,64.7,-74.4,55.4,-88.4,44.0,-98.6,30.8"/>
                <positionsList name="rightRearIn"
                               data="-24.5,-25.0,-21.7,-28.2,-17.5,-31.2,-13.5,-33.2,-8.8,-34.8,-4.8,-36.0,-0.3,-36.9,5.0,-37.2,12.5,-36.4,19.3,-33.6,22.7,-29.9,25.0,-26.2,27.0,-22.6,27.7,-18.7,27.5,-14.8,27.3,-11.3,25.4,-7.8,21.7,-4.3,18.2,-1.6,14.5,0.4,9.4,1.9,3.6,3.0,-1.5,3.1,-6.6,2.3,-12.0,1.2,-16.6,-0.8,-20.2,-3.5,-23.4,-6.6,-25.7,-10.1,-27.2,-13.7,-27.2,-17.6,-26.1,-21.5"/>
                <positionsList name="leftRearIn"
                               data="-24.2,-7.0,-26.5,-10.5,-27.3,-14.4,-27.3,-18.3,-27.2,-22.3,-26.2,-26.0,-24.0,-30.3,-20.2,-33.8,-11.7,-36.3,-5.8,-37.3,-0.9,-36.8,3.4,-36.1,8.3,-35.1,13.4,-33.6,18.4,-31.6,21.9,-28.9,25.4,-25.7,27.7,-22.2,28.1,-18.3,28.1,-14.4,27.1,-10.6,25.0,-7.0,22.3,-3.9,18.4,-1.2,13.4,1.1,8.3,2.7,3.0,3.5,-2.3,3.5,-7.7,2.7,-12.5,1.2,-17.6,-0.8,-21.5,-3.6"/>
                <positionsList name="rightRearOut"
                               data="10.9,-41.3,15.6,-39.4,20.3,-37.1,23.8,-33.9,26.2,-30.4,26.8,-27.0,26.8,-23.5,26.2,-20.1,28.9,-16.8,26.4,-12.6,22.5,-8.8,17.2,-5.6,12.2,-3.5,6.7,-2.3,1.6,-2.0,-4.6,-2.0,-10.1,-3.1,-14.4,-5.1,-19.1,-7.4,-23.3,-10.2,-26.0,-13.7,-27.6,-17.6,-28.4,-21.5,-28.0,-25.4,-26.5,-29.3,-24.1,-32.8,-20.9,-35.9,-16.3,-38.6,-11.8,-40.6,-5.8,-42.1,-0.3,-42.5,4.9,-42.1"/>
                <positionsList name="leftRearOut"
                               data="10.3,-1.6,5.1,-0.8,-1.5,-0.4,-7.0,-1.2,-13.6,-2.7,-19.6,-5.2,-24.8,-8.4,-28.4,-12.7,-26.5,-17.0,-28.2,-20.4,-28.9,-23.9,-28.9,-27.5,-26.8,-31.6,-23.8,-35.1,-19.9,-38.2,-15.1,-40.6,-9.3,-42.5,-4.1,-43.3,2.0,-43.7,7.6,-42.9,13.7,-41.7,18.4,-39.4,23.4,-36.7,26.6,-33.2,29.0,-29.3,30.8,-25.4,30.9,-21.1,29.8,-16.8,28.1,-12.9,25.4,-9.4,20.8,-5.9,16.0,-3.5"/>


                <stage id="1">
                    <salvo laser="leftRearIn,rightRearIn"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="leftRearOut,rightRearOut"/>
                </stage>

            </expansion>
            <expansion class="92">
                <positionsList name="rightFrontIn"
                               data="-76.3,-10.6,-72.9,-21.1,-67.9,-30.8,-59.0,-39.8,-48.0,-47.5,-35.5,-53.3,-22.4,-57.2,-8.3,-59.7,8.3,-59.6,23.5,-57.3,36.8,-52.9,49.5,-47.0,60.1,-39.4,68.7,-30.7,73.6,-20.7,76.4,-10.2,76.4,0.4,74.0,10.6,67.7,20.5,59.6,29.3,48.8,36.9,36.6,42.7,22.6,46.8,7.9,48.9,-7.1,48.9,-21.9,47.0,-36.0,43.0,-48.4,36.9,-59.4,29.6,-67.6,20.6,-73.4,10.8,-76.5,0.4"/>
                <positionsList name="leftFrontIn"
                               data="-76.2,1.4,-77.0,-9.2,-74.1,-19.7,-68.8,-29.8,-60.3,-38.9,-49.8,-46.6,-37.8,-52.8,-24.3,-57.2,-8.5,-59.6,7.1,-59.7,21.8,-57.6,35.3,-53.5,48.0,-47.6,58.7,-40.4,67.7,-31.7,73.5,-21.8,76.9,-11.5,77.3,-1.0,74.1,9.6,68.7,19.6,61.0,28.3,50.9,36.0,38.1,42.2,24.6,46.5,9.7,48.9,-5.7,49.3,-20.5,47.5,-34.5,43.7,-46.9,37.9,-58.4,30.6,-66.7,21.6,-73.3,12.0"/>
                <positionsList name="rightRearOut"
                               data="13.0,-34.6,20.7,-32.2,27.9,-28.8,33.8,-24.5,39.4,-19.7,41.8,-13.9,42.0,-8.3,40.7,-3.2,45.1,1.0,41.0,8.8,34.7,14.6,28.1,19.1,21.0,22.5,13.9,24.5,5.3,25.9,-3.3,25.9,-11.9,24.9,-19.6,22.6,-26.4,19.2,-32.6,14.9,-37.4,10.1,-41.5,4.7,-42.7,-1.4,-43.5,-7.2,-41.2,-13.4,-39.0,-18.8,-33.5,-24.0,-27.7,-28.3,-20.9,-31.7,-12.9,-34.1,-4.3,-35.5,4.4,-35.5"/>
                <positionsList name="leftRearOut"
                               data="13.0,25.9,3.7,27.3,-4.3,26.9,-13.8,25.8,-21.6,23.0,-29.2,19.6,-36.8,14.8,-43.0,8.7,-42.5,-3.7,-43.6,-8.8,-41.7,-14.9,-39.1,-20.2,-33.5,-25.4,-27.3,-29.8,-19.6,-33.1,-11.0,-35.5,-2.8,-36.5,6.3,-36.5,14.4,-35.0,22.6,-32.6,29.5,-28.8,36.1,-24.5,40.4,-19.2,44.2,-13.4,45.2,-7.2,45.2,-1.0,43.1,5.2,39.5,11.0,35.1,15.8,28.8,20.2,20.8,23.9,25.4,19"/>


                <stage id="1">
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="leftRearOut,rightRearOut"/>
                </stage>

            </expansion>

            <expansion class="95">
                <positionsList name="rightFrontIn"
                               data="-91.4,-3.7,-88.4,-16.3,-81.9,-28.2,-72.0,-39.1,-59.5,-48.3,-44.5,-55.6,-28.3,-60.6,-10.9,-63.3,7.9,-63.6,26.1,-61.2,42.9,-56.5,57.4,-49.3,70.5,-40.5,80.7,-29.9,88.1,-18.4,91.9,-5.8,92.2,6.8,88.8,19.4,82.2,31.2,72.8,41.8,60.2,51.0,45.1,58.4,28.7,63.6,11.3,66.3,-6.8,66.6,-24.1,64.3,-41.4,59.8,-57.0,53.0,-70.1,44.2,-80.2,33.6,-87.4,21.8,-91.1,9.2"/>
                <positionsList name="leftFrontIn"
                               data="-92.2,7.8,-92.0,-5.1,-88.2,-17.9,-81.3,-29.6,-70.7,-40.5,-58.0,-49.3,-43.1,-56.5,-26.6,-61.2,-8.1,-63.6,10.3,-63.4,28.3,-60.9,44.9,-55.8,59.9,-48.6,72.4,-39.4,81.9,-28.6,89.1,-17.0,92.5,-4.4,92.5,8.2,88.8,20.7,81.4,32.6,71.2,43.2,58.8,52.0,43.9,59.2,26.9,64.1,9.0,66.6,-9.1,66.6,-27.0,64.2,-43.5,59.2,-58.4,52.0,-71.0,42.8,-81.5,32.3,-88.3,20.4"/>
                <positionsList name="rightRearOut"
                               data="-41.7,14.9,-47.9,8.5,-52.7,1.5,-55.0,-6.1,-55.7,-13.9,-54.5,-21.5,-51.1,-29.0,-45.7,-35.9,-35.0,-41.7,-26.6,-45.7,-16.9,-48.6,-6.4,-50.3,4.2,-50.3,14.7,-49.0,24.9,-46.3,34.1,-42.2,42.5,-37.1,48.4,-30.6,53.4,-23.8,55.8,-16.3,55.8,-8.5,54.4,-1.0,50.7,6.1,44.5,12.9,37.4,18.4,28.1,23.1,18.4,26.2,8.2,27.9,-3.0,28.2,-14.4,27.2,-24.7,24.5,-33.9,20.4"/>
                <positionsList name="leftRearOut"
                               data="-41.5,-36.0,-33.6,-41.5,-24.8,-45.6,-15.2,-48.3,-4.6,-49.7,6.5,-49.6,16.5,-48.0,25.4,-45.3,33.9,-41.5,44.2,-36.2,49.9,-29.3,53.1,-21.9,54.7,-14.3,54.5,-6.8,52.3,0.6,48.3,7.5,42.5,13.6,34.1,19.0,25.6,23.1,16.0,25.8,5.5,27.2,-5.4,27.2,-16.2,25.8,-25.8,22.8,-34.9,18.7,-42.4,13.2,-47.9,6.8,-52.4,-0.0,-54.5,-7.5,-54.0,-15.3,-51.7,-22.8,-48.0,-29.6"/>
                <positionsList name="rightRearIn"
                               data="4.4,-36.0,8.6,-35.0,13.0,-33.7,16.4,-31.6,18.8,-29.3,20.3,-26.6,21.1,-24.1,21.8,-21.6,25.6,-18.5,24.3,-15.1,21.9,-11.1,18.3,-8.0,14.3,-5.6,10.6,-4.1,6.1,-3.1,1.1,-2.4,-3.4,-2.7,-8.2,-3.4,-11.9,-5.1,-16.1,-6.8,-18.7,-9.5,-21.4,-12.2,-22.7,-15.3,-23.1,-18.7,-23.5,-21.8,-21.7,-25.2,-19.7,-28.2,-17.3,-30.6,-13.6,-33.0,-9.5,-34.7,-5.1,-35.7,-0.9,-36.1"/>
                <positionsList name="leftRearIn"
                               data="3.8,-1.4,-0.7,-1.4,-6.0,-1.8,-10.8,-3.1,-15.8,-4.9,-20.2,-7.6,-23.8,-11.3,-25.9,-15.1,-22.9,-18.6,-23.2,-21.6,-23.0,-24.4,-22.1,-27.1,-19.7,-29.9,-16.3,-32.6,-12.2,-34.7,-8.1,-36.0,-3.7,-36.8,1.7,-37.1,6.8,-36.7,11.0,-35.4,15.3,-33.7,19.1,-31.3,22.1,-28.6,24.5,-25.5,25.5,-22.1,25.3,-18.4,24.9,-15.0,23.0,-11.6,20.5,-8.6,17.7,-6.1,13.9,-4.1,8.9,-2.4"/>


                <stage id="1">
                    <salvo laser="leftRearIn,rightRearIn"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                    <salvo laser="leftRearOut,rightRearOut"/>
                </stage>

            </expansion>
            <expansion class="98">
                <positionsList name="rightFrontIn"
                               data="-74.6,-12.8,-69.0,-22.8,-60.5,-31.8,-49.5,-39.6,-36.8,-45.7,-22.4,-49.7,-7.2,-52.0,8.2,-52.0,23.1,-49.8,37.4,-45.7,49.8,-39.4,60.6,-31.8,69.4,-22.8,75.2,-12.8,78.4,-2.0,78.4,8.8,75.3,19.5,69.4,29.5,60.8,38.5,50.0,46.1,37.0,52.4,23.0,56.5,7.7,58.6,-7.6,58.6,-22.8,56.4,-36.9,52.3,-49.4,46.1,-60.2,38.5,-68.8,29.5,-74.9,19.5,-77.7,8.7,-77.7,-2.1"/>
                <positionsList name="leftFrontIn"
                               data="-74.9,19.1,-77.3,8.3,-77.3,-2.5,-74.5,-13.1,-68.3,-23.2,-59.8,-32.2,-48.6,-39.8,-35.9,-45.7,-22.0,-49.7,-7.2,-51.6,8.4,-51.6,23.2,-49.3,37.5,-45.3,50.2,-39.2,60.8,-31.4,69.1,-22.3,75.2,-12.4,78.0,-1.6,78.0,9.2,75.2,19.6,68.7,29.9,60.0,38.8,49.3,46.3,36.3,52.4,22.2,56.4,7.7,58.3,-8.0,58.3,-22.9,56.0,-37.2,51.9,-49.5,45.7,-60.3,38.0,-68.8,29.0"/>
                <positionsList name="rightRearOut"
                               data="-27.4,-36.7,-16.2,-39.8,-5.2,-41.2,6.5,-41.2,17.7,-39.4,28.5,-36.3,38.3,-31.7,46.4,-25.9,52.7,-19.1,57.2,-11.5,59.0,-3.4,59.4,4.7,56.8,12.8,52.3,20.5,45.6,27.2,37.5,33.0,27.6,37.5,16.9,40.7,5.5,42.1,-6.1,42.0,-17.1,40.3,-27.9,37.1,-37.7,32.6,-45.8,26.8,-52.4,20.0,-56.6,12.3,-58.8,4.2,-58.7,-3.9,-56.4,-12.0,-51.7,-19.6,-45.3,-26.4,-36.8,-32.2"/>
                <positionsList name="leftRearOut"
                               data="-27.0,37.1,-36.8,32.6,-45.2,27.0,-51.5,20.2,-56.1,12.8,-58.3,4.7,-58.4,-3.4,-56.2,-11.5,-51.7,-19.1,-45.4,-25.9,-37.3,-31.7,-27.8,-36.2,-17.0,-39.4,-5.8,-40.8,5.6,-41.0,16.8,-39.4,27.6,-36.3,37.2,-31.8,45.5,-26.0,51.8,-19.2,56.7,-11.9,58.7,-3.9,59.0,4.3,56.4,12.3,52.0,20.0,45.6,26.7,37.6,32.6,28.1,37.1,17.6,40.3,6.3,41.8,-5.4,42.0,-16.6,40.3"/>

                <stage id="1">
                    <salvo laser="leftRearOut,rightRearOut"/>
                    <salvo laser="leftFrontIn,rightFrontIn"/>
                </stage>

            </expansion>

            <!-- 			 OLD UNNAMED DREADNOUGHT EXPANSION CLASS; Maksym made some changes to laser positions, so I (Jonny) just re-did the whole ship in the Pipeline assets. -->
            <!-- 			  <expansion class="99"> -->
            <!-- 				<positionsList name="rightFrontIn" data="-33.9,-11.8,-26.9,-16.7,-18.5,-20.2,-11.1,-22.1,-3.6,-22.8,4.7,-22.8,12.6,-21.7,20.2,-19.1,27.0,-15.7,33.5,-11.4,37.8,-6.1,41.1,-0.4,43.0,5.7,43.0,12.2,41.5,18.2,38.1,24.3,33.3,29.6,27.8,34.0,20.7,37.6,13.3,39.9,4.8,41.4,-3.3,41.4,-11.5,40.2,-19.0,37.8,-25.8,34.2,-31.8,30.0,-36.4,24.7,-39.8,19.0,-41.8,12.8,-42.0,6.4,-41.0,-0.1,-39.9,-3.1"/> -->
            <!-- 				<positionsList name="leftFrontIn" data="-41.8,6.5,-40.2,0.4,-37.4,-5.5,-32.6,-11.0,-26.6,-15.6,-20.1,-19.0,-12.1,-21.7,-4.4,-22.8,3.5,-23.0,11.3,-22.5,18.8,-20.6,28.3,-17.2,34.3,-12.6,38.7,-6.9,41.6,-0.8,43.1,5.7,43.0,12.1,41.5,18.2,38.4,24.2,33.8,29.5,27.8,34.1,21.4,37.6,13.5,40.2,5.4,41.4,-2.6,41.4,-11.0,40.3,-18.9,38.0,-25.8,34.6,-31.9,30.2,-36.7,25.1,-39.9,19.0,-41.0,16.0"/> -->

            <!-- 				 <stage id="1" > -->
            <!-- 			       	<salvo laser="leftFrontIn,rightFrontIn" /> -->
            <!-- 				 </stage> -->
            <!-- 			 </expansion>		  -->

            <expansion class="99">
                <positionsList name="leftFrontOuter"
                               data="-40.7,17.1,-42.2,11.0,-42.6,4.6,-41.0,-1.5,-38.0,-7.6,-33.4,-12.9,-27.4,-17.5,-20.5,-20.9,-12.9,-23.6,-4.9,-25.1,3.4,-25.1,11.8,-23.9,19.8,-21.7,26.6,-18.2,32.7,-13.7,37.2,-8.4,40.7,-2.7,42.6,3.8,42.6,9.9,41.0,16.3,38.0,22.0,33.4,27.4,27.4,31.9,20.5,35.7,12.9,38.0,4.9,39.5,-3.4,39.5,-11.8,38.4,-19.4,36.1,-26.6,32.7,-32.7,28.1,-37.2,22.8"/>
                <positionsList name="rightFrontOuter"
                               data="-35.3,-1.1,-32.3,-6.5,-28.1,-10.6,-23.2,-14.8,-17.1,-17.9,-10.3,-19.8,-3.0,-20.9,4.2,-20.5,11.4,-19.4,17.9,-17.5,23.9,-14.1,28.9,-10.3,32.7,-5.7,35.7,-0.4,36.9,4.9,36.9,10.3,35.3,15.6,32.3,20.9,28.5,25.5,23.2,29.3,17.1,32.3,10.3,34.2,3.0,35.3,-4.2,35.0,-11.0,33.8,-17.9,31.9,-23.9,28.9,-28.9,24.7,-32.7,20.1,-35.3,15.2,-36.9,9.5,-36.9,4.2"/>

                <stage id="1">
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                </stage>
            </expansion>


            <expansion class="100">
                <positionsList name="centerFront"
                               data="-20.5,-1.6,-20.1,-4.4,-19.0,-7.2,-16.8,-9.7,-14.3,-11.9,-11.7,-13.7,-8.5,-15.3,-4.6,-16.8,0.6,-17.5,4.5,-16.7,8.2,-15.3,11.3,-13.7,14.5,-11.9,17.0,-9.7,18.8,-7.2,20.1,-4.4,20.6,-1.8,20.2,1.1,18.7,3.9,16.9,6.4,14.4,8.5,11.3,10.4,8.0,11.5,3.9,12.5,-0.1,12.8,-4.0,12.5,-7.5,11.5,-11.3,10.4,-14.6,8.6,-17.1,6.4,-18.9,3.9,-20.0,1.1"/>

                <stage id="1">
                    <salvo laser="centerFront"/>
                </stage>
            </expansion>

            <!-- Expansion for crazy alien 1100101 -->
            <expansion class="104">
                <positionsList name="centerFront"
                               data="-37.7,-35.4,-35.4,-40.0,-32.3,-43.9,-27.7,-47.7,-21.6,-50.8,-15.4,-53.1,-8.5,-54.7,-1.5,-54.7,5.4,-54.7,12.3,-53.1,18.5,-50.8,23.9,-47.7,28.5,-43.9,32.3,-40.0,34.7,-35.4,35.4,-30.0,35.4,-25.4,33.1,-20.8,30.0,-16.2,25.4,-12.3,19.2,-9.2,13.1,-6.9,6.2,-5.4,-1.5,-4.6,-8.5,-5.4,-16.2,-6.9,-22.3,-9.2,-28.5,-12.3,-33.1,-16.2,-36.2,-20.8,-37.7,-25.4,-38.5,-30.0"/>
                <positionsList name="leftFrontInner"
                               data="-127.0,60.1,-135.5,41.6,-138.6,22.3,-136.3,3.8,-129.4,-13.9,-117.8,-30.8,-102.4,-44.7,-83.2,-56.2,-61.6,-65.4,-38.5,-72.4,-13.9,-75.5,10.8,-75.5,35.4,-72.4,58.5,-65.4,80.1,-57.0,98.6,-44.7,114.7,-30.8,126.3,-13.9,133.2,3.8,135.5,22.3,132.4,41.6,124.0,60.1,110.1,77.0,90.9,92.4,67.8,103.9,41.6,112.4,13.1,117.0,-16.2,117.0,-44.7,112.4,-70.8,103.9,-93.9,92.4,-113.2,77.0"/>
                <positionsList name="rightFrontInner"
                               data="-83.2,-55.4,-62.4,-64.7,-39.3,-70.8,-15.4,-74.7,9.2,-74.7,33.9,-71.6,57.0,-65.4,78.5,-57.0,97.0,-44.7,113.2,-30.8,124.7,-14.6,132.4,3.1,134.8,21.6,131.7,40.0,123.2,58.5,110.1,75.5,91.6,90.9,68.5,103.2,42.3,111.7,14.6,116.3,-14.6,116.3,-42.3,112.4,-69.3,103.9,-92.4,92.4,-110.9,77.8,-125.5,60.8,-134.0,42.3,-137.8,23.9,-135.5,4.6,-128.6,-13.1,-117.0,-29.3,-102.4,-43.9"/>

                <stage id="1">
                    <salvo laser="centerFront"/>
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                </stage>
            </expansion>

            <!-- 			Unindentified Battleship -->
            <expansion class="102">
                <positionsList name="rightFrontOuter"
                               data="-168.0,-1.0,-161.0,-23.0,-148.0,-45.0,-129.0,-64.0,-104.0,-80.0,-76.0,-93.0,-45.0,-101.0,-13.0,-105.0,20.0,-105.0,53.0,-100.0,83.0,-90.0,110.0,-76.0,133.0,-59.0,151.0,-40.0,163.0,-18.0,169.0,5.0,168.0,29.0,161.0,52.0,147.0,73.0,128.0,92.0,104.0,108.0,76.0,121.0,45.0,129.0,12.0,133.0,-21.0,133.0,-53.0,128.0,-84.0,118.0,-111.0,105.0,-134.0,88.0,-152.0,68.0,-164.0,46.0,-169.0,23.0"/>
                <positionsList name="leftFrontOuter"
                               data="-168.0,29.0,-169.0,5.0,-164.0,-18.0,-152.0,-40.0,-134.0,-60.0,-111.0,-77.0,-84.0,-90.0,-53.0,-100.0,-21.0,-105.0,12.0,-105.0,45.0,-101.0,76.0,-93.0,104.0,-80.0,128.0,-64.0,147.0,-45.0,160.0,-23.0,168.0,0.0,169.0,23.0,163.0,46.0,151.0,68.0,133.0,88.0,110.0,105.0,83.0,118.0,53.0,128.0,20.0,133.0,-13.0,133.0,-46.0,129.0,-77.0,121.0,-105.0,108.0,-129.0,92.0,-148.0,73.0,-161.0,52.0"/>
                <positionsList name="leftRearOuter"
                               data="48.0,36.0,35.0,42.0,21.0,46.0,6.0,48.0,-9.0,48.0,-24.0,45.0,-37.0,41.0,-50.0,35.0,-60.0,27.0,-69.0,18.0,-74.0,9.0,-77.0,-2.0,-77.0,-13.0,-74.0,-23.0,-68.0,-33.0,-59.0,-42.0,-49.0,-49.0,-36.0,-55.0,-22.0,-59.0,-7.0,-61.0,8.0,-61.0,23.0,-58.0,37.0,-54.0,49.0,-48.0,60.0,-41.0,68.0,-32.0,74.0,-22.0,76.0,-11.0,76.0,-1.0,73.0,10.0,67.0,20.0,59.0,28.0"/>
                <positionsList name="rightRearOuter"
                               data="48.0,-49.0,59.0,-42.0,67.0,-33.0,73.0,-23.0,76.0,-13.0,77.0,-2.0,74.0,9.0,68.0,18.0,60.0,27.0,50.0,35.0,37.0,41.0,23.0,45.0,8.0,48.0,-7.0,48.0,-22.0,46.0,-36.0,42.0,-48.0,36.0,-59.0,29.0,-68.0,20.0,-74.0,10.0,-77.0,0.0,-77.0,-11.0,-75.0,-22.0,-69.0,-32.0,-61.0,-41.0,-50.0,-48.0,-38.0,-54.0,-24.0,-59.0,-9.0,-61.0,6.0,-61.0,21.0,-59.0,35.0,-55.0"/>

                <!-- TODO: Adapting/Adding salvos for each expansion (stage)  -->
                <stage id="1">
                    <salvo laser="rightFrontOuter,leftFrontOuter"/>
                    <salvo laser="rightRearOuter,leftRearOuter"/>
                </stage>
            </expansion>


            <!--  Pirate ships expansions -->
            <expansion class="111">
                <positionsList name="leftFrontInner"
                               data="-44.2,0.2,-43.8,-6.0,-41.8,-11.8,-38.2,-17.0,-33.5,-21.8,-27.5,-25.8,-20.8,-28.8,-13.2,-31.0,-5.5,-32.0,2.5,-32.2,10.2,-31.5,18.0,-29.5,25.0,-26.8,31.2,-23.0,36.2,-18.5,40.2,-13.5,42.8,-7.8,43.8,-1.8,43.0,4.2,40.5,10.2,36.2,16.0,30.5,20.8,23.2,24.8,15.0,27.8,6.0,29.2,-3.5,29.5,-12.8,28.5,-21.2,26.0,-29.0,22.2,-35.2,17.5,-40.0,12.2,-43.0,6.2"/>
                <positionsList name="rightFrontInner"
                               data="-43.2,-7.8,-40.8,-13.5,-36.8,-18.5,-31.5,-23.0,-25.2,-26.8,-18.2,-29.5,-10.8,-31.2,-3.0,-32.2,5.0,-32.0,12.8,-30.8,20.2,-28.8,27.0,-25.5,33.0,-21.5,37.8,-17.0,41.2,-11.8,43.2,-5.8,43.8,0.2,42.2,6.2,39.2,12.2,34.5,17.5,28.2,22.2,20.5,25.8,12.0,28.2,2.8,29.5,-6.5,29.2,-15.5,27.5,-23.8,24.8,-31.0,20.8,-36.8,15.8,-41.0,10.2,-43.5,4.2,-44.2,-1.8"/>
                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                </stage>
            </expansion>
            <expansion class="112">
                <positionsList name="leftFrontInner"
                               data="-69.0,9.9,-66.6,0.3,-62.2,-8.5,-55.4,-16.7,-46.9,-23.5,-37.1,-28.9,-25.8,-33.0,-13.9,-35.7,-1.7,-36.7,10.5,-36.0,22.4,-33.7,34.0,-29.9,44.2,-24.8,53.0,-18.4,60.2,-10.5,65.3,-2.0,68.0,7.5,68.3,17.0,65.6,26.9,60.5,36.4,52.7,44.9,42.2,52.0,29.9,57.5,16.3,61.2,1.7,62.6,-12.9,61.9,-27.2,58.5,-39.8,53.7,-50.7,46.6,-59.2,38.4,-65.3,29.2,-68.3,19.7"/>
                <positionsList name="rightFrontInner"
                               data="-68.7,6.8,-65.6,-2.7,-60.2,-11.2,-53.0,-18.7,-43.9,-25.5,-33.7,-30.3,-22.1,-34.0,-10.2,-36.0,2.0,-36.7,14.6,-35.4,26.2,-32.6,37.4,-28.6,47.3,-22.8,55.8,-16.0,62.2,-7.8,66.6,1.0,68.3,10.5,67.7,20.4,64.3,29.9,58.1,39.1,49.6,47.3,38.4,54.1,25.5,59.2,11.6,61.9,-3.4,62.6,-17.7,61.2,-31.6,57.1,-43.9,51.3,-53.7,44.2,-61.5,35.7,-66.6,26.2,-69.0,16.3"/>
                <positionsList name="leftFrontOuter"
                               data="-26.9,13.3,-29.6,9.5,-31.3,5.1,-31.6,0.7,-30.6,-3.4,-28.6,-7.5,-25.5,-11.2,-21.8,-14.3,-17.0,-17.0,-11.9,-18.7,-6.1,-20.1,0.0,-20.4,5.8,-20.1,11.2,-18.7,16.7,-17.0,21.4,-14.3,25.2,-11.2,28.2,-7.5,30.3,-3.4,30.9,1.0,30.6,5.4,28.9,9.5,26.2,13.6,22.4,17.0,17.7,20.1,12.2,22.1,6.1,23.5,-0.3,23.8,-6.8,23.5,-12.9,22.1,-18.4,20.1,-23.1,17.0"/>
                <positionsList name="rightFrontOuter"
                               data="-25.5,-11.9,-21.4,-15.0,-16.3,-17.7,-10.9,-19.4,-5.1,-20.4,0.7,-20.7,6.8,-20.1,12.2,-18.7,17.7,-16.7,22.1,-13.9,26.2,-10.5,28.9,-6.8,30.9,-2.7,31.6,1.7,30.9,6.1,29.2,10.2,26.2,14.3,22.1,17.7,17.0,20.7,11.2,22.8,5.1,24.1,-1.4,24.5,-7.8,23.8,-13.9,22.1,-19.4,19.7,-24.1,16.7,-27.9,12.9,-30.6,8.8,-32.0,4.4,-32.0,0.0,-30.9,-4.1,-28.6,-8.2"/>
                <positionsList name="leftRearInner"
                               data="-6.1,-12.9,-6.8,-13.6,-7.1,-14.6,-7.1,-15.6,-6.8,-16.3,-6.5,-17.3,-5.8,-18.0,-4.8,-18.7,-3.7,-19.4,-2.4,-19.7,-1.0,-19.7,0.3,-19.7,1.4,-19.7,2.7,-19.4,3.7,-19.0,4.8,-18.4,5.8,-17.7,6.1,-16.7,6.5,-15.6,6.5,-15.0,6.5,-13.9,5.8,-12.9,5.1,-12.2,4.1,-11.6,3.1,-11.2,1.7,-10.9,0.7,-10.5,-0.7,-10.5,-2.0,-10.5,-3.4,-10.9,-4.4,-11.6,-5.4,-12.2"/>
                <positionsList name="rightRearInner"
                               data="-6.1,-17.7,-5.4,-18.4,-4.4,-19.0,-3.1,-19.7,-1.7,-20.1,-0.3,-20.1,1.0,-20.1,2.4,-19.7,3.4,-19.4,4.4,-18.7,5.4,-18.0,6.1,-17.3,6.5,-16.3,6.8,-15.3,6.8,-14.3,6.5,-13.6,5.8,-12.6,4.8,-11.9,3.7,-11.2,2.7,-10.9,1.4,-10.5,0.0,-10.2,-1.4,-10.5,-2.7,-10.5,-4.1,-11.2,-5.1,-11.6,-6.1,-12.2,-6.8,-13.3,-7.1,-14.3,-7.5,-15.0,-7.1,-16.0,-6.8,-17.0"/>

                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                </stage>
            </expansion>
            <expansion class="113">
                <positionsList name="leftFrontInner"
                               data="-67.9,13.3,-66.2,3.9,-61.6,-4.9,-55.0,-12.9,-46.9,-19.6,-36.8,-25.2,-25.9,-29.4,-14.4,-31.8,-2.1,-32.9,9.8,-32.2,21.7,-30.1,32.9,-26.6,43.0,-21.3,52.1,-15.0,59.1,-7.3,64.0,1.1,67.2,10.5,67.2,20.0,64.8,29.4,59.5,38.9,51.8,47.2,41.7,54.2,29.7,59.8,16.1,63.3,1.8,64.8,-12.6,64.1,-26.3,61.2,-38.9,56.3,-49.7,49.4,-58.1,41.3,-64.0,32.6,-67.2,23.1"/>
                <positionsList name="rightFrontInner"
                               data="-67.5,11.2,-65.1,1.8,-60.2,-7.0,-53.2,-14.7,-44.5,-21.0,-34.3,-26.2,-23.1,-30.1,-11.2,-32.2,0.7,-32.9,12.9,-31.8,24.5,-29.4,35.7,-25.5,45.5,-19.9,53.9,-13.3,60.5,-5.6,65.1,3.2,67.2,12.6,66.8,22.4,63.7,31.9,58.1,41.0,49.7,49.0,39.2,55.7,26.6,60.9,12.9,64.1,-1.8,64.8,-16.1,63.7,-29.4,60.2,-41.7,54.6,-51.8,47.6,-59.9,39.2,-65.1,30.1,-67.5,20.7"/>
                <positionsList name="rightFrontOuter"
                               data="-40.6,10.5,-37.1,4.9,-31.9,0.4,-25.9,-3.5,-18.9,-6.6,-11.2,-8.8,-3.2,-9.4,4.5,-9.4,12.6,-8.4,19.9,-5.9,26.9,-2.8,32.5,1.4,37.4,6.3,40.6,11.9,42.7,17.9,43.0,24.2,41.7,30.5,38.5,36.4,33.6,41.7,27.6,46.2,20.3,50.0,11.9,52.5,3.1,53.6,-6.0,53.6,-14.7,51.8,-22.8,49.0,-29.8,45.2,-35.7,40.2,-39.9,34.7,-42.7,28.7,-43.8,22.4,-43.1,16.5"/>
                <positionsList name="leftRearOuter"
                               data="-23.1,35.7,-28.0,31.9,-31.5,27.7,-34.0,23.1,-35.0,17.9,-35.0,13.0,-33.2,8.1,-30.5,3.9,-26.6,-0.3,-21.7,-3.5,-16.1,-5.9,-10.2,-7.7,-3.9,-8.8,2.8,-8.8,9.4,-7.7,15.4,-6.3,21.0,-3.5,25.9,-0.3,29.7,3.5,32.5,8.1,34.3,13.0,34.6,17.9,33.6,22.8,31.1,27.3,27.6,31.9,22.8,35.4,16.8,38.5,10.5,40.6,3.5,41.7,-3.9,41.7,-10.9,40.6,-17.2,38.5"/>
                <positionsList name="leftRearInner"
                               data="-23.1,29.4,-28.0,25.9,-31.9,21.7,-34.3,16.8,-35.4,11.9,-35.0,7.0,-33.6,2.5,-30.8,-2.1,-27.0,-5.9,-22.0,-9.4,-16.5,-11.9,-10.5,-13.6,-4.2,-14.7,2.4,-14.7,9.1,-14.0,15.0,-12.2,20.6,-9.8,25.9,-6.3,29.7,-2.4,32.5,1.8,34.3,6.7,34.6,11.6,33.9,16.5,31.5,21.0,27.6,25.2,23.1,29.1,17.1,32.2,10.8,34.3,3.8,35.4,-3.5,35.4,-10.5,34.3,-17.2,32.6"/>

                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="rightFrontOuter"/>
                    <salvo laser="leftRearInner,leftRearOuter"/>
                </stage>
            </expansion>
            <expansion class="114">
                <positionsList name="leftFrontInner"
                               data="-107.9,-1.5,-108.7,-16.7,-105.6,-31.9,-98.0,-45.6,-87.4,-57.8,-74.5,-69.2,-58.5,-77.5,-40.3,-84.4,-21.3,-88.2,-1.5,-89.7,17.5,-88.2,37.2,-84.4,54.7,-78.3,71.4,-69.9,85.1,-59.3,95.8,-47.1,103.4,-33.4,107.2,-18.2,106.4,-3.0,101.8,12.2,92.7,26.6,80.6,38.8,63.8,50.2,44.1,57.8,22.8,63.1,0.8,65.4,-22.0,63.8,-44.1,58.5,-63.8,50.9,-80.6,40.3,-93.5,28.1,-102.6,13.7"/>
                <positionsList name="rightFrontInner"
                               data="-104.1,-32.7,-96.5,-46.4,-85.9,-58.5,-72.2,-69.2,-56.2,-77.5,-38.0,-83.6,-19.0,-87.4,0.0,-88.9,19.8,-87.4,38.8,-83.6,56.2,-76.8,71.4,-68.4,85.1,-57.8,95.8,-45.6,102.6,-31.2,105.6,-16.7,104.9,-1.5,100.3,12.9,91.2,27.4,77.5,39.5,61.6,50.2,41.8,57.8,20.5,63.1,-1.5,64.6,-24.3,62.3,-45.6,57.0,-64.6,49.4,-80.6,38.8,-93.5,25.8,-102.6,11.4,-107.2,-3.0,-107.2,-18.2"/>
                <positionsList name="leftFrontOuter"
                               data="-108.7,7.6,-111.7,-7.6,-111.0,-23.6,-105.6,-38.0,-96.5,-52.4,-84.4,-64.6,-69.2,-74.5,-52.4,-82.8,-33.4,-88.2,-13.7,-91.2,6.8,-91.2,27.4,-88.9,46.4,-84.4,63.8,-76.8,79.8,-66.9,92.7,-55.5,102.6,-41.8,108.7,-27.4,110.2,-11.4,108.7,3.8,101.8,19.8,91.2,33.4,76.0,46.4,57.8,56.2,36.5,63.1,13.7,66.9,-9.9,67.6,-32.7,64.6,-54.0,58.5,-73.7,48.6,-88.9,36.5,-101.1,22.8"/>
                <positionsList name="rightFrontOuter"
                               data="-102.6,-41.0,-93.5,-54.7,-80.6,-66.1,-65.4,-76.0,-47.1,-83.6,-28.1,-88.2,-8.4,-90.4,11.4,-90.4,31.2,-87.4,50.2,-82.1,66.9,-73.7,82.1,-63.8,94.2,-51.7,103.4,-38.0,107.9,-23.6,109.4,-8.4,105.6,7.6,98.0,22.0,86.6,36.5,71.4,47.9,52.4,57.0,31.2,63.8,8.4,66.9,-15.2,66.1,-37.2,62.3,-58.5,55.5,-76.8,45.6,-91.2,33.4,-101.8,19.0,-108.7,3.8,-111.0,-11.4,-108.7,-26.6"/>
                <positionsList name="leftRearInner"
                               data="-31.2,-15.2,-34.2,-19.8,-36.5,-24.3,-37.2,-29.6,-36.5,-35.0,-34.2,-39.5,-31.2,-44.1,-26.6,-47.9,-21.3,-50.9,-15.2,-53.2,-8.4,-54.7,-1.5,-55.5,5.3,-54.7,12.2,-54.0,18.2,-51.7,23.6,-48.6,28.9,-44.8,31.9,-40.3,34.2,-35.7,35.7,-31.2,35.0,-25.8,33.4,-20.5,30.4,-16.0,25.8,-12.2,20.5,-8.4,14.4,-6.1,7.6,-4.6,0.0,-3.8,-6.8,-4.6,-14.4,-5.3,-20.5,-8.4,-26.6,-11.4"/>
                <positionsList name="rightRearInner"
                               data="-28.9,-44.8,-24.3,-47.9,-19.0,-50.9,-12.9,-53.2,-6.1,-54.0,0.8,-54.7,6.8,-54.0,13.7,-52.4,19.8,-50.2,24.3,-47.1,28.9,-43.3,31.9,-38.8,34.2,-34.2,34.2,-29.6,33.4,-24.3,31.9,-19.8,28.1,-15.2,23.6,-11.4,18.2,-8.4,11.4,-6.1,5.3,-5.3,-2.3,-4.6,-9.1,-5.3,-16.0,-6.8,-22.0,-9.9,-27.4,-12.9,-31.2,-16.7,-34.2,-21.3,-35.7,-25.8,-35.7,-31.2,-35.0,-35.7,-32.7,-40.3"/>

                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                    <salvo laser="leftFrontInner,leftFrontOuter,rightFrontInner,rightFrontOuter"/>
                    <salvo laser="leftRearInner,rightRearInner"/>
                </stage>
            </expansion>
            <expansion class="115">
                <positionsList name="leftFrontInner"
                               data="-175.6,23.9,-174.4,0.0,-166.4,-23.9,-152.8,-46.7,-133.4,-66.1,-108.3,-83.2,-79.8,-95.8,-47.9,-104.9,-13.7,-109.4,20.5,-108.3,53.6,-103.7,85.5,-93.5,112.9,-78.7,136.8,-61.6,155.0,-41.0,167.6,-18.2,173.3,5.7,172.1,29.6,164.2,53.6,150.5,76.4,131.1,95.8,106.0,112.9,77.5,125.4,45.6,134.5,11.4,139.1,-22.8,137.9,-55.9,132.2,-86.6,123.1,-115.1,109.4,-139.1,91.2,-157.3,70.7,-169.9,47.9"/>
                <positionsList name="rightFrontInner"
                               data="-175.6,8.0,-169.9,-16.0,-158.5,-38.8,-140.2,-60.4,-117.4,-77.5,-90.1,-92.3,-58.1,-102.6,-25.1,-108.3,9.1,-109.4,43.3,-104.9,75.2,-96.9,103.7,-84.4,130.0,-67.3,149.3,-47.9,164.2,-26.2,172.1,-2.3,173.3,21.7,167.6,45.6,156.2,68.4,137.9,88.9,115.1,107.2,87.8,122.0,55.9,132.2,22.8,137.9,-11.4,139.1,-44.5,135.7,-76.4,126.5,-106.0,114.0,-131.1,96.9,-151.6,77.5,-165.3,55.9,-174.4,31.9"/>
                <positionsList name="leftFrontOuter"
                               data="-133.4,68.4,-143.6,49.0,-147.1,29.6,-145.9,9.1,-137.9,-10.3,-126.5,-29.6,-108.3,-45.6,-87.8,-59.3,-62.7,-69.5,-35.3,-76.4,-6.8,-78.7,21.7,-77.5,49.0,-73.0,75.2,-63.8,98.0,-51.3,117.4,-36.5,131.1,-19.4,141.4,0.0,144.8,20.5,143.6,41.0,136.8,60.4,124.3,78.7,107.2,95.8,85.5,108.3,60.4,118.6,34.2,126.5,5.7,128.8,-23.9,127.7,-51.3,122.0,-76.4,114.0,-100.3,101.5,-118.6,86.6"/>
                <positionsList name="rightFrontOuter"
                               data="-133.4,-20.5,-118.6,-37.6,-99.2,-52.4,-76.4,-65.0,-51.3,-74.1,-22.8,-78.7,5.7,-79.8,34.2,-77.5,60.4,-70.7,85.5,-60.4,107.2,-46.7,124.3,-29.6,136.8,-11.4,143.6,8.0,144.8,28.5,141.4,49.0,131.1,68.4,117.4,85.5,98.0,100.3,75.2,112.9,49.0,122.0,20.5,126.5,-8.0,127.7,-35.3,125.4,-62.7,118.6,-87.8,107.2,-109.4,93.5,-126.5,77.5,-139.1,59.3,-145.9,39.9,-147.1,19.4,-143.6,-1.1"/>
                <positionsList name="rightRearInner"
                               data="-87.8,-27.4,-75.2,-37.6,-60.4,-47.9,-43.3,-54.7,-25.1,-59.3,-4.6,-61.6,14.8,-60.4,34.2,-57.0,52.4,-50.2,68.4,-42.2,82.1,-30.8,91.2,-19.4,98.0,-5.7,101.5,9.1,99.2,22.8,94.6,36.5,85.5,49.0,74.1,60.4,59.3,70.7,41.0,77.5,22.8,82.1,2.3,83.2,-17.1,83.2,-36.5,78.7,-54.7,73.0,-70.7,63.8,-84.4,53.6,-93.5,41.0,-100.3,28.5,-102.6,13.7,-101.5,0.0,-96.9,-13.7"/>
                <positionsList name="rightRearOuter"
                               data="-87.8,-45.6,-71.8,-57.0,-52.4,-65.0,-30.8,-70.7,-9.1,-73.0,13.7,-73.0,35.3,-69.5,55.9,-62.7,74.1,-53.6,90.1,-42.2,102.6,-27.4,110.6,-12.5,114.0,2.3,112.9,18.2,108.3,34.2,99.2,49.0,85.5,61.6,69.5,73.0,50.2,82.1,29.6,87.8,6.8,90.1,-16.0,88.9,-37.6,85.5,-58.1,79.8,-76.4,70.7,-92.3,58.1,-103.7,44.5,-111.7,29.6,-116.3,13.7,-115.1,-2.3,-110.6,-18.2,-100.3,-31.9"/>

                <stage id="1">
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="leftFrontOuter,rightFrontOuter"/>
                    <salvo laser="leftFrontInner,rightFrontInner"/>
                    <salvo laser="rightRearInner,rightRearOuter"/>
                </stage>
            </expansion>
            <expansion class="120">
                <positionsList name="center"
                               data="-64.0,-10.0,-62.0,-20.0,-57.0,-29.0,-51.0,-37.0,-43.0,-44.0,-34.0,-49.0,-23.0,-53.0,-13.0,-55.0,-2.0,-56.0,10.0,-55.0,20.0,-53.0,30.0,-49.0,39.0,-43.0,47.0,-36.0,54.0,-28.0,58.0,-20.0,60.0,-10.0,60.0,0.0,57.0,10.0,52.0,20.0,45.0,28.0,35.0,36.0,24.0,41.0,11.0,44.0,-2.0,45.0,-16.0,44.0,-28.0,41.0,-40.0,35.0,-49.0,28.0,-57.0,19.0,-61.0,10.0,-64.0,0.0"/>
                <stage id="1">
                    <salvo laser="center"/>
                </stage>
            </expansion>

            <expansion class="121">
                <positionsList name="centerLeft_"
                               data="-19.0,-24.5,-20.0,-26.5,-20.0,-28.5,-19.0,-31.5,-17.0,-32.5,-16.0,-34.5,-13.0,-36.5,-10.0,-36.5,-7.0,-37.5,-4.0,-38.5,-1.0,-38.5,2.0,-38.5,5.0,-37.5,8.0,-36.5,11.0,-35.5,13.0,-33.5,15.0,-31.5,16.0,-29.5,16.0,-27.5,16.0,-25.5,15.0,-23.5,13.0,-21.5,11.0,-20.5,8.0,-18.5,5.0,-17.5,1.0,-17.5,-3.0,-16.5,-6.0,-17.5,-10.0,-18.5,-13.0,-19.5,-16.0,-21.5,-18.0,-22.5"/>
                <positionsList name="centerRight_"
                               data="-18.0,-35.5,-15.0,-37.5,-12.0,-38.5,-8.0,-39.5,-5.0,-39.5,-1.0,-39.5,3.0,-39.5,6.0,-38.5,10.0,-37.5,13.0,-36.5,15.0,-34.5,17.0,-32.5,18.0,-30.5,19.0,-27.5,18.0,-25.5,18.0,-22.5,16.0,-20.5,13.0,-18.5,10.0,-17.5,6.0,-15.5,1.0,-15.5,-3.0,-15.5,-7.0,-15.5,-11.0,-16.5,-15.0,-17.5,-18.0,-19.5,-20.0,-21.5,-22.0,-24.5,-22.0,-26.5,-22.0,-28.5,-21.0,-31.5,-20.0,-33.5"/>
                <stage id="1">
                    <salvo laser="centerLeft_,centerRight_"/>
                </stage>
                <stage id="2">
                    <salvo laser="centerLeft_,centerRight_"/>
                </stage>
                <stage id="3">
                    <salvo laser="centerLeft_,centerRight_"/>
                </stage>
            </expansion>
        </expansions>

        <!-- Space Stations ............................................................................................................................. -->

        <stations>
            <station factionID="1" resKey="redStation" width="1618" height="1355"/>
            <station factionID="2" resKey="blueStation" width="1618" height="1355"/>
            <station factionID="3" resKey="greenStation" width="1618" height="1355"/>
            <station factionID="4" resKey="healthStation" width="1618" height="1355"/>
            <station factionID="5" resKey="relayStation" width="1618" height="1355"/>
            <station factionID="6" resKey="pirateStation" width="3000" height="1985"/>
        </stations>

        <!-- Portals ............................................................................................................................. -->

        <portals>
            <portal id="1" resKey="standardGate" width="320" height="320" soundID="5"/>
            <portal id="2" resKey="galaxyGate1" width="320" height="320" soundID="5"/>
            <portal id="3" resKey="galaxyGate2" width="320" height="320" soundID="5"/>
            <portal id="4" resKey="galaxyGate3" width="320" height="320" soundID="5"/>
            <portal id="5" resKey="galaxyGate4" width="320" height="320" soundID="5"/>
            <portal id="11" resKey="birthdayGate" width="320" height="320" soundID="5"/>
            <portal id="12" resKey="orbsterGate1" width="320" height="320" soundID="5"/>
            <portal id="13" resKey="5thBdayGate" width="320" height="320" soundID="5" textX="3" textY="-20"
                    displayTextKey="gate_billboard_birthday_5"/>
            <portal id="14" resKey="highScoreGate1" width="320" height="320" soundID="5" textX="3" textY="10"/>
            <portal id="15" resKey="6thBirthdayGate" width="320" height="320" soundID="5" textX="3" textY="-20"
                    displayTextKey="gate_billboard_birthday_6"/>
            <portal id="21" resKey="TDMGate1" tdm="true" width="320" height="320" soundID="5"/>
            <portal id="22" resKey="TDMGate2" tdm="true" width="320" height="320" soundID="5"/>
            <portal id="34" resKey="groupGate1" width="320" height="320" soundID="5"/>
            <portal id="41" resKey="invasionGate1" width="320" height="320" soundID="5"/>
            <portal id="42" resKey="invasionGate2" width="320" height="320" soundID="5"/>
            <portal id="43" resKey="invasionGate3" width="320" height="320" soundID="5"/>
            <portal id="51" resKey="pirateGate" width="362" height="387" soundID="5"/>
            <portal id="52" resKey="pirateGateBroken" width="362" height="387" soundID="5"/>
            <portal id="53" resKey="epsilonGate" width="498" height="490" soundID="5"/>
            <portal id="54" resKey="zetaGate" width="498" height="490" soundID="5"/>
            <portal id="55" resKey="tutorialGate" width="384" height="411" soundID="5"/>
            <portal id="61" resKey="soccerGateLeft" width="320" height="320" soundID="5" hasFactionLayers="true"/>
            <portal id="62" resKey="soccerGateRight" width="320" height="320" soundID="5" hasFactionLayers="true"/>
            <portal id="70" resKey="kappaGate" width="320" height="320" soundID="5"/>        <!-- kappa - all star  -->
            <portal id="71" resKey="lambdaGate" width="404" height="414" soundID="5"/>        <!-- boss gate -->
            <portal id="72" resKey="kronosGate" width="410" height="353" soundID="5" targetPreview="true"/>
            <portal id="73" resKey="sectorControlGate" width="320" height="320" soundID="5" textX="3" textY="-10"/>
        </portals>

        <portalAssets>
            <portalAsset id="1" resKey="factionscrap-mmo" comment="faction scrap for portals on pirate maps"/>
            <portalAsset id="2" resKey="factionscrap-eic" comment="faction scrap for portals on pirate maps"/>
            <portalAsset id="3" resKey="factionscrap-vru" comment="faction scrap for portals on pirate maps"/>
        </portalAssets>

        <!-- Nebulas ............................................................................................................................. -->

        <nebulas layers="1">
            <nebula id="0" resKey="nebula0"/>
        </nebulas>

        <!-- Planets ............................................................................................................................. -->

        <planets>
            <planet id="1" resKey="planet1" radius="250"/>
            <planet id="2" resKey="planet2" radius="89"/>
            <planet id="3" resKey="planet3" radius="60"/>
            <planet id="4" resKey="planet4" radius="85"/>
            <planet id="5" resKey="planet5" radius="262"/>
            <planet id="6" resKey="planet6" radius="155"/>
            <planet id="7" resKey="planet7" radius="1155"/>
            <planet id="8" resKey="planet8" radius="118"/>
            <planet id="9" resKey="planet9" radius="45"/>
            <planet id="10" resKey="planet10" radius="62"/>
            <planet id="11" resKey="planet11" radius="251"/>
            <planet id="12" resKey="planet12" radius="128"/>
            <planet id="13" resKey="planet13" radius="205" comment="big and blue"/>
            <planet id="14" resKey="planet14" radius="346" comment="big and brown"/>
            <planet id="15" resKey="planet15" radius="85" comment="pink"/>
            <planet id="16" resKey="planet16" radius="63" comment="red"/>
            <planet id="17" resKey="planet17" radius="161" comment="big green"/>
            <planet id="18" resKey="planet18" radius="40" comment="small pink"/>
            <planet id="19" resKey="planet19" radius="76" comment="small brown"/>
            <planet id="20" resKey="planet20" radius="251" comment="has ringsystem"/>
            <planet id="21" resKey="planet21" radius="62" comment="small green"/>
            <planet id="22" resKey="planet22" radius="25" comment="very small gray"/>
            <planet id="23" resKey="planet23" radius="160" comment="good old earth"/>
            <planet id="24" resKey="planet24" radius="75" comment="red"/>
            <planet id="25" resKey="planet25" radius="201" comment="big and pink"/>
            <planet id="26" resKey="planet26" radius="88" comment="has ringsystem"/>
            <planet id="27" resKey="planet27" radius="62" comment="small brown"/>
            <planet id="28" resKey="planet28" radius="152" comment="big green"/>
            <planet id="29" resKey="planet29" radius="62" comment="small gray"/>
            <planet id="30" resKey="planet30" radius="235"/>
            <planet id="31" resKey="planet31" radius="244"/>
            <planet id="32" resKey="planet32" radius="135"/>
            <planet id="33" resKey="planet33" radius="275" comment="big inhabitated by aliens"/>
            <planet id="34" resKey="planet34" radius="330" comment="floating cristal with lasers"/>
            <planet id="35" resKey="planet35" radius="250" comment="floating cristal with lasers"/>
            <planet id="36" resKey="planet36" radius="300" comment="floating cristal with lasers"/>
            <planet id="37" resKey="planet37" radius="295" comment="floating cristal with lasers"/>
            <planet id="38" resKey="planet38" radius="265" comment="floating cristal with lasers"/>
            <planet id="39" resKey="planet39" radius="270" comment="floating cristal with lasers"/>
            <planet id="40" resKey="planet40" radius="1000" comment="lot of small asteroids"/>
            <planet id="41" resKey="planet41" radius="1000" comment="fog1"/>
            <planet id="42" resKey="planet42" radius="1000" comment="cristal asteroids"/>
            <planet id="43" resKey="planet43" radius="1000" comment="fog2"/>
            <planet id="44" resKey="planet44" radius="240" comment="pirate planet on map 5-1"/>
            <planet id="45" resKey="planet45" radius="750" comment="pirate planet on map 5-2"/>
            <planet id="46" resKey="planet46" radius="240" comment="pirate planet on map 5-3"/>
            <planet id="47" resKey="pirateFreighter" radius="240" comment="pirate freighter on map 5-3"/>
            <planet id="48" resKey="pirateOneway" radius="240" comment="pirate oneway sign"/>
            <planet id="49" resKey="pirateExit" radius="240" comment="pirate exit sign"/>
            <planet id="50" resKey="planet50" radius="560" comment="Sun on GG Zeta Map 2"/>
            <planet id="51" resKey="planet51" radius="154" comment="Crystal 1 GG Zeta Map 2"/>
            <planet id="52" resKey="planet52" radius="154" comment="Crystal 2 GG Zeta Map 2"/>
            <planet id="53" resKey="planet53" radius="154" comment="Crystal 3 GG Zeta Map 2"/>
            <planet id="54" resKey="planet54" radius="154" comment="Crystal 4 GG Zeta Map 2"/>
            <planet id="55" resKey="planet55" radius="154" comment="Crystal 5 GG Zeta Map 2"/>
            <planet id="56" resKey="planet56" radius="154" comment="Crystal 6 GG Zeta Map 2"/>

            <planet id="57" resKey="planet57" radius="154" comment="Crystal 1 GG Zeta Map 3"/>
            <planet id="58" resKey="planet58" radius="196" comment="Crystal 2 GG Zeta Map 3"/>
            <planet id="59" resKey="planet59" radius="303" comment="Crystal 3 GG Zeta Map 3"/>
            <planet id="60" resKey="planet60" radius="229" comment="Crystal 4 GG Zeta Map 3"/>
            <planet id="61" resKey="planet61" radius="200" comment="Crystal 5 GG Zeta Map 3"/>
            <planet id="62" resKey="planet62" radius="215" comment="Crystal 6 GG Zeta Map 3"/>
            <planet id="63" resKey="planet63" radius="264" comment="Asteroid 1 GG Epsilon Map"/>
            <planet id="64" resKey="planet64" radius="248" comment="Asteroid 2 GG Epsilon Map"/>
            <planet id="65" resKey="planet65" radius="278" comment="Asteroid 3 GG Epsilon Map"/>
            <planet id="66" resKey="planet66" radius="285" comment="Asteroid 4 GG Epsilon Map"/>
            <planet id="67" resKey="planet67" radius="326" comment="Asteroid 5 GG Epsilon Map"/>
            <planet id="68" resKey="planet68" radius="128" comment="Red Planet GG Epsilon Map"/>
            <planet id="69" resKey="planet69" radius="82" comment="Grey Planet GG Epsilon Map"/>

            <planet id="70" resKey="planet70" radius="75" comment="Planet 1 Fifth Birthday Map"/>
            <planet id="71" resKey="planet71" radius="200" comment="Planet 2 Fifth Birthday Map"/>
            <planet id="72" resKey="planet72" radius="210" comment="Asteroid 1 Fifth Birthday Map"/>
            <planet id="73" resKey="planet73" radius="260" comment="Asteroid 2 Fifth Birthday Map"/>
            <planet id="74" resKey="planet74" radius="240" comment="Asteroid 3 Fifth Birthday Map"/>
            <planet id="75" resKey="planet75" radius="200" comment="Asteroid 4 Fifth Birthday Map"/>
            <planet id="76" resKey="planet76" radius="250" comment="Asteroid 5 Fifth Birthday Map"/>

            <planet id="77" resKey="planet77" radius="800" comment="Tutorial Map huge"/>
            <planet id="78" resKey="planet78" radius="240"/>
            <planet id="79" resKey="scrap79" radius="11"/>
            <planet id="80" resKey="scrap80" radius="30"/>
            <planet id="81" resKey="scrap81" radius="30"/>
            <planet id="82" resKey="scrap82" radius="30"/>
            <planet id="83" resKey="scrap83" radius="30"/>
            <planet id="84" resKey="scrap84" radius="24"/>
            <planet id="85" resKey="scrap85" radius="30"/>
            <planet id="86" resKey="scrap86" radius="30"/>
            <planet id="87" resKey="scrap87" radius="100"/>
            <!--planet id="88" resKey="" radius="" /-->
            <planet id="89" resKey="asteroids89" radius="40"/>
            <planet id="90" resKey="asteroids90" radius="27"/>
            <planet id="91" resKey="asteroids91" radius="27"/>
            <planet id="92" resKey="asteroids92" radius="30"/>
            <planet id="93" resKey="asteroids93" radius="29"/>
            <planet id="94" resKey="asteroids94" radius="42"/>
            <planet id="95" resKey="asteroids95" radius="80"/>
            <planet id="96" resKey="asteroids96" radius="40"/>
            <planet id="97" resKey="asteroids97" radius="44"/>
            <planet id="99" resKey="planet99" radius="100"/>
            <planet id="100" resKey="planet100" radius="150"/>
            <planet id="102" resKey="planet102" radius="110"/>
            <planet id="106" resKey="planet106" radius="60"/>
            <planet id="107" resKey="planet107" radius="90"/>
            <planet id="108" resKey="planet108" radius="131"/>
            <planet id="109" resKey="planet109" radius="145"/>
            <planet id="110" resKey="planet110" radius="400"/>
            <planet id="111" resKey="planet111" radius="274"/>
            <planet id="112" resKey="planet112" radius="65"/>
            <planet id="113" resKey="planet113" radius="357"/>
            <planet id="114" resKey="planet114" radius="660"/>
            <planet id="115" resKey="planet115" radius="70"/>
            <planet id="116" resKey="planet116" radius="90"/>
            <planet id="117" resKey="planet117" radius="720"/>
            <planet id="118" resKey="planet118" radius="180"/>
            <planet id="119" resKey="satellite119" radius="50"/>
            <planet id="120" resKey="satellite120" radius="20"/>
            <planet id="121" resKey="satellite121" radius="10"/>
            <planet id="122" resKey="satellite122" radius="40"/>
            <planet id="123" resKey="planet123" radius="510"/>
            <planet id="124" resKey="satellite124" radius="30"/>
            <planet id="125" resKey="satellite125" radius="25"/>
            <planet id="126" resKey="satellite126" radius="90"/>
            <planet id="127" resKey="asteroids127" radius="200"/>
            <planet id="128" resKey="asteroids128" radius="220"/>
            <planet id="129" resKey="asteroids129" radius="200"/>
            <planet id="130" resKey="planet130" radius="70"/>
            <planet id="131" resKey="planet131" radius="205"/>
            <planet id="132" resKey="planet132" radius="302"/>
            <planet id="133" resKey="planet133" radius="45"/>
            <planet id="134" resKey="planet134" radius="90"/>
            <planet id="135" resKey="planet135" radius="90"/>
            <planet id="136" resKey="planet136" radius="120"/>
            <planet id="137" resKey="planet137" radius="10"/>
            <planet id="138" resKey="planet138" radius="8"/>
            <planet id="139" resKey="planet139" radius="6"/>
        </planets>

        <!-- Meteors ............................................................................................................................. -->

        <meteors layers="1">
            <meteor type="1" resKey="meteorit1"/>
            <meteor type="2" resKey="meteorit2"/>
            <!-- meteor type="1" resKey="asteroid_desert"/>
			<meteor type="1" resKey="asteroid_pirates"/>
			<meteor type="1" resKey="scrap_pirates"/>
			<meteor type="1" resKey="grass"/-->
        </meteors>

        <!-- Drones ............................................................................................................................. -->

        <drones groupRadius="75">
            <!-- 	Flax Standard Design	 -->
            <drone id="1" design="standard" level="1" resKey="drone_flax_0" droneRadius="15"/>
            <drone id="1" design="standard" level="2" resKey="drone_flax_1" droneRadius="15"/>
            <drone id="1" design="standard" level="3" resKey="drone_flax_2" droneRadius="15"/>
            <drone id="1" design="standard" level="4" resKey="drone_flax_3" droneRadius="15"/>
            <drone id="1" design="standard" level="5" resKey="drone_flax_4" droneRadius="15"/>
            <drone id="1" design="standard" level="6" resKey="drone_flax_5" droneRadius="15"/>
            <!-- 	Flax Havok Design -->
            <drone id="1" design="havok" level="1" resKey="drone_flax_design_havok_0" droneRadius="15"/>
            <drone id="1" design="havok" level="2" resKey="drone_flax_design_havok_1" droneRadius="15"/>
            <drone id="1" design="havok" level="3" resKey="drone_flax_design_havok_2" droneRadius="15"/>
            <drone id="1" design="havok" level="4" resKey="drone_flax_design_havok_3" droneRadius="15"/>
            <drone id="1" design="havok" level="5" resKey="drone_flax_design_havok_4" droneRadius="15"/>
            <drone id="1" design="havok" level="6" resKey="drone_flax_design_havok_5" droneRadius="15"/>
            <!-- 	Flax Hercules Design -->
            <drone id="1" design="hercules" level="1" resKey="drone_flax_design_hercules_0" droneRadius="15"/>
            <drone id="1" design="hercules" level="2" resKey="drone_flax_design_hercules_1" droneRadius="15"/>
            <drone id="1" design="hercules" level="3" resKey="drone_flax_design_hercules_2" droneRadius="15"/>
            <drone id="1" design="hercules" level="4" resKey="drone_flax_design_hercules_3" droneRadius="15"/>
            <drone id="1" design="hercules" level="5" resKey="drone_flax_design_hercules_4" droneRadius="15"/>
            <drone id="1" design="hercules" level="6" resKey="drone_flax_design_hercules_5" droneRadius="15"/>
            <!-- 	Iris Standard Design -->
            <drone id="2" design="standard" level="1" resKey="drone_iris_0" droneRadius="15"/>
            <drone id="2" design="standard" level="2" resKey="drone_iris_1" droneRadius="15"/>
            <drone id="2" design="standard" level="3" resKey="drone_iris_2" droneRadius="15"/>
            <drone id="2" design="standard" level="4" resKey="drone_iris_3" droneRadius="15"/>
            <drone id="2" design="standard" level="5" resKey="drone_iris_4" droneRadius="15"/>
            <drone id="2" design="standard" level="6" resKey="drone_iris_5" droneRadius="15"/>
            <!-- 	Iris Havok Design -->
            <drone id="2" design="havok" level="1" resKey="drone_iris_design_havok_0" droneRadius="15"/>
            <drone id="2" design="havok" level="2" resKey="drone_iris_design_havok_1" droneRadius="15"/>
            <drone id="2" design="havok" level="3" resKey="drone_iris_design_havok_2" droneRadius="15"/>
            <drone id="2" design="havok" level="4" resKey="drone_iris_design_havok_3" droneRadius="15"/>
            <drone id="2" design="havok" level="5" resKey="drone_iris_design_havok_4" droneRadius="15"/>
            <drone id="2" design="havok" level="6" resKey="drone_iris_design_havok_5" droneRadius="15"/>
            <!-- 	Iris Hercules Design -->
            <drone id="2" design="hercules" level="1" resKey="drone_iris_design_hercules_0" droneRadius="15"/>
            <drone id="2" design="hercules" level="2" resKey="drone_iris_design_hercules_1" droneRadius="15"/>
            <drone id="2" design="hercules" level="3" resKey="drone_iris_design_hercules_2" droneRadius="15"/>
            <drone id="2" design="hercules" level="4" resKey="drone_iris_design_hercules_3" droneRadius="15"/>
            <drone id="2" design="hercules" level="5" resKey="drone_iris_design_hercules_4" droneRadius="15"/>
            <drone id="2" design="hercules" level="6" resKey="drone_iris_design_hercules_5" droneRadius="15"/>
            <!--	Apis Standard Design -->
            <drone id="3" design="standard" level="1" resKey="drone_apis_0" droneRadius="15"/>
            <drone id="3" design="standard" level="2" resKey="drone_apis_1" droneRadius="15"/>
            <drone id="3" design="standard" level="3" resKey="drone_apis_2" droneRadius="15"/>
            <drone id="3" design="standard" level="4" resKey="drone_apis_3" droneRadius="15"/>
            <drone id="3" design="standard" level="5" resKey="drone_apis_4" droneRadius="15"/>
            <drone id="3" design="standard" level="6" resKey="drone_apis_5" droneRadius="15"/>
            <!-- 	Apis Havok Design (Note that this is actually identical to the Iris' Havok design. Even though the standard Apis looks different to the Iris. Yup.) -->
            <drone id="3" design="havok" level="1" resKey="drone_apis_design_havok_0" droneRadius="15"/>
            <drone id="3" design="havok" level="2" resKey="drone_apis_design_havok_1" droneRadius="15"/>
            <drone id="3" design="havok" level="3" resKey="drone_apis_design_havok_2" droneRadius="15"/>
            <drone id="3" design="havok" level="4" resKey="drone_apis_design_havok_3" droneRadius="15"/>
            <drone id="3" design="havok" level="5" resKey="drone_apis_design_havok_4" droneRadius="15"/>
            <drone id="3" design="havok" level="6" resKey="drone_apis_design_havok_5" droneRadius="15"/>
            <!-- Apis Hercules Design  -->
            <drone id="3" design="hercules" level="1" resKey="drone_apis_design_hercules_0" droneRadius="15"/>
            <drone id="3" design="hercules" level="2" resKey="drone_apis_design_hercules_1" droneRadius="15"/>
            <drone id="3" design="hercules" level="3" resKey="drone_apis_design_hercules_2" droneRadius="15"/>
            <drone id="3" design="hercules" level="4" resKey="drone_apis_design_hercules_3" droneRadius="15"/>
            <drone id="3" design="hercules" level="5" resKey="drone_apis_design_hercules_4" droneRadius="15"/>
            <drone id="3" design="hercules" level="6" resKey="drone_apis_design_hercules_5" droneRadius="15"/>
            <!--	Zeus Standard Design -->
            <drone id="4" design="standard" level="1" resKey="drone_zeus_0" droneRadius="15"/>
            <drone id="4" design="standard" level="2" resKey="drone_zeus_1" droneRadius="15"/>
            <drone id="4" design="standard" level="3" resKey="drone_zeus_2" droneRadius="15"/>
            <drone id="4" design="standard" level="4" resKey="drone_zeus_3" droneRadius="15"/>
            <drone id="4" design="standard" level="5" resKey="drone_zeus_4" droneRadius="15"/>
            <drone id="4" design="standard" level="6" resKey="drone_zeus_5" droneRadius="15"/>
            <!-- 	Zeus Havok Design (Note that this is actually identical to the Iris' Havok design. Even though the standard Zeus looks different to the Iris. Yup.) -->
            <drone id="4" design="havok" level="1" resKey="drone_zeus_design_havok_0" droneRadius="15"/>
            <drone id="4" design="havok" level="2" resKey="drone_zeus_design_havok_1" droneRadius="15"/>
            <drone id="4" design="havok" level="3" resKey="drone_zeus_design_havok_2" droneRadius="15"/>
            <drone id="4" design="havok" level="4" resKey="drone_zeus_design_havok_3" droneRadius="15"/>
            <drone id="4" design="havok" level="5" resKey="drone_zeus_design_havok_4" droneRadius="15"/>
            <drone id="4" design="havok" level="6" resKey="drone_zeus_design_havok_5" droneRadius="15"/>
            <!-- 	Zeus Hercules Design -->
            <drone id="4" design="hercules" level="1" resKey="drone_zeus_design_hercules_0" droneRadius="15"/>
            <drone id="4" design="hercules" level="2" resKey="drone_zeus_design_hercules_1" droneRadius="15"/>
            <drone id="4" design="hercules" level="3" resKey="drone_zeus_design_hercules_2" droneRadius="15"/>
            <drone id="4" design="hercules" level="4" resKey="drone_zeus_design_hercules_3" droneRadius="15"/>
            <drone id="4" design="hercules" level="5" resKey="drone_zeus_design_hercules_4" droneRadius="15"/>
            <drone id="4" design="hercules" level="6" resKey="drone_zeus_design_hercules_5" droneRadius="15"/>

            <!-- 			<drone id="1" level="0" resKey="droneb0" droneRadius="15"/> -->
            <!-- 			<drone id="1" level="1" resKey="droneb1" droneRadius="15"/> -->
            <!-- 			<drone id="1" level="2" resKey="droneb2" droneRadius="15"/> -->
            <!-- 			<drone id="1" level="3" resKey="droneb3" droneRadius="15"/> -->
            <!-- 			<drone id="1" level="4" resKey="droneb4" droneRadius="15"/> -->
            <!-- 			<drone id="1" level="5" resKey="droneb5" droneRadius="15"/> -->

            <!-- 			<drone id="2" level="0" resKey="dronea0" droneRadius="15"/> -->
            <!-- 			<drone id="2" level="1" resKey="dronea1" droneRadius="15"/> -->
            <!-- 			<drone id="2" level="2" resKey="dronea2" droneRadius="15"/> -->
            <!-- 			<drone id="2" level="3" resKey="dronea3" droneRadius="15"/> -->
            <!-- 			<drone id="2" level="4" resKey="dronea4" droneRadius="15"/> -->
            <!-- 			<drone id="2" level="5" resKey="dronea5" droneRadius="15"/> -->

            <!-- 			<drone id="3" level="0" resKey="dronec0" droneRadius="15"/> -->
            <!-- 			<drone id="3" level="1" resKey="dronec1" droneRadius="15"/> -->
            <!-- 			<drone id="3" level="2" resKey="dronec2" droneRadius="15"/> -->
            <!-- 			<drone id="3" level="3" resKey="dronec3" droneRadius="15"/> -->
            <!-- 			<drone id="3" level="4" resKey="dronec4" droneRadius="15"/> -->
            <!-- 			<drone id="3" level="5" resKey="dronec5" droneRadius="15"/> -->
        </drones>

        <droneFormations>
            <formation id="0" name="standard">
                <!--                |          back group              |     right group                      |     left group            -->
                <positionsList
                        data="150,0;225,0;187.5,37.5;187.5,-37.5;0,-112.5;0,-187.5;-37.5,-150;37.5,-150;0,187.5;0,112.5;-37.5,150;37.5,150"/>
                <scale>1.0</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="3,4"/>
                <usedPositions droneCount="3" positionIDlist="1,3,4"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="2,3,4,5,9"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,9"/>
                <usedPositions droneCount="7" positionIDlist="2,3,4,5,6,9,10"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,9,10"/>
                <usedPositions droneCount="9" positionIDlist="2,3,4,5,6,8,9,10,11"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,8,9,10,11"/>
                <usedPositions droneCount="11" positionIDlist="2,3,4,5,6,7,8,9,10,11,12"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="1" name="turtle">
                <positionsList
                        data="-100,-50;-100,50;-50,-100;-50,100;0,-150;0,150;50,-100;50,100;100,-50;100,50;-100,0;100,0"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="2" name="arrow">
                <positionsList
                        data="-100,-25;-100,25;-50,-50;-50,50;0,-75;0,75;50,-100;50,100;100,-125;100,125;150,-150;150,150"/>
                <scale>1.5</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="3" name="lance">
                <positionsList
                        data="-150,-100;-150,100;-75,-100;-75,100;0,-100;0,100;75,-100;75,100;150,-100;150,100;-200,-100;-200,100"/>
                <scale>1.2</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="4" name="star">
                <positionsList
                        data="-50,-50;-50,50;0,-75;0,75;75,0;150,0;0,-150;0,150;-100,-100;-100,100;0,-112.5;0,112.5"/>
                <scale>1.8</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="5" name="pincer">
                <positionsList
                        data="0,-100;0,100;0,-150;0,150;75,-100;75,100;-75,-150;-75,150;-150,-150;-150,150;-200,-150;-200,150"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="6" name="doublearrow">
                <positionsList
                        data="-50,-150;-50,150;0,-125;0,125;50,-100;50,100;0,-175;0,175;50,-200;50,200;100,-75;100,75"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="7" name="diamond">
                <positionsList
                        data="0,-200;0,200;150,0;-150,0;75,-100;75,100;-75,-100;-75,100;0,-100;0,100;-112.5,-50;-112.5,50"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="8" name="doublechevron">
                <positionsList
                        data="-150,0;-100,-50;-100,50;100,0;150,-50;150,50;-50,-100;-50,100;0,-150;0,150;125,-25;125,25"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="9" name="moth">
                <positionsList
                        data="-150,-150;-150,150;-100,-200;-100,200;-100,-100;-100,100;75,-75;75,75;125,-125;125,125;-125,-125;-125,125"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="10" name="crab">
                <positionsList
                        data="-75,-75;-75,75;100,-50;100,50;0,-150;0,150;-150,-150;-150,150;-225,-125;-225,125;50,-100;50,100"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="11" name="heart">
                <positionsList
                        data="-50,-150;-50,150;50,100;50,-100;150,0;-150,-100;-150,100;-100,0;0,-125;0,125;-125,-50;-125,50"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="12" name="barrage">
                <positionsList
                        data="-150,-25;-150,25;-150,-75;-150,75;-150,-125;-150,125;-100,-50;-100,50;-100,-100;-100,100;-100,-150;-100,150"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="13" name="bat">
                <positionsList
                        data="100,-50;100,50;150,-150;150,150;-25,-200;-25,200;-150,-150;-150,150;-100,-25;-100,25;-75,-175;-75,175"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="14" name="mosquito">
                <positionsList
                        data="0,-100;0,100;25,-150;25,150;50,-125;50,125;50,-200;50,200;100,-150;100,150;75,-250;75,250"/>
                <scale>1.3</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
            <formation id="42" name="X">
                <positionsList
                        data="100,100;-100,100;100,-100;-100,-100;150,150;-150,150;150,-150;-150,-150;-200,200;-200,-200;200,-200;200,200"/>
                <scale>1.0</scale>
                <usedPositions droneCount="0" positionIDlist=""/>
                <usedPositions droneCount="1" positionIDlist="1"/>
                <usedPositions droneCount="2" positionIDlist="1,2"/>
                <usedPositions droneCount="3" positionIDlist="1,2,3"/>
                <usedPositions droneCount="4" positionIDlist="1,2,3,4"/>
                <usedPositions droneCount="5" positionIDlist="1,2,3,4,5"/>
                <usedPositions droneCount="6" positionIDlist="1,2,3,4,5,6"/>
                <usedPositions droneCount="7" positionIDlist="1,2,3,4,5,6,7"/>
                <usedPositions droneCount="8" positionIDlist="1,2,3,4,5,6,7,8"/>
                <usedPositions droneCount="9" positionIDlist="1,2,3,4,5,6,7,8,9"/>
                <usedPositions droneCount="10" positionIDlist="1,2,3,4,5,6,7,8,9,10"/>
                <usedPositions droneCount="11" positionIDlist="1,2,3,4,5,6,7,8,9,10,11"/>
                <usedPositions droneCount="12" positionIDlist="1,2,3,4,5,6,7,8,9,10,11,12"/>
            </formation>
        </droneFormations>

        <boosters>
            <booster id="1" infoFieldID="32" resKey="boosterXPIcon" barKey="bar_green"/>
            <booster id="2" infoFieldID="33" resKey="boosterHonorIcon" barKey="bar_green"/>
            <booster id="3" infoFieldID="34" resKey="boosterDamageIcon" barKey="bar_green"/>
            <booster id="4" infoFieldID="35" resKey="boosterShieldIcon" barKey="bar_green"/>
            <booster id="5" infoFieldID="36" resKey="boosterRepairIcon" barKey="bar_green"/>
            <booster id="6" infoFieldID="37" resKey="boosterShieldRecoveryIcon" barKey="bar_green"/>
            <booster id="7" infoFieldID="38" resKey="boosterResourceIcon" barKey="bar_green"/>
            <booster id="8" infoFieldID="39" resKey="boosterHitpointsIcon" barKey="bar_green"/>
            <booster id="9" infoFieldID="83" resKey="boosterQuestRewardIcon" barKey="bar_green"/>
            <booster id="10" infoFieldID="84" resKey="boosterBonusBoxIcon" barKey="bar_green"/>
            <!-- id 11-20 are group version of 1-10, stack and such use same bar -->
            <booster id="21" infoFieldID="97" resKey="boosterCooldownIcon" barKey="bar_green"/>
        </boosters>

        <!-- Lasers .............................................................................................................................

			 Needed Values:
			 class - this is the classID
			 type - this is the typeID from the server
			 resKey - the ResourceID for the resources.php
			 fireRate - the fireRate
			 speed - default is 0.15

			 Optional Values:
			 soundID - default is -1, which means no sound. type of sound when the laser fires. Look at the <soundEffects> section -->
        <!-- 			<laser salvoID="0" class="0" type="0" resKey="laser0" skillResKey="skillLaser0" fireRate="400" comment="red laser" soundID="0" laserFlashID="0" laserLength="80"/> -->
        <!-- 			<laser salvoID="1" class="0" type="1" resKey="laser1" skillResKey="skillLaser1" fireRate="400" comment="blue laser" soundID="9" laserLength="80"/> -->
        <!-- 			<laser salvoID="2" class="0" type="2" resKey="laser2" skillResKey="skillLaser2" fireRate="400" comment="green laser" soundID="10" laserLength="80"/> -->
        <!-- 			<laser salvoID="3" class="0" type="3" resKey="laser3" skillResKey="skillLaser3" fireRate="400" comment="white laser" soundID="11" laserLength="80"/> -->
        <!-- 			<laser salvoID="4" class="0" type="4" resKey="laser4" skillResKey="skillLaser4" fireRate="200" comment="blue absorber" soundID="13" absorber="true" speed="0.5"/> -->
        <!-- 			<laser salvoID="5" class="0" type="5" resKey="laser5" skillResKey="skillLaser5" fireRate="400" comment="pommes schuss" soundID="39" laserLength="80"/> -->
        <!-- 			<laser salvoID="6" class="0" type="6" resKey="laser6" skillResKey="skillLaser6" fireRate="100" comment="pulse laser" soundID="32" laserLength="60" attackLength="400"/> -->
        <!-- 			<laser salvoID="7" class="0" type="7" resKey="elaCloud1" skillResKey="elaCloud1" fireRate="4000" comment="cloud from target to attacker, when ela active" soundID="32" laserLength="0" speed="0.5"/> -->

        <!-- 			<laser salvoID="8" class="1" type="0" resKey="nettel" skillResKey="-1" fireRate="1000" comment="nettel" laserLength="40" soundID="15"/> -->
        <!-- 			<laser salvoID="9" class="2" type="0" resKey="protegitShot" skillResKey="-1" fireRate="1000" comment="protegit Shot" soundID="19" speed="0.5" laserLength="0"/> -->
        <!-- 			<laser salvoID="10" class="3" type="0" resKey="crystal1" skillResKey="-1" fireRate="2000" comment="crystal 1" speed="0.5" playLoop="true" soundID="17"/> -->
        <!-- 			<laser salvoID="11" class="4" type="0" resKey="devolariumShot" skillResKey="-1" fireRate="500" comment="like clouds" playLoop="true" speed="0.75" soundID="16"/> -->
        <!-- 			<laser salvoID="12" class="5" type="0" resKey="lordakiumShot" skillResKey="-1" fireRate="1000" comment="like squid" playLoopRotated="true" speed="1" soundID="15"/> -->
        <!-- 			<laser salvoID="13" class="6" type="0" resKey="crystal2" skillResKey="-1" fireRate="2000" comment="crystal 2" speed="0.5" playLoop="true" soundID="17"/> -->

        <laserDefinitions>
            <laser salvoID="0" resKey="laser0" skillResKey="skillLaser0" fireRate="400" comment="red laser" soundID="0"
                   laserFlashID="0" laserLength="80"/>
            <laser salvoID="1" resKey="laser1" skillResKey="skillLaser1" fireRate="400" comment="blue laser" soundID="9"
                   laserLength="80"/>
            <laser salvoID="2" resKey="laser2" skillResKey="skillLaser2" fireRate="400" comment="green laser"
                   soundID="10" laserLength="80"/>
            <laser salvoID="3" resKey="laser3" skillResKey="skillLaser3" fireRate="400" comment="white laser"
                   soundID="11" laserLength="80"/>
            <laser salvoID="4" resKey="laser4" skillResKey="skillLaser4" fireRate="200" comment="blue absorber"
                   soundID="13" absorber="true" speed="0.5"/>
            <laser salvoID="5" resKey="laser5" skillResKey="skillLaser5" fireRate="400" comment="pommes schuss"
                   soundID="39" laserLength="80"/>
            <laser salvoID="6" resKey="laser6" skillResKey="skillLaser6" fireRate="100" comment="pulse laser"
                   soundID="32" laserLength="60" attackLength="400"/>
            <laser salvoID="7" resKey="elaCloud1" skillResKey="elaCloud1" fireRate="4000"
                   comment="cloud from target to attacker, when ela active" soundID="32" laserLength="0" speed="0.5"/>

            <laser salvoID="8" resKey="nettel" skillResKey="-1" fireRate="1000" comment="nettel" laserLength="40"
                   soundID="15"/>
            <laser salvoID="9" resKey="protegitShot" skillResKey="-1" fireRate="1000" comment="protegit Shot"
                   soundID="19" speed="0.5" laserLength="0"/>
            <laser salvoID="10" resKey="crystal_blue" skillResKey="-1" fireRate="2000" comment="crystal blue"
                   speed="0.5" playLoop="false" soundID="17"/>
            <laser salvoID="11" resKey="devolariumShot" skillResKey="-1" fireRate="400" comment="like clouds"
                   playLoop="true" speed="0.75" soundID="16"/>
            <laser salvoID="12" resKey="lordakiumShot" skillResKey="-1" fireRate="1000" comment="like squid"
                   playLoopRotated="true" speed="0.3" soundID="15"/>
            <laser salvoID="13" resKey="crystal_red" skillResKey="-1" fireRate="2000" comment="crystal red" speed="0.5"
                   playLoop="false" soundID="17"/>
            <laser salvoID="14" resKey="footballLaser" skillResKey="footballLaser" fireRate="400"
                   comment="football laser" soundID="0" ignoreLaserPoints="true" laserFlashID="0" laserLength="80"/>
            <laser salvoID="15" resKey="footballAbsorber" skillResKey="footballAbsorber" fireRate="400"
                   comment="football absorber" soundID="13" absorber="true" speed="0.5"/>
            <laser salvoID="16" resKey="devolariumShot" skillResKey="-1" fireRate="700"
                   comment="like clouds, but slower" playLoop="true" speed="0.85" soundID="16"/>
            <laser salvoID="17" resKey="sibelonShot" skillResKey="-1" fireRate="400" comment="like clouds"
                   playLoop="true" speed="0.75" soundID="16"/>
            <laser salvoID="18" resKey="crystal_white" skillResKey="-1" fireRate="2000" comment="crystal white"
                   speed="0.5" playLoop="false" soundID="17"/>
            <laser salvoID="19" resKey="lordakiumShotSolarClash" skillResKey="-1" fireRate="2000"
                   comment="crystal white" speed="0.5" playLoop="false" soundID="17"/>

            <laser salvoID="20" resKey="laser_hitec_mothership" skillResKey="-1" fireRate="500"
                   comment="dark blue laser" soundID="110"/>
            <laser salvoID="21" resKey="laser_hitec_minion" skillResKey="-1" fireRate="3000" comment="bright blue laser"
                   soundID="111"/>
            <laser salvoID="22" resKey="laser_halloween" skillResKey="-1" fireRate="3000" comment="bright blue laser"
                   soundID="111"/>

            <laser salvoID="23" resKey="nettel" skillResKey="-1" fireRate="3000" comment="nettel" soundID="118"/>

        </laserDefinitions>

        <lasers>
            <laser class="0" type="0" comment="red laser">
                <salvo salvoID="0"/>
            </laser>
            <laser class="0" type="1" comment="blue laser">
                <salvo salvoID="1"/>
            </laser>
            <laser class="0" type="2" comment="green laser">
                <salvo salvoID="2"/>
            </laser>
            <laser class="0" type="3" comment="white laser">
                <salvo salvoID="3"/>
            </laser>
            <laser class="0" type="4" comment="blue absorber">
                <salvo salvoID="4"/>
            </laser>
            <laser class="0" type="5" comment="pommes schuss">
                <salvo salvoID="5"/>
            </laser>
            <laser class="0" type="6" comment="pulse laser">
                <salvo salvoID="6"/>
            </laser>
            <laser class="0" type="7" comment="cloud from target to attacker, when ela active">
                <salvo salvoID="7"/>
            </laser>
            <laser class="0" type="8" comment="Football Ammo; first to use double-animation - CBO-100">
                <salvo salvoID="14"/>
                <salvo salvoID="15"/>
            </laser>
            <laser class="0" type="9" comment="halloween laser">
                <salvo salvoID="22"/>
            </laser>
            <laser class="1" type="0" comment="nettel">
                <salvo salvoID="8"/>
            </laser>
            <laser class="2" type="0" comment="protegitShot">
                <salvo salvoID="9"/>
            </laser>
            <laser class="3" type="0" comment="crystal blue">
                <salvo salvoID="10"/>
            </laser>
            <laser class="4" type="0" comment="like clouds">
                <salvo salvoID="11"/>
            </laser>
            <laser class="5" type="0" comment="like squid">
                <salvo salvoID="12"/>
            </laser>
            <laser class="6" type="0" comment="crystal red">
                <salvo salvoID="13"/>
            </laser>
            <laser class="7" type="0" comment="like clouds, but slower (used for non-Boss Devolariums)">
                <salvo salvoID="16"/>
            </laser>
            <laser class="8" type="0" comment="like clouds (for sibelon)">
                <salvo salvoID="17"/>
            </laser>
            <laser class="9" type="0" comment="crystal white">
                <salvo salvoID="18"/>
            </laser>

            <laser class="10" type="100" comment="laser_hitec_mothership (for hitac mothership laser)">
                <salvo salvoID="20"/>
            </laser>

            <laser class="11" type="3" comment="laser_hitec_minion (for hitac minion laser)">
                <salvo salvoID="21"/>
            </laser>
            <laser class="12" type="0" comment="saimon">
                <salvo salvoID="23"/>
            </laser>
        </lasers>

        <!-- LasersFlashes ............................................................................................................................. -->
        <laserFlashes>
            <laserFlash id="0" resKey="laserFlash0"/>
            <laserFlash id="1" resKey="laserFlash1"/>
        </laserFlashes>
        <!-- Rockets .............................................................................................................................

		Needed Values:
		class - this is the Type of the rocket, defined in RocketPattern.as (0 = standard rockets)
		id - this is the typeID from the server
		resKey - the ResourceID for the resources.php

		Optional Values:
		soundID - the id of the sound, when a rocket launched. Default is -1, which means "no sound". -->

        <rockets>
            <rocket class="0" id="1" resKey="rocket1" soundID="2"/>
            <rocket class="0" id="2" resKey="rocket2" soundID="2"/>
            <rocket class="0" id="3" resKey="rocket3" soundID="2"/>
            <rocket class="0" id="4" resKey="rocket4" soundID="2"/>
            <rocket class="0" id="5" resKey="rocket5" soundID="2"/>
            <rocket class="0" id="6" resKey="rocket6" soundID="2"/>
            <rocket class="0" id="7" resKey="rocket7" soundID="2"/>
            <rocket class="0" id="8" resKey="rocket8" soundID="2"/>
            <rocket class="0" id="9" resKey="rocket9" soundID="2"/>
            <rocket class="0" id="10" resKey="rocket10" soundID="2"/>
            <rocket class="0" id="11" resKey="rocket11" soundID="88"/>
            <rocket class="0" id="12" resKey="rocket12" soundID="2"/>
            <rocket class="0" id="13" resKey="rocket13" soundID="2"/>
            <rocket class="0" id="14" resKey="rocket14" soundID="2"/>
            <rocket class="0" id="15" resKey="rocket15" soundID="2"/>
            <rocket class="0" id="16" resKey="rocket16" soundID="2"/>
        </rockets>

        <!-- Collectable. .............................................................................................................................

		Needed Values:
		class - this is the Type of the collectable, defined in CollectablePattern.as (0=Box, 1=Ore)
		id - this is the typeID from the server
		resKey - the ResourceID for rhe resources.php

		Optional Values:
		soundID - the id of the sound, when a collectable is farmed. Default is -1, which means "no sound".
		duration - the duration of the beam animation in msec. default is 1000.-->

        <collectables>
            <collectable class="0" id="0" resKey="box0" soundID="3" useBitmapClip="true" precache="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="1" resKey="box1" soundID="3" useBitmapClip="true" precache="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="2" resKey="box2" soundID="3" useBitmapClip="true" precache="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="3" resKey="easterEgg" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="5" resKey="bigPumpkin" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="6" resKey="orangePumpkin" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="7" resKey="turkey" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="8" resKey="bigXmasStar" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="9" resKey="stdXmasStar" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="10" resKey="flower_mothersday" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="11" resKey="theItalianBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="14" resKey="crestAndStar" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="15" resKey="polishBonusBox" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="16" resKey="winterGiftBox" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="17" resKey="carnival_box" soundID="3" hasSimpleRapresentation="true"/>
            <collectable class="0" id="19" resKey="bonusBoxSun" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <!-- 			This is currently implemented on my checkout of the trunk, called 'trunknew'. It's here just to illustrate why pirate booty is 21 -->
            <collectable class="0" id="20" resKey="petWeekBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="21" resKey="pirateBootyBox" soundID="3" useBitmapClip="true" isHarvestable="true"
                         hasSimpleRapresentation="true" precache="true"/>
            <collectable class="0" id="22" resKey="pirateBootyGoldBox" soundID="3" useBitmapClip="true"
                         isHarvestable="true" hasSimpleRapresentation="true" precache="true"/>
            <collectable class="0" id="23" resKey="hungarianRevolutionBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="24" resKey="stpatricksDayBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="25" resKey="titanicBonusBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="26" resKey="brazilBonusBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="27" resKey="victoryFrBonusBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="28" resKey="victoryRuBonusBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="29" resKey="victoryCzBonusBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="30" resKey="boxStar" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="31" resKey="pirateBootyRedBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true" precache="true"/>
            <collectable class="0" id="32" resKey="pirateBootyBlueBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true" precache="true"/>
            <collectable class="0" id="33" resKey="victoryFrBonusBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="34" resKey="mexicanBonusBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="35" resKey="boxAntec" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="36" resKey="germanUnificationDayBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="37" resKey="hispanicDayBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="38" resKey="candyBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="39" resKey="birthdayBox" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>
            <collectable class="0" id="40" resKey="treasureChest" soundID="3" useBitmapClip="true"
                         hasSimpleRapresentation="true"/>

            <collectable class="1" id="0" resKey="oreRed" soundID="3" duration="1000" objectPool="true"
                         useBitmapClip="true" precache="true" hasSimpleRapresentation="true"/>
            <collectable class="1" id="1" resKey="oreBlue" soundID="3" duration="1000" objectPool="true"
                         useBitmapClip="true" precache="true" hasSimpleRapresentation="true"/>
            <collectable class="1" id="2" resKey="oreYellow" soundID="3" duration="1000" objectPool="true"
                         useBitmapClip="true" precache="true" hasSimpleRapresentation="true"/>
            <collectable class="1" id="8" resKey="ore_palladium" soundID="3" duration="1000" objectPool="true"
                         useBitmapClip="true" hasSimpleRapresentation="true"/>

            <collectable class="2" id="112" resKey="beacon_1_2" easterResKey="beacon_easter_1_2" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="113" resKey="beacon_1_3" easterResKey="beacon_easter_1_3" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="121" resKey="beacon_2_1" easterResKey="beacon_easter_2_1" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="123" resKey="beacon_2_3" easterResKey="beacon_easter_2_3" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="131" resKey="beacon_3_1" easterResKey="beacon_easter_3_1" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="132" resKey="beacon_3_2" easterResKey="beacon_easter_3_2" soundID="3"
                         hasSimpleRapresentation="true"/>

            <collectable class="2" id="212" resKey="beacon_1_2" additionalLayers="olympicTorch" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="213" resKey="beacon_1_3" additionalLayers="olympicTorch" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="221" resKey="beacon_2_1" additionalLayers="olympicTorch" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="223" resKey="beacon_2_3" additionalLayers="olympicTorch" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="231" resKey="beacon_3_1" additionalLayers="olympicTorch" soundID="3"
                         hasSimpleRapresentation="true"/>
            <collectable class="2" id="232" resKey="beacon_3_2" additionalLayers="olympicTorch" soundID="3"
                         hasSimpleRapresentation="true"/>

            <collectable class="3" id="111" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="112" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="113" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="121" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="122" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="123" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="131" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="132" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="133" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="211" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="212" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="213" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="221" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="222" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="223" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="231" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="232" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="233" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="311" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="312" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="313" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="321" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="322" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="323" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="331" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="332" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="333" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="411" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="412" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="413" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="421" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="422" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="423" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="431" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="432" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="433" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="511" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="512" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="513" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="521" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="522" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="523" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="531" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="532" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="533" resKey="fireworks_box" hasSimpleRapresentation="true"/>

            <collectable class="3" id="601" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="602" resKey="fireworks_box" hasSimpleRapresentation="true"/>
            <collectable class="3" id="603" resKey="fireworks_box" hasSimpleRapresentation="true"/>
        </collectables>

        <!-- Mines .............................................................................................................................

		Needed Values:
		id - this is the typeID from the server
		resKey - the ResourceID for the resources.php

		Optional Values:
		explodeType - default is 0. type of explode animation. Look at the <pyroEffects> section -->

        <mines>
            <mine id="1" resKey="standardMine" useBitmapClip="true" shake="true"/>
            <mine id="2" resKey="emp_mine" useBitmapClip="true" hasStaticEffect="true" shake="false"/>
            <mine id="3" resKey="anti_shield_mine" useBitmapClip="true" shake="false"/>
            <mine id="4" resKey="direct_damage_mine" useBitmapClip="true" shake="false"/>
            <mine id="5" resKey="piratesMine" useBitmapClip="true" shake="true"/>
            <mine id="6" resKey="titanicMine" useBitmapClip="true" shake="true" explodeType="1"/>
            <mine id="7" resKey="slowdownMine" useBitmapClip="true" shake="true" explodeType="2"/>

            <mine id="10" resKey="standardMine" useBitmapClip="true" shake="false"/>
            <mine id="11" resKey="standardMine" useBitmapClip="true" shake="false"/>
        </mines>


        <mapmarkers>
            <mapmarker id="0" resKey="mapmarker0"/>
            <!--<mapmarker id="1" resKey="standardMapMarker"/>
		-->
        </mapmarkers>

        <minePulseColors>
            <minePulseColor id="1" resKey="minePulse" color="ff0000" alpha="0.7" scale="2"/>
            <minePulseColor id="2" resKey="minePulse" color="00ff00" alpha="0.7" scale="2"/>
            <minePulseColor id="3" resKey="minePulse" color="ffffff" alpha="0.7" scale="2"/>
        </minePulseColors>

        <!-- Music .............................................................................................................................

		Needed Values:
		id - this id is defined in the maps.xml
		resKey - the ResourceID for rhe resources.php

		Optional Values:
		volume - default is 1 -->

        <music>
            <track id="0" resKey="track0" volume="0.7"/>
            <track id="1" resKey="track1" volume="0.7"/>
            <track id="2" resKey="track2" volume="0.7"/>
            <track id="3" resKey="track3" volume="0.7"/>
            <track id="4" resKey="track4" volume="0.7"/>
            <track id="5" resKey="track5" volume="0.7"/>
            <track id="6" resKey="track6" volume="0.7"/>
        </music>

        <!-- Sounds .............................................................................................................................

		Needed Values:
		id - this is the typeID from the server
		resKey - the ResourceID for rhe resources.php

		Optional Values:
		loop - default is false.
		volume - default is 1
		interval - default is -1
		intervalFluctuation - default is 0 -->

        <sounds>
            <sound id="0" comment="laser attack 1" volume="0.4" soundbank="combatSounds">
                <reskeys>
                    <reskey resKey="laser0_0"></reskey>
                    <reskey resKey="laser0_1"></reskey>
                    <reskey resKey="laser0_2"></reskey>
                </reskeys>
            </sound>
            <sound id="1" soundbank="damageSounds" comment="explosion">
                <reskeys>
                    <reskey resKey="explosion0_0"/>
                    <reskey resKey="explosion0_1"/>
                    <reskey resKey="explosion0_2"/>
                </reskeys>
            </sound>
            <sound id="2" soundbank="combatSounds" comment="rocket attack" volume="0.6">
                <reskeys>
                    <reskey resKey="rocket0_1"/>
                    <reskey resKey="rocket0_0"/>
                    <reskey resKey="rocket0_2"/>
                </reskeys>
            </sound>
            <sound id="3" soundbank="miscSounds" comment="beam">
                <reskeys>
                    <reskey resKey="beam0"/>
                    <reskey resKey="beam1"/>
                </reskeys>
            </sound>
            <sound id="4" soundbank="miscSounds" comment="engine sound" volume="0.6">
                <reskeys>
                    <reskey resKey="engine0"/>
                </reskeys>
            </sound>
            <sound id="5" soundbank="portalSounds" comment="portal Jump">
                <reskeys>
                    <reskey resKey="portalJump0"/>
                </reskeys>
            </sound>
            <sound id="6" soundbank="portalSounds" comment="portal Done">
                <reskeys>
                    <reskey resKey="portalDone"/>
                </reskeys>
            </sound>
            <sound id="7" soundbank="damageSounds" comment="rocket Damage" volume="0.7">
                <reskeys>
                    <reskey resKey="rocketDamage0_0"/>
                    <reskey resKey="rocketDamage0_1"/>
                    <reskey resKey="rocketDamage0_2"/>
                </reskeys>
            </sound>
            <sound id="8" soundbank="damageSounds" comment="laser Damage"
                   volume="0.5">
                <reskeys>
                    <reskey resKey="laserDamage0"/>
                </reskeys>
            </sound>
            <sound id="9" soundbank="combatSounds" comment="laser attack"
                   volume="0.4">
                <reskeys>
                    <reskey resKey="laser1_0"/>
                    <reskey resKey="laser1_1"/>
                    <reskey resKey="laser1_2"/>
                </reskeys>
            </sound>
            <sound id="10" soundbank="combatSounds" comment="laser attack"
                   volume="0.4">
                <reskeys>
                    <reskey resKey="laser2_0"/>
                    <reskey resKey="laser2_1"/>
                    <reskey resKey="laser2_2"/>
                </reskeys>
            </sound>
            <sound id="11" soundbank="combatSounds" comment="laser attack"
                   volume="0.4">
                <reskeys>
                    <reskey resKey="laser3_0"/>
                    <reskey resKey="laser3_1"/>
                    <reskey resKey="laser3_2"/>
                </reskeys>
            </sound>
            <sound id="12" soundbank="damageSounds" comment="explosion">
                <reskeys>
                    <reskey resKey="explosion1_0"/>
                    <reskey resKey="explosion1_1"/>
                    <reskey resKey="explosion1_2"/>
                </reskeys>
            </sound>
            <sound id="13" soundbank="combatSounds" comment="absorber">
                <reskeys>
                    <reskey resKey="absorber0"/>
                    <reskey resKey="absorber1"/>
                    <reskey resKey="absorber2"/>
                </reskeys>
            </sound>
            <sound id="14" soundbank="introSounds" comment="atmosphere0">
                <reskeys>
                    <reskey resKey="atmosphere0"/>
                </reskeys>
            </sound>
            <sound id="15" soundbank="combatSounds" comment="nettel0" volume="0.4">
                <reskeys>
                    <reskey resKey="nettel0"/>
                    <reskey resKey="nettel1"/>
                    <reskey resKey="nettel2"/>
                </reskeys>
            </sound>
            <sound id="16" soundbank="combatSounds" comment="devolarium0" volume="0.4">
                <reskeys>
                    <reskey resKey="devolarium0"/>
                    <reskey resKey="devolarium1"/>
                    <reskey resKey="devolarium2"/>
                </reskeys>
            </sound>
            <sound id="17" soundbank="combatSounds" comment="crystal0" volume="0.4">
                <reskeys>
                    <reskey resKey="crystal0"/>
                    <reskey resKey="crystal1"/>
                    <reskey resKey="crystal2"/>
                </reskeys>
            </sound>
            <sound id="18" soundbank="damageSounds" comment="explosion2">
                <reskeys>
                    <reskey resKey="explosion2_0"/>
                    <reskey resKey="explosion2_1"/>
                    <reskey resKey="explosion2_2"/>
                </reskeys>
            </sound>
            <sound id="19" soundbank="combatSounds" comment="protegit0" volume="0.4">
                <reskeys>
                    <reskey resKey="protegit0"/>
                    <reskey resKey="protegit1"/>
                    <reskey resKey="protegit2"/>
                </reskeys>
            </sound>
            <sound id="20" soundbank="voiceSounds">
                <reskeys>
                    <reskey resKey="voice_ready"/>
                </reskeys>
            </sound>
            <sound id="21" soundbank="voiceSounds">
                <reskeys>
                    <reskey resKey="voice_activate"/>
                </reskeys>
            </sound>
            <sound id="22" soundbank="voiceSounds">
                <reskeys>
                    <reskey resKey="voice_standby"/>
                </reskeys>
            </sound>
            <sound id="23" soundbank="voiceSounds">
                <reskeys>
                    <reskey resKey="voice_warning"/>
                </reskeys>
            </sound>
            <sound id="24" soundbank="uiSounds">
                <reskeys>
                    <reskey resKey="select0"/>
                </reskeys>
            </sound>
            <sound id="25" soundbank="uiSounds">
                <reskeys>
                    <reskey resKey="select1"/>
                </reskeys>
            </sound>
            <sound id="26" soundbank="tdmSounds">
                <reskeys>
                    <reskey resKey="tdmIntro"/>
                </reskeys>
            </sound>
            <sound id="27" soundbank="tdmSounds">
                <reskeys>
                    <reskey resKey="tdm_counter"/>
                </reskeys>
            </sound>
            <sound id="28" soundbank="tdmSounds">
                <reskeys>
                    <reskey resKey="tdm_start"/>
                </reskeys>
            </sound>
            <sound id="29" soundbank="voiceSounds">
                <reskeys>
                    <reskey resKey="voice_accessDenied"/>
                </reskeys>
            </sound>
            <sound id="30" soundbank="damageSounds">
                <reskeys>
                    <reskey resKey="smartbomb0"/>
                </reskeys>
            </sound>
            <sound id="31" soundbank="damageSounds">
                <reskeys>
                    <reskey resKey="instashield0"/>
                </reskeys>
            </sound>
            <sound id="32" soundbank="miscSounds">
                <reskeys>
                    <reskey resKey="grid"/>
                </reskeys>
            </sound>
            <sound id="32" soundbank="combatSounds" volume="0.6">
                <reskeys>
                    <reskey resKey="laser6_0"/>
                    <reskey resKey="laser6_1"/>
                    <reskey resKey="laser6_2"/>
                </reskeys>
            </sound>
            <sound id="33" soundbank="uiSounds">
                <reskeys>
                    <reskey resKey="slotMove"/>
                </reskeys>
            </sound>
            <sound id="34" soundbank="damageSounds">
                <reskeys>
                    <reskey resKey="firework0"/>
                    <reskey resKey="firework1"/>
                    <reskey resKey="firework2"/>
                </reskeys>
            </sound>
            <sound id="35" soundbank="miscSounds">
                <reskeys>
                    <reskey resKey="repair"/>
                </reskeys>
            </sound>
            <sound id="36" soundbank="damageSounds">
                <reskeys>
                    <reskey resKey="explosion2_0"/>
                    <reskey resKey="explosion2_1"/>
                    <reskey resKey="explosion2_2"/>
                </reskeys>
            </sound>
            <sound id="37" soundbank="uiSounds" volume="0.2">
                <reskeys>
                    <reskey resKey="shieldSelected"/>
                </reskeys>
            </sound>
            <sound id="38" soundbank="combatSounds">
                <reskeys>
                    <reskey resKey="pulse"/>
                </reskeys>
            </sound>
            <sound id="39" soundbank="combatSounds" volume="0.6">
                <reskeys>
                    <reskey resKey="laser5_0"/>
                    <reskey resKey="laser5_1"/>
                    <reskey resKey="laser5_2"/>
                </reskeys>
            </sound>
            <sound id="40" soundbank="combatSounds" volume="0.6">
                <reskeys>
                    <reskey resKey="airstrike0"/>
                    <reskey resKey="airstrike1"/>
                    <reskey resKey="airstrike2"/>
                </reskeys>
            </sound>
            <sound id="41" soundbank="introSounds" comment="atmosphere1">
                <reskeys>
                    <reskey resKey="atmosphere1"/>
                </reskeys>
            </sound>
            <sound id="42" soundbank="uiSounds" comment="noise" volume="0.1">
                <reskeys>
                    <reskey resKey="noise"/>
                </reskeys>
            </sound>
            <sound id="43" soundbank="damageSounds" comment="emp" volume="0.6">
                <reskeys>
                    <reskey resKey="emp"/>
                </reskeys>
            </sound>
            <sound id="44" soundbank="introSounds" comment="space" volume="0.1">
                <reskeys>
                    <reskey resKey="space"/>
                </reskeys>
            </sound>
            <sound id="45" soundbank="damageSounds" comment="electric"
                   volume="0.3">
                <reskeys>
                    <reskey resKey="electric0"/>
                    <reskey resKey="electric1"/>
                    <reskey resKey="electric2"/>
                </reskeys>
            </sound>
            <sound id="46" soundbank="uiSounds" comment="rocketLoad" volume="0.5">
                <reskeys>
                    <reskey resKey="rocketLoad"/>
                </reskeys>
            </sound>
            <sound id="47" soundbank="uiSounds" comment="rocketsLoaded" volume="0.5">
                <reskeys>
                    <reskey resKey="rocketsLoaded"/>
                </reskeys>
            </sound>
            <sound id="48" soundbank="uiSounds" comment="computer_0" volume="0.2">
                <reskeys>
                    <reskey resKey="signal_0"/>
                </reskeys>
            </sound>
            <sound id="49" soundbank="uiSounds" comment="computer_0" volume="0.2">
                <reskeys>
                    <reskey resKey="signal_1"/>
                </reskeys>
            </sound>
            <sound id="50" soundbank="uiSounds" comment="computer_0" volume="0.2">
                <reskeys>
                    <reskey resKey="signal_2"/>
                </reskeys>
            </sound>
            <sound id="51" soundbank="uiSounds">
                <reskeys>
                    <reskey resKey="new_achievement"/>
                </reskeys>
            </sound>
            <sound id="52" soundbank="alienMothership">
                <reskeys>
                    <reskey resKey="spawn0"/>
                </reskeys>
            </sound>
            <sound id="53" soundbank="alienMothership" volume="0.5">
                <reskeys>
                    <reskey resKey="rotating"/>
                </reskeys>
            </sound>
            <sound id="54" soundbank="alienMothership" volume="0.5">
                <reskeys>
                    <reskey resKey="movement"/>
                </reskeys>
            </sound>
            <sound id="55" soundbank="combatSounds" comment=" attack A1 - GroupGate"
                   volume="0.6">
                <reskeys>
                    <reskey resKey="laserA1"/>
                </reskeys>
            </sound>
            <sound id="56" soundbank="combatSounds" comment=" attack A2 - GroupGate"
                   volume="0.6">
                <reskeys>
                    <reskey resKey="laserA2"/>
                </reskeys>
            </sound>
            <sound id="57" soundbank="combatSounds" comment=" attack B1 - GroupGate"
                   volume="0.6">
                <reskeys>
                    <reskey resKey="laserB1"/>
                </reskeys>
            </sound>
            <sound id="58" soundbank="combatSounds" comment=" attack B2 - GroupGate"
                   volume="0.6">
                <reskeys>
                    <reskey resKey="laserB2"/>
                </reskeys>
            </sound>
            <sound id="59" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping1"/>
                </reskeys>
            </sound>
            <sound id="60" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping2"/>
                </reskeys>
            </sound>
            <sound id="61" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping3"/>
                </reskeys>
            </sound>
            <sound id="62" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping4"/>
                </reskeys>
            </sound>
            <sound id="63" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping5"/>
                </reskeys>
            </sound>
            <sound id="64" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping6"/>
                </reskeys>
            </sound>
            <sound id="65" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping7"/>
                </reskeys>
            </sound>
            <sound id="66" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="beeping8"/>
                </reskeys>
            </sound>
            <sound id="67" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="activation"/>
                </reskeys>
            </sound>
            <sound id="68" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="deactivation"/>
                </reskeys>
            </sound>
            <sound id="69" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="destruction"/>
                </reskeys>
            </sound>
            <sound id="70" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="levelup"/>
                </reskeys>
            </sound>
            <sound id="71" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="healing"/>
                </reskeys>
            </sound>
            <sound id="72" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="command"/>
                </reskeys>
            </sound>
            <sound id="73" soundbank="petSounds" volume="0.5">
                <reskeys>
                    <reskey resKey="error"/>
                </reskeys>
            </sound>
            <sound id="75" soundbank="pirateSounds" comment="pirate - Barracudas kamikaze mode"
                   volume="0.7">
                <reskeys>
                    <reskey resKey="kamikaze"/>
                </reskeys>
            </sound>
            <sound id="76" soundbank="pirateSounds" comment="pirate - Saboteur debuff shot">
                <reskeys>
                    <reskey resKey="sabshot"/>
                </reskeys>
            </sound>
            <sound id="77" soundbank="pirateSounds" comment="pirate - Battleray heal beam">
                <reskeys>
                    <reskey resKey="heal"/>
                </reskeys>
            </sound>
            <sound id="78" soundbank="pirateSounds" comment="pirate - Battleray rage mode">
                <reskeys>
                    <reskey resKey="rage"/>
                </reskeys>
            </sound>
            <sound id="79" soundbank="pirateSounds" comment="pirate - Battleray spawn minions">
                <reskeys>
                    <reskey resKey="spawn"/>
                </reskeys>
            </sound>
            <sound id="80" soundbank="pirateSounds"
                   comment="pirate - Battleray invincibility shield">
                <reskeys>
                    <reskey resKey="invincibility"/>
                </reskeys>
            </sound>
            <sound id="81" soundbank="combatSounds" comment="Speed Buff Effect Sound - Start-up">
                <reskeys>
                    <reskey resKey="lightningStart"/>
                </reskeys>
            </sound>
            <sound id="82" soundbank="combatSounds" comment="Speed Buff Effect Sound - Looping">
                <reskeys>
                    <reskey resKey="lightningLoop"/>
                </reskeys>
            </sound>
            <sound id="83" soundbank="miscSounds" comment="Triple Kill!">
                <reskeys>
                    <reskey resKey="tripleKill"/>
                </reskeys>
            </sound>
            <sound id="84" soundbank="miscSounds" comment="Unstoppable!">
                <reskeys>
                    <reskey resKey="unstoppable"/>
                </reskeys>
            </sound>
            <sound id="85" soundbank="miscSounds" comment="Godlike!">
                <reskeys>
                    <reskey resKey="godlike"/>
                </reskeys>
            </sound>
            <sound id="86" soundbank="miscSounds" comment="Like a Boss!">
                <reskeys>
                    <reskey resKey="likeABoss"/>
                </reskeys>
            </sound>
            <sound id="87" soundbank="shipSounds" comment="Santa-1100101 - Ho ho ho"
                   interval="15" intervalFluctuation="5">
                <reskeys>
                    <reskey resKey="hohoho"/>
                </reskeys>
            </sound>
            <sound id="88" soundbank="combatSounds" comment="rocket attack" volume="0.6">
                <reskeys>
                    <reskey resKey="rocket1_0"/>
                    <reskey resKey="rocket1_1"/>
                    <reskey resKey="rocket1_2"/>
                </reskeys>
            </sound>
            <sound id="89" soundbank="uiSounds" comment="unlock an achievement">
                <reskeys>
                    <reskey resKey="getAchievement"/>
                </reskeys>
            </sound>
            <sound id="90" soundbank="abilitySounds" comment="Support Ship Healing Beam">
                <reskeys>
                    <reskey resKey="aegisHPRepair"/>
                </reskeys>
            </sound>
            <sound id="91" soundbank="abilitySounds" comment="Support Ship Shield Beam">
                <reskeys>
                    <reskey resKey="aegisShieldRecharge"/>
                </reskeys>
            </sound>
            <sound id="92" soundbank="abilitySounds" comment="Support Ship Healing Pod">
                <reskeys>
                    <reskey resKey="aegisHealingPodLoop"/>
                </reskeys>
            </sound>
            <sound id="93" soundbank="abilitySounds" comment="Tank Ship Draw Fire">
                <reskeys>
                    <reskey resKey="citadelDrawFire"/>
                </reskeys>
            </sound>
            <sound id="95" soundbank="abilitySounds" comment="Tank Ship Travel Mode">
                <reskeys>
                    <reskey resKey="citadelTravelMode"/>
                </reskeys>
            </sound>
            <sound id="96" soundbank="abilitySounds" comment="Tank Ship Fortifying">
                <reskeys>
                    <reskey resKey="citadelFortifyStart"/>
                </reskeys>
            </sound>
            <sound id="97" soundbank="abilitySounds" comment="Tank Ship Unfortifying">
                <reskeys>
                    <reskey resKey="citadelFortifyStop"/>
                </reskeys>
            </sound>
            <sound id="98" soundbank="abilitySounds" comment="Tank Ship Protect Aura">
                <reskeys>
                    <reskey resKey="citadelProtectLoop"/>
                </reskeys>
            </sound>
            <sound id="99" soundbank="abilitySounds" comment="Recon Ship Ultimate Cloaking">
                <reskeys>
                    <reskey resKey="spearheadUltimateCloaking"/>
                </reskeys>
            </sound>
            <sound id="100" soundbank="abilitySounds" comment="Recon Ship JAM-X"
                   volume="0.7">
                <reskeys>
                    <reskey resKey="spearheadJAMX"/>
                </reskeys>
            </sound>
            <sound id="101" soundbank="abilitySounds" comment="Recon Ship Mark Target">
                <reskeys>
                    <reskey resKey="spearheadMarkTarget"/>
                </reskeys>
            </sound>
            <sound id="102" soundbank="abilitySounds" comment="Recon Ship Double Minimap Reveal">
                <reskeys>
                    <reskey resKey="spearheadDoubleMinimapReveal"/>
                </reskeys>
            </sound>
            <sound id="103" soundbank="questSounds"
                   comment="Quest Giver icon appears above station">
                <reskeys>
                    <reskey resKey="questgiver_icon_appears"/>
                </reskeys>
            </sound>
            <sound id="104" soundbank="questSounds" comment="Quest Giver window opens">
                <reskeys>
                    <reskey resKey="questgiver_window_opened"/>
                </reskeys>
            </sound>
            <sound id="105" soundbank="questSounds" comment="Quest finished">
                <reskeys>
                    <reskey resKey="quest_finished"/>
                </reskeys>
            </sound>
            <sound id="106" soundbank="questSounds" comment="Quest failed">
                <reskeys>
                    <reskey resKey="quest_failed"/>
                </reskeys>
            </sound>
            <sound id="107" soundbank="questSounds" comment="Quest's sub-quest finished">
                <reskeys>
                    <reskey resKey="quest_subquest_finished"/>
                </reskeys>
            </sound>
            <sound id="108" soundbank="shipSounds" comment="Hitac mothership engine loop"
                   volume="2" loop="true" interval="2.675">
                <reskeys>
                    <reskey resKey="hitac_mothership_engine_loop"/>
                </reskeys>
            </sound>
            <sound id="109" soundbank="shipSounds" comment="Hitac mothership call"
                   volume="2" loop="true" interval="20">
                <reskeys>
                    <reskey resKey="hitac_mothership_call"/>
                </reskeys>
            </sound>
            <sound id="110" soundbank="combatSounds" comment="Hitac mothership cannon shot"
                   volume="1">
                <reskeys>
                    <reskey resKey="hitac_mothership_cannon_shot"/>
                </reskeys>
            </sound>
            <sound id="111" soundbank="combatSounds" comment="Hitac minion shot"
                   volume="0.5">
                <reskeys>
                    <reskey resKey="laser0_0"/>
                    <reskey resKey="laser0_1"/>
                    <reskey resKey="laser0_2"/>
                </reskeys>
            </sound>
            <sound id="112" soundbank="shipSounds" comment="Hitac release minion"
                   volume="1.7">
                <reskeys>
                    <reskey resKey="hitac_release_minion"/>
                </reskeys>
            </sound>
            <sound id="113" soundbank="abilitySounds" comment="sbb" volume="1">
                <reskeys>
                    <reskey resKey="stickyBombBeep"/>
                </reskeys>
            </sound>
            <sound id="114" soundbank="miscSounds" comment="engine sound" volume="0.6">
                <reskeys>
                    <reskey resKey="engine_start0"/>
                    <reskey resKey="engine_start1"/>
                    <reskey resKey="engine_start2"/>
                </reskeys>
            </sound>
            <sound id="115" soundbank="miscSounds" comment="repair start sound">
                <reskeys>
                    <reskey resKey="repair_start"/>
                </reskeys>
            </sound>
            <sound id="116" soundbank="uiSounds" comment="rockets reload start" volume="0.8">
                <reskeys>
                    <reskey resKey="rocketsLoadStart"/>
                </reskeys>
            </sound>
            <sound id="117" comment="ambient" soundbank="ambience" volume="1.6">
                <reskeys>
                    <reskey resKey="ambience_loop_0"/>
                </reskeys>
            </sound>
            <sound id="118" comment="saimon_shot" soundbank="combatSounds" volume="0.6">
                <reskeys>
                    <reskey resKey="saimon0"/>
                    <reskey resKey="saimon1"/>
                    <reskey resKey="saimon2"/>
                </reskeys>
            </sound>
            <sound id="119" comment="sector captured" soundbank="sectorControlSounds" volume="1">
                <reskeys>
                    <reskey resKey="sectorCaptured"/>
                </reskeys>
            </sound>
            <sound id="120" comment="sector neutralized" soundbank="sectorControlSounds" volume="1">
                <reskeys>
                    <reskey resKey="sectorNeutralized"/>
                </reskeys>
            </sound>
            <sound id="121" comment="low ticket amount warning" soundbank="sectorControlSounds" volume="1">
                <reskeys>
                    <reskey resKey="ticketWarning"/>
                </reskeys>
            </sound>
            <sound id="122" comment="sector healed hero" soundbank="sectorControlSounds" volume="1">
                <reskeys>
                    <reskey resKey="sectorHealing"/>
                </reskeys>
            </sound>
            <sound id="123" comment="ploepp" soundbank="miscSounds" volume="1.3">
                <reskeys>
                    <reskey resKey="ploepp"/>
                </reskeys>
            </sound>
        </sounds>

        <!-- PYRO EFFECTS .............................................................................................................................

		Needed Values:
		class - this is the type of the pyro-effect which is hardcoded in PyroPattern.as
			class 0 is shipExplosion
			class 1 is mineExplosion
			class 2 is laserDamage
			class 3 is rocketDamage
			class 4 is smartbomb
			class 5 is instashield
		id - this is the typeID from the server
		resKey - the ResourceID for the resources.php
		soundID - default is -1, which means no sound. This defines the type of sound when the animation plays. Look at the <soundEffects> section -->

        <pyroEffects>
            <pyroEffect class="0" id="0" resKey="explosion0" soundID="1" useBitmapClip="true" precache="true"
                        rotatable="true"/>
            <pyroEffect class="0" id="1" resKey="explosion1" soundID="1" rotatable="false"/>
            <pyroEffect class="0" id="2" resKey="explosion2" soundID="1" rotatable="false"/>
            <pyroEffect class="0" id="3" resKey="explosion3" soundID="1" rotatable="false"/>
            <pyroEffect class="0" id="4" resKey="explosion4" soundID="1" rotatable="false"/>
            <pyroEffect class="0" id="5" resKey="explosion5" soundID="1" rotatable="false"/>
            <pyroEffect class="0" id="6" resKey="explosion0" soundID="1" useBitmapClip="true" displayShockwave="true"
                        rotatable="true"/>
            <pyroEffect class="0" id="7" resKey="explosion6" soundID="1" rotatable="false"/>
            <pyroEffect class="0" id="8" resKey="explosion7" soundID="1" rotatable="true"/>

            <pyroEffect class="1" id="0" resKey="explosion2" soundID="1"/>
            <pyroEffect class="1" id="1" resKey="explosion8" soundID="1"/>
            <pyroEffect class="1" id="2" resKey="explosion9" soundID="1"/>

            <pyroEffect class="2" id="0" resKey="laserDamage0" useBitmapClip="true" precache="true"/>
            <pyroEffect class="2" id="1" resKey="laserDamage1" useBitmapClip="true" precache="true"/>
            <pyroEffect class="2" id="2" resKey="laserDamage2" useBitmapClip="true" precache="true"/>

            <pyroEffect class="3" id="0" resKey="rocketDamage0" soundID="7" useBitmapClip="true" precache="true"/>
            <pyroEffect class="3" id="1" resKey="rocketDamage1" soundID="12" useBitmapClip="true" precache="true"/>
            <pyroEffect class="3" id="2" resKey="rocketDamage2" soundID="7" useBitmapClip="true" precache="true"/>

            <pyroEffect class="4" id="0" resKey="smartbomb1" soundID="30"/>

            <pyroEffect class="5" id="0" resKey="instaShield"/>
        </pyroEffects>

        <shockwaves>
            <shockwave id="0" resKey="shockwave0" soundID="16" radius="300" duration="2" beginScale="1" endScale="0.25"
                       maxShockwaves="40" shakeScreen="true"/>
            <shockwave id="1" resKey="shockwave1" soundID="16" radius="300" duration="2" beginScale="1" endScale="0.25"
                       maxShockwaves="40" shakeScreen="true"/>
            <shockwave id="2" resKey="shockwave0" soundID="16" radius="300" duration="2" beginScale="1" endScale="0.25"
                       maxShockwaves="30" shakeScreen="false"/>
        </shockwaves>

        <lensflares>
            <lensflare id="0" resKey="lensflare0"/>
            <lensflare id="1" resKey="lensflare1"/>
            <lensflare id="2" resKey="lensflare2"/>
            <lensflare id="3" resKey="lensflare3"/>
            <lensflare id="5" resKey="lensflare5"/>
        </lensflares>
        <!-- FIREWORKS .............................................................................................................................

		Needed Values:
		class - this is the type of the pyro-effect which is hardcoded in PyroPattern.as
			class 0 is red
			class 1 is blue
			class 2 is green
			class 3 is mutlicolor red, white, blue
		id - this is the typeID from the server
		resKey - the ResourceID for the resources.php
		soundID - default is -1, which means no sound. This defines the type of sound when the animation plays. Look at the <soundEffects> section -->

        <fireworks>
            <firework class="3" id="0" resKey="firework_small_independence_day" soundID="1" useBitmapClip="true"/>
            <firework class="3" id="1" resKey="firework_medium_independence_day" soundID="1" useBitmapClip="true"/>
            <firework class="3" id="2" resKey="firework_large_independence_day" soundID="1" useBitmapClip="true"/>

            <firework class="3" id="3" resKey="firework_small_short_term_event" soundID="1" useBitmapClip="true"/>
            <firework class="3" id="4" resKey="firework_medium_short_term_event" soundID="1" useBitmapClip="true"/>
            <firework class="3" id="5" resKey="firework_large_short_term_event" soundID="1" useBitmapClip="true"/>
        </fireworks>

        <!-- ENGINES ............................................................................................................................. -->
        <engines>
            <engine type="0" resKey="engine0" soundID="4"/>
            <engine type="1" resKey="engine1" soundID="4"/>
        </engines>

        <!-- ENGINES .............................................................................................................................

		Needed Values:

		id - this is the ID defined in the ship section
		resKey - the ResourceID for the resources.php
		soundID - default is -1, which means no sound. This defines the type of sound when the animation plays. Look at the <soundEffects> section -->
        <engineSmokes>
            <engineSmoke id="0" resKey="engineSmoke0"/>
        </engineSmokes>

        <rocketSmokes>
            <rocketSmoke id="0" resKey="rocketSmoke0" particleInterval="15" particleDuration="0.75"/>
            <rocketSmoke id="1" resKey="rocketSmoke1" particleInterval="15" particleDuration="0.75"/>
            <rocketSmoke id="2" resKey="rocketSmoke2" particleInterval="15" particleDuration="0.75"/>
        </rocketSmokes>


        <!-- Repair Robots ............................................................................................................................. -->
        <repairRobots>
            <repairRobot type="0" resKey="repairRobot0"/>
            <repairRobot type="1" resKey="repairRobot1"/>
            <repairRobot type="2" resKey="battleRepairRobot1"/>
        </repairRobots>


        <!-- Dockable GamemapElements Positions ............................................................................................................ -->
        <dockableElementPositions>
            <!--  hitac´s minion positions -->
            <dockableElement class="1" dockSound="-1" undockSound="112" dockedClip="fx_blue" undockedClip="fx_rage">
                <positionsList name="left_blade_1" pos="1" layer="front" data="-178,79"/>
                <positionsList name="left_blade_2" pos="2" layer="back" data="-153,-32"/>
                <positionsList name="back_blade_1" pos="3" layer="back" data="-14,-112"/>
                <positionsList name="back_blade_2" pos="4" layer="back" data="109,-72"/>
                <positionsList name="back_blade_1" pos="5" layer="back" data="158,85"/>
                <positionsList name="back_blade_2" pos="6" layer="front" data="41,161"/>
            </dockableElement>
        </dockableElementPositions>

        <!-- Engine Positions ............................................................................................................................. -->
        <enginePositions>
            <enginePosition comment="Phoenix" class="1">
                <positionsList name="center"
                               data="25.4,-2.4,25.1,1.0,23.5,4.4,21.2,7.6,18.3,10.2,14.2,12.5,10.0,14.1,5.3,15.1,0.2,15.6,-4.4,15.1,-9.5,14.3,-13.5,12.5,-17.7,10.4,-20.9,7.8,-23.2,4.7,-24.7,1.3,-25.2,-2.1,-24.5,-5.7,-23.0,-9.1,-21.1,-12.1,-17.7,-14.9,-14.1,-17.0,-9.6,-18.8,-4.7,-19.8,0.0,-20.1,5.0,-19.9,9.7,-18.8,14.1,-17.2,17.9,-14.9,21.0,-12.3,23.3,-9.2,24.7,-5.8"/>
            </enginePosition>
            <enginePosition comment="Yamato" class="2">
                <positionsList name="center"
                               data="42.7,-5.2,41.7,0.7,39.4,6.3,35.4,11.5,30.4,16.0,23.8,19.8,16.3,22.6,8.5,24.3,0.1,24.9,-8.0,24.3,-16.2,22.6,-23.3,19.8,-29.7,16.0,-35.0,11.5,-39.1,6.4,-41.4,0.7,-42.1,-5.2,-41.4,-11.1,-38.9,-16.7,-35.1,-21.9,-29.9,-26.4,-23.3,-30.2,-16.0,-33.0,-8.0,-34.6,0.1,-35.2,8.5,-34.6,16.5,-33.0,23.8,-30.2,30.2,-26.4,35.6,-21.9,39.6,-16.7,42.0,-11.1"/>
            </enginePosition>
            <enginePosition comment="Leonov" class="3">
                <positionsList name="center"
                               data="33.9,0.8,33.4,5.5,31.3,10.1,28.3,14.2,24.1,17.9,18.7,20.9,13.0,23.1,6.6,24.4,0.3,24.8,-6.6,24.5,-12.9,23.1,-18.7,20.8,-23.8,17.9,-28.1,14.3,-31.1,9.9,-33.0,5.5,-33.6,0.8,-33.0,-3.9,-31.3,-8.3,-28.0,-12.4,-23.8,-16.0,-18.7,-19.0,-12.9,-21.2,-6.5,-22.6,0.3,-23.2,6.7,-22.6,13.0,-21.2,18.8,-19.0,24.0,-16.1,28.2,-12.4,31.5,-8.3,33.4,-3.9"/>
            </enginePosition>
            <enginePosition comment="Defcom" class="4">
                <positionsList name="center"
                               data="31.3,-2.9,30.7,1.4,29.0,5.5,26.0,9.4,22.2,12.7,17.7,15.4,12.5,17.5,6.4,18.9,0.5,19.3,-5.5,18.9,-11.3,17.7,-16.9,15.8,-21.7,13.1,-25.5,9.8,-28.1,6.0,-30.0,1.8,-30.9,-2.3,-30.3,-6.6,-28.7,-10.7,-25.7,-14.6,-21.9,-17.9,-17.4,-20.6,-12.1,-22.7,-6.1,-24.1,-0.2,-24.5,5.8,-24.1,11.6,-22.8,17.3,-21.0,22.0,-18.3,25.9,-15.0,28.5,-11.1,30.3,-7.0"/>
            </enginePosition>
            <enginePosition comment="Liberator" class="5">
                <positionsList name="center"
                               data="30.8,1.5,30.3,5.7,28.5,9.7,25.8,13.5,22.0,16.7,17.1,19.5,11.8,21.5,6.1,22.7,0.5,23.0,-5.7,22.7,-11.4,21.5,-16.7,19.5,-21.2,16.7,-25.0,13.5,-27.7,9.7,-29.5,5.7,-30.0,1.5,-29.6,-2.6,-27.7,-6.8,-24.7,-10.5,-21.0,-13.8,-16.8,-16.3,-11.4,-18.3,-5.7,-19.5,0.3,-20.0,6.1,-19.5,11.8,-18.3,16.9,-16.3,22.0,-13.8,25.8,-10.5,28.5,-6.8,30.0,-2.6"/>
                <stage id="1" engines="center"/>
            </enginePosition>
            <enginePosition comment="Piranha" class="6">
                <positionsList name="center"
                               data="56.2,-8.5,55.4,-0.9,52.1,6.7,46.8,13.5,40.1,19.5,31.4,24.6,21.8,28.3,11.4,30.6,0.5,31.3,-10.5,30.6,-20.9,28.3,-30.9,24.8,-39.3,19.8,-46.2,13.8,-51.5,6.9,-54.7,-0.5,-55.9,-8.3,-55.1,-15.9,-51.7,-23.5,-46.4,-30.4,-39.5,-36.3,-31.4,-41.2,-21.4,-45.1,-10.8,-47.4,-0.2,-48.1,10.9,-47.4,21.2,-45.1,31.0,-41.4,39.6,-36.6,46.7,-30.6,51.8,-23.7,55.2,-16.3"/>
            </enginePosition>
            <enginePosition comment="Nostromo" class="7">
                <positionsList name="center"
                               data="41.2,-8.2,40.5,-2.7,38.1,2.9,34.4,7.8,29.1,12.3,23.0,15.8,15.9,18.5,8.0,20.1,0.0,20.8,-8.0,20.1,-15.6,18.5,-22.7,15.8,-28.8,12.1,-34.0,7.8,-37.6,2.7,-40.2,-2.7,-40.9,-8.4,-40.2,-14.0,-37.6,-19.5,-34.0,-24.5,-28.6,-29.0,-22.6,-32.5,-15.5,-35.2,-7.8,-36.8,0.4,-37.4,8.3,-36.8,16.1,-35.2,23.0,-32.5,29.2,-28.8,34.5,-24.5,38.1,-19.3,40.5,-14.0"/>
            </enginePosition>
            <enginePosition comment="Vengeance" class="8">
                <positionsList name="center"
                               data="51.3,-0.3,50.5,6.7,47.7,13.7,43.1,20.0,37.1,25.5,29.3,30.2,20.8,33.6,11.3,35.7,1.2,36.7,-8.7,36.1,-18.4,34.2,-27.2,31.0,-35.0,26.5,-41.7,21.2,-46.5,15.0,-49.5,8.2,-50.7,1.2,-50.2,-5.8,-47.6,-12.5,-42.7,-19.0,-36.7,-24.5,-29.3,-29.0,-20.4,-32.5,-10.9,-34.8,-1.1,-35.5,9.1,-35.0,19.0,-33.3,27.8,-30.0,35.5,-25.5,42.3,-20.3,47.0,-14.0,50.1,-7.3"/>
            </enginePosition>
            <enginePosition comment="Bigboy" class="9">
                <positionsList name="center"
                               data="55.8,-1.0,54.5,6.7,51.5,14.0,46.5,20.7,39.5,26.7,31.5,31.5,21.5,35.2,11.3,37.5,0.5,38.2,-10.2,37.5,-20.5,35.2,-30.2,31.7,-38.2,26.7,-45.7,21.0,-50.7,14.2,-54.0,7.0,-54.7,-0.8,-53.9,-8.3,-50.2,-15.8,-45.2,-22.5,-38.9,-28.3,-30.2,-33.3,-21.1,-36.8,-10.7,-39.0,0.1,-39.8,10.7,-39.0,21.8,-37.0,30.8,-33.3,39.5,-28.5,46.1,-22.5,51.1,-15.8,54.5,-8.5"/>
            </enginePosition>
            <enginePosition comment="Goliath" class="10">
                <positionsList name="center"
                               data="88.1,-14.8,86.8,-2.8,82.0,9.0,73.9,20.0,63.1,29.5,50.0,37.2,34.8,43.2,18.3,46.9,1.3,48.2,-15.9,47.2,-32.5,43.7,-47.9,38.2,-61.2,30.5,-72.4,21.2,-80.7,10.5,-86.1,-1.0,-87.7,-13.3,-86.2,-25.5,-81.2,-37.3,-73.5,-48.0,-62.9,-57.5,-49.5,-65.5,-34.7,-71.3,-18.0,-75.0,-0.9,-76.3,16.3,-75.3,32.8,-71.9,48.1,-66.3,61.8,-58.8,72.6,-49.3,80.9,-38.5,86.3,-27.0"/>
            </enginePosition>
            <enginePosition comment="Goliath Jade" class="19">
                <positionsList name="center"
                               data="87.3,-0.5,85.5,11.7,80.6,23.4,72.5,34.2,61.7,43.7,48.2,51.3,33.3,57.2,16.7,60.3,-0.5,61.7,-17.5,60.3,-33.8,57.2,-49.0,51.3,-62.1,43.7,-73.3,34.2,-81.5,23.4,-86.4,11.7,-88.2,-0.5,-86.4,-12.6,-81.5,-23.9,-73.3,-34.7,-62.5,-44.1,-49.0,-51.8,-33.8,-57.6,-17.5,-61.2,-0.5,-62.1,16.7,-61.2,32.8,-57.6,48.2,-51.8,61.7,-44.1,72.5,-34.7,80.6,-23.9,85.5,-12.6"/>
            </enginePosition>
            <enginePosition comment="DemaNeR" class="11">
                <positionsList name="center"
                               data="81.2,2.4,79.6,13.6,74.8,24.4,67.2,34.0,57.2,42.8,44.8,49.6,30.4,55.2,15.2,58.4,-0.8,59.2,-16.4,58.0,-32.0,54.8,-46.0,49.6,-58.4,42.4,-68.4,33.6,-76.0,24.0,-80.4,13.2,-82.0,2.0,-80.4,-9.2,-75.6,-20.0,-68.0,-29.6,-58.0,-38.4,-45.6,-45.6,-31.2,-50.8,-16.0,-54.0,0.0,-54.8,16.0,-54.0,31.2,-50.4,45.2,-45.2,57.6,-38.0,67.6,-29.2,75.2,-19.6,79.6,-8.8"/>
            </enginePosition>
            <enginePosition comment="P.E.T." class="12">
                <positionsList name="center"
                               data="38.1,-9.4,37.7,-4.1,35.7,0.8,32.4,5.7,27.9,9.8,21.7,13.5,15.2,16.4,7.8,18.0,-0.4,18.5,-8.2,18.0,-15.6,16.4,-22.1,13.5,-28.3,10.2,-32.8,5.7,-36.1,0.8,-38.1,-4.1,-38.5,-9.4,-37.3,-14.8,-34.9,-19.7,-31.2,-23.8,-26.7,-27.9,-20.9,-30.8,-14.4,-33.2,-7.4,-34.4,-0.4,-34.9,7.0,-34.4,13.9,-33.2,20.1,-30.8,25.8,-27.9,30.8,-23.8,34.4,-19.7,36.9,-14.8"/>
            </enginePosition>
            <enginePosition comment="Vengeance Skill Design # 1 Lightning 18" class="18">
                <positionsList name="center"
                               data="50.8,-2.2,50.0,5.0,47.2,11.7,42.3,18.0,36.0,23.4,28.3,27.9,19.3,31.5,9.5,33.8,-0.5,34.2,-10.3,33.8,-20.2,31.5,-29.2,27.9,-36.9,23.4,-43.2,18.0,-48.1,11.7,-50.9,5.0,-51.8,-2.2,-50.9,-9.5,-48.1,-16.2,-43.2,-22.5,-36.9,-27.9,-29.2,-32.4,-20.2,-36.0,-10.3,-37.8,-0.5,-38.7,9.5,-37.8,19.3,-36.0,28.3,-32.4,36.0,-27.9,42.3,-22.5,47.2,-16.2,50.0,-9.5"/>
            </enginePosition>
            <enginePosition comment="StreunerBoss" class="23">
                <lowPositionsList name="center"
                                  data="73.9,-15.8,74.8,-6.2,72.6,4.0,66.9,14.1,58.5,23.3,46.6,31.2,32.6,37.0,16.3,40.9,-0.4,42.2,-17.6,40.9,-33.9,37.0,-48.0,30.8,-59.4,22.9,-68.2,13.6,-73.5,4.0,-75.7,-6.2,-74.8,-16.3,-70.8,-25.5,-65.1,-33.9,-57.2,-41.4,-47.5,-47.5,-37.0,-52.4,-25.1,-56.3,-12.8,-58.1,0.0,-59.0,12.3,-58.1,24.6,-55.9,36.5,-52.4,47.1,-47.5,56.3,-41.4,64.2,-33.9,70.4,-25.5"/>
                <positionsList name="leftInner"
                               data="45.8,17.2,37.0,23.3,26.4,28.2,14.5,31.2,1.8,32.6,-11.0,32.1,-23.3,29.5,-34.3,25.5,-43.6,19.8,-51.0,12.8,-55.9,5.3,-58.5,-2.6,-58.5,-10.6,-56.8,-18.0,-52.4,-25.1,-46.6,-31.2,-39.6,-36.5,-31.2,-40.5,-22.0,-44.0,-12.3,-45.8,-2.2,-46.6,7.9,-46.2,18.0,-44.4,27.3,-41.8,36.1,-37.8,43.6,-33.0,49.7,-27.3,54.6,-20.7,57.2,-13.2,58.1,-5.3,56.3,2.6,52.4,10.1"/>
                <positionsList name="rightInner"
                               data="38.7,-36.1,45.8,-30.8,51.5,-24.6,55.4,-17.6,57.6,-10.1,57.2,-2.2,54.6,5.3,49.7,12.8,42.7,19.8,33.0,25.1,22.0,29.5,9.7,31.7,-3.1,32.6,-15.8,31.2,-27.7,27.7,-37.8,23.3,-46.6,17.2,-52.8,10.1,-56.8,2.2,-58.5,-5.7,-57.6,-13.2,-55.0,-20.7,-50.2,-27.3,-44.0,-33.0,-36.5,-37.8,-27.7,-41.8,-18.5,-44.4,-8.4,-46.2,1.8,-46.6,11.4,-45.8,21.6,-43.6,30.4,-40.5"/>
            </enginePosition>
            <enginePosition comment="SaimonBoss" class="25">
                <positionsList name="center"
                               data="7.8,2.7,7.8,3.6,7.5,4.8,6.9,5.7,6.0,6.6,4.8,7.2,3.6,7.8,2.1,8.4,0.6,8.4,-0.9,8.4,-2.4,8.1,-3.6,7.5,-5.1,6.9,-6.0,6.0,-6.6,5.1,-7.2,4.2,-7.2,3.0,-7.2,2.1,-6.9,0.9,-6.0,0.0,-5.1,-0.6,-4.2,-1.5,-3.0,-1.8,-1.5,-2.4,0.0,-2.4,1.5,-2.4,2.7,-2.1,4.2,-1.5,5.4,-0.9,6.3,-0.3,7.2,0.6,7.5,1.5"/>
            </enginePosition>
            <enginePosition comment="StreuneRBoss" class="34">
                <lowPositionsList name="center"
                                  data="67.2,-14.4,68.0,-5.6,66.0,3.6,60.8,12.8,53.2,21.2,42.4,28.4,29.6,33.6,14.8,37.2,-0.4,38.4,-16.0,37.2,-30.8,33.6,-43.6,28.0,-54.0,20.8,-62.0,12.4,-66.8,3.6,-68.8,-5.6,-68.0,-14.8,-64.4,-23.2,-59.2,-30.8,-52.0,-37.6,-43.2,-43.2,-33.6,-47.6,-22.8,-51.2,-11.6,-52.8,0.0,-53.6,11.2,-52.8,22.4,-50.8,33.2,-47.6,42.8,-43.2,51.2,-37.6,58.4,-30.8,64.0,-23.2"/>
                <positionsList name="leftInner"
                               data="41.6,15.6,33.6,21.2,24.0,25.6,13.2,28.4,1.6,29.6,-10.0,29.2,-21.2,26.8,-31.2,23.2,-39.6,18.0,-46.4,11.6,-50.8,4.8,-53.2,-2.4,-53.2,-9.6,-51.6,-16.4,-47.6,-22.8,-42.4,-28.4,-36.0,-33.2,-28.4,-36.8,-20.0,-40.0,-11.2,-41.6,-2.0,-42.4,7.2,-42.0,16.4,-40.4,24.8,-38.0,32.8,-34.4,39.6,-30.0,45.2,-24.8,49.6,-18.8,52.0,-12.0,52.8,-4.8,51.2,2.4,47.6,9.2"/>
                <positionsList name="rightInner"
                               data="35.2,-32.8,41.6,-28.0,46.8,-22.4,50.4,-16.0,52.4,-9.2,52.0,-2.0,49.6,4.8,45.2,11.6,38.8,18.0,30.0,22.8,20.0,26.8,8.8,28.8,-2.8,29.6,-14.4,28.4,-25.2,25.2,-34.4,21.2,-42.4,15.6,-48.0,9.2,-51.6,2.0,-53.2,-5.2,-52.4,-12.0,-50.0,-18.8,-45.6,-24.8,-40.0,-30.0,-33.2,-34.4,-25.2,-38.0,-16.8,-40.4,-7.6,-42.0,1.6,-42.4,10.4,-41.6,19.6,-39.6,27.6,-36.8"/>
            </enginePosition>
            <enginePosition comment="SibelonBoss" class="46">
                <positionsList name="leftInner"
                               data="173.9,6.6,168.3,28.2,157.9,47.9,141.9,66.7,120.3,81.8,95.9,94.9,67.7,103.4,38.5,109.0,7.5,109.0,-22.6,105.3,-50.8,97.8,-76.1,86.5,-98.7,71.4,-116.6,53.6,-128.8,33.8,-135.4,13.2,-136.3,-8.5,-131.6,-30.1,-120.3,-49.8,-104.3,-68.6,-83.7,-84.6,-58.3,-96.8,-31.0,-106.2,-0.9,-110.0,29.1,-110.9,59.2,-107.2,88.4,-99.6,113.7,-88.4,136.3,-73.3,153.2,-55.5,166.4,-35.7,173.0,-15.0"/>
                <positionsList name="rightInner"
                               data="173.9,-10.3,173.9,11.3,167.3,32.0,155.1,51.7,138.2,70.5,116.6,85.5,91.2,96.8,63.0,105.3,32.0,109.0,1.9,109.0,-28.2,104.3,-56.4,95.9,-81.8,83.7,-102.5,68.6,-119.4,50.8,-130.7,30.1,-136.3,9.4,-136.3,-13.2,-129.7,-33.8,-118.4,-53.6,-100.6,-71.4,-79.0,-87.4,-53.6,-98.7,-25.4,-107.2,4.7,-110.9,34.8,-110.9,64.9,-107.2,93.1,-97.8,118.4,-85.5,140.1,-70.5,157.0,-51.7,168.3,-32.0"/>
            </enginePosition>
            <!-- TODO check correct positions for skill designs, start -->
            <enginePosition comment="Solace" class="63">
                <positionsList name="center"
                               data="75.1,-17.0,74.7,-6.5,71.8,3.7,65.6,13.7,56.7,22.5,45.1,30.2,31.5,35.9,16.2,39.5,0.0,40.8,-15.6,39.5,-31.3,36.2,-44.5,30.3,-56.4,23.0,-65.5,14.2,-71.3,4.1,-74.8,-6.0,-74.9,-16.6,-72.7,-26.3,-67.1,-35.9,-59.7,-44.2,-50.4,-51.1,-39.0,-57.1,-27.0,-61.2,-14.0,-63.7,-0.6,-64.5,13.0,-64.0,26.0,-61.2,38.2,-57.2,49.4,-51.5,59.4,-44.6,66.8,-36.4,71.8,-26.8"/>
            </enginePosition>
            <enginePosition comment="Diminisher" class="64">
                <positionsList name="center"
                               data="67.8,6.8,68.5,16.7,66.4,26.6,61.9,36.1,53.8,45.1,43.5,52.9,30.6,58.9,15.8,62.7,0.6,64.0,-14.5,62.8,-29.2,59.1,-42.0,53.3,-52.4,45.6,-60.9,36.9,-65.7,27.1,-68.2,17.2,-67.8,7.3,-64.5,-2.2,-59.3,-10.8,-52.6,-18.1,-43.8,-24.5,-33.5,-29.7,-23.1,-33.1,-11.8,-35.3,-0.3,-36.1,11.6,-35.5,23.3,-33.5,33.7,-29.7,43.9,-24.9,52.2,-18.5,59.8,-11.2,65.0,-2.6"/>
            </enginePosition>
            <enginePosition comment="Spectrum" class="65">
                <positionsList name="center"
                               data="69.8,-31.9,70.7,-23.0,68.8,-13.8,63.8,-4.9,56.0,3.4,44.7,10.7,31.5,16.1,16.3,19.6,0.5,20.6,-16.1,19.6,-31.4,16.0,-44.5,10.3,-54.8,2.9,-63.1,-5.4,-68.0,-14.2,-69.5,-23.5,-68.5,-32.3,-65.1,-40.7,-59.7,-48.0,-52.6,-54.5,-43.6,-59.9,-33.5,-64.3,-22.7,-67.4,-11.4,-69.2,0.3,-69.8,12.1,-69.2,23.3,-67.2,34.4,-64.2,44.3,-59.8,53.5,-54.4,60.4,-47.7,66.3,-40.2"/>
            </enginePosition>
            <enginePosition comment="Sentinel" class="66">
                <positionsList name="center"
                               data="77.9,-2.4,77.0,8.5,72.0,19.3,65.1,29.1,55.4,37.6,43.1,45.0,29.9,50.1,15.4,53.3,0.6,54.1,-14.8,53.0,-29.8,50.1,-43.3,44.7,-54.6,37.6,-64.3,29.1,-72.0,19.3,-76.2,8.5,-77.5,-2.6,-75.7,-13.7,-71.2,-24.5,-64.3,-34.2,-54.6,-42.8,-43.2,-49.7,-29.0,-55.3,-15.0,-58.2,0.2,-59.3,15.6,-58.2,30.2,-55.0,43.5,-49.6,55.4,-42.8,65.6,-34.2,72.4,-24.2,77.0,-13.7"/>
            </enginePosition>
            <enginePosition comment="Venom" class="67">
                <positionsList name="center"
                               data="82.2,-12.6,81.3,-2.1,76.7,8.6,69.3,18.2,59.4,26.5,47.1,33.7,32.9,39.0,17.8,42.1,1.8,43.6,-14.3,42.6,-29.5,39.5,-43.9,34.8,-56.7,27.9,-67.1,19.6,-74.7,9.8,-79.8,-0.3,-81.4,-11.0,-79.9,-21.9,-75.6,-32.3,-68.0,-42.1,-58.5,-50.5,-45.7,-57.7,-31.6,-62.9,-16.8,-66.1,-0.7,-67.3,15.2,-66.6,30.8,-63.5,45.0,-58.5,57.6,-51.6,68.0,-43.3,75.7,-33.9,80.6,-23.5"/>
                <!-- /proxies end for skill designs -->
            </enginePosition>
            <!-- 			<enginePosition comment="Citadel" class="69"> -->
            <!-- 				<positionsList name="leftInner" data="93.1,16.8,84.7,30.1,72.8,42.0,56.7,51.8,38.5,58.8,17.5,63.7,-4.2,64.4,-25.2,62.3,-45.5,57.4,-63.0,49.0,-77.7,38.5,-88.9,26.6,-95.9,13.3,-98.7,-0.7,-98.0,-14.0,-93.1,-26.6,-85.4,-38.5,-74.9,-48.3,-62.3,-56.7,-47.6,-63.7,-31.5,-68.6,-14.7,-71.4,2.1,-72.1,18.9,-70.7,35.7,-67.2,50.4,-61.6,65.1,-54.6,77.0,-45.5,86.8,-35.0,93.8,-23.1,97.3,-9.8,96.6,3.5"/> -->
            <!-- 				<positionsList name="rightInner" data="84.0,-39.2,91.7,-27.3,96.6,-14.7,98.0,-1.4,95.2,12.6,88.9,25.9,78.4,37.8,63.7,49.0,46.2,57.4,25.9,63.0,4.2,65.1,-17.5,64.4,-38.5,60.2,-57.4,52.5,-73.5,42.7,-86.1,31.5,-94.5,18.2,-98.7,4.9,-99.4,-9.1,-95.9,-22.4,-88.9,-34.3,-79.1,-44.8,-67.2,-54.6,-53.2,-61.6,-37.8,-67.2,-21.7,-70.7,-4.2,-72.1,12.6,-71.4,29.4,-68.6,45.5,-64.4,60.2,-57.4,72.8,-49.0"/> -->
            <!-- 			</enginePosition> -->
            <enginePosition comment="Citadel" class="69">
                <positionsList name="leftInner"
                               data="93.1,16.8,84.7,30.1,72.8,42.0,56.7,51.8,38.5,58.8,17.5,63.7,-4.2,64.4,-25.2,62.3,-45.5,57.4,-63.0,49.0,-77.7,38.5,-88.9,26.6,-95.9,13.3,-98.7,-0.7,-98.0,-14.0,-93.1,-26.6,-85.4,-38.5,-75.6,-48.3,-64.4,-57.4,-51.8,-65.8,-37.8,-72.1,-21.7,-77.7,-4.2,-80.5,15.4,-81.2,34.3,-78.4,53.2,-72.8,69.3,-63.7,83.3,-52.5,93.1,-39.2,98.7,-25.2,100.1,-11.2,98.7,3.5"/>
                <positionsList name="rightInner"
                               data="84.0,-39.2,91.7,-27.3,96.6,-14.7,98.0,-1.4,95.2,12.6,88.9,25.9,78.4,37.8,63.7,49.0,46.2,57.4,25.9,63.0,4.2,65.1,-17.5,64.4,-38.5,60.2,-57.4,52.5,-73.5,42.7,-86.1,31.5,-94.5,18.2,-99.4,4.2,-102.2,-9.8,-100.8,-24.5,-95.2,-38.5,-85.4,-51.8,-72.1,-63.0,-56.0,-72.8,-37.1,-78.4,-17.5,-81.2,1.4,-80.5,19.6,-78.4,35.7,-72.8,50.4,-66.5,63.0,-58.8,74.2,-49.7"/>
            </enginePosition>
            <enginePosition comment="Spearhead" class="70">
                <positionsList name="center"
                               data="80.9,-17.9,82.5,-6.8,80.6,4.6,75.2,16.0,66.1,26.2,53.2,35.7,37.6,42.9,19.4,47.5,0.0,49.0,-19.8,47.5,-38.0,42.9,-54.0,35.7,-66.5,26.6,-75.6,16.0,-81.3,4.9,-83.2,-6.5,-81.7,-17.5,-77.5,-27.7,-70.7,-36.9,-61.9,-44.8,-51.3,-51.3,-39.5,-56.6,-27.0,-60.4,-14.1,-62.7,-0.4,-63.5,12.9,-62.7,26.2,-60.4,38.8,-56.6,50.2,-51.7,60.8,-45.2,69.5,-37.2,76.4,-28.1"/>
            </enginePosition>
            <enginePosition comment="Sibelon" class="74">
                <positionsList name="leftInner"
                               data="166.5,6.3,161.1,27.0,151.2,45.9,135.9,63.9,115.2,78.3,91.8,90.9,64.8,99.0,36.9,104.4,7.2,104.4,-21.6,100.8,-48.6,93.6,-72.9,82.8,-94.5,68.4,-111.6,51.3,-123.3,32.4,-129.6,12.6,-130.5,-8.1,-126.0,-28.8,-115.2,-47.7,-99.9,-65.7,-80.1,-81.0,-55.8,-92.7,-29.7,-101.7,-0.9,-105.3,27.9,-106.2,56.7,-102.6,84.6,-95.4,108.9,-84.6,130.5,-70.2,146.7,-53.1,159.3,-34.2,165.6,-14.4"/>
                <positionsList name="rightInner"
                               data="166.5,-9.9,166.5,10.8,160.2,30.6,148.5,49.5,132.3,67.5,111.6,81.9,87.3,92.7,60.3,100.8,30.6,104.4,1.8,104.4,-27.0,99.9,-54.0,91.8,-78.3,80.1,-98.1,65.7,-114.3,48.6,-125.1,28.8,-130.5,9.0,-130.5,-12.6,-124.2,-32.4,-113.4,-51.3,-96.3,-68.4,-75.6,-83.7,-51.3,-94.5,-24.3,-102.6,4.5,-106.2,33.3,-106.2,62.1,-102.6,89.1,-93.6,113.4,-81.9,134.1,-67.5,150.3,-49.5,161.1,-30.6"/>
            </enginePosition>
            <enginePosition comment="Saimon" class="75">
                <positionsList name="center"
                               data="6.2,2.2,6.2,2.9,6.0,3.8,5.5,4.6,4.8,5.3,3.8,5.8,2.9,6.2,1.7,6.7,0.5,6.7,-0.7,6.7,-1.9,6.5,-2.9,6.0,-4.1,5.5,-4.8,4.8,-5.3,4.1,-5.8,3.4,-5.8,2.4,-5.8,1.7,-5.5,0.7,-4.8,0.0,-4.1,-0.5,-3.4,-1.2,-2.4,-1.4,-1.2,-1.9,0.0,-1.9,1.2,-1.9,2.2,-1.7,3.4,-1.2,4.3,-0.7,5.0,-0.2,5.8,0.5,6.0,1.2"/>
            </enginePosition>
            <!-- too resource intensive  -->
            <enginePosition comment="Protegit" class="81">
                <positionsList name="center"
                               data="27.0,1.0,26.8,4.6,25.6,8.2,23.2,11.6,19.8,14.6,15.8,17.0,11.0,18.8,5.6,20.0,0.2,20.4,-5.4,20.0,-10.8,18.8,-15.6,17.0,-19.6,14.4,-23.0,11.4,-25.2,8.0,-26.4,4.4,-26.6,0.8,-25.8,-2.8,-24.2,-6.0,-21.4,-9.0,-18.0,-11.6,-14.0,-13.8,-9.6,-15.4,-4.8,-16.2,0.2,-16.6,5.2,-16.2,10.0,-15.2,14.4,-13.8,18.4,-11.6,21.8,-9.0,24.4,-6.0,26.2,-2.6"/>
            </enginePosition>
            <!-- TODO check correct positions for skill designs, start -->

            <enginePosition comment="Streuner" class="84">
                <lowPositionsList name="center"
                                  data="48.7,-10.4,49.3,-4.1,47.8,2.6,44.1,9.3,38.6,15.4,30.7,20.6,21.5,24.4,10.7,27.0,-0.3,27.8,-11.6,27.0,-22.3,24.4,-31.6,20.3,-39.2,15.1,-45.0,9.0,-48.4,2.6,-49.9,-4.1,-49.3,-10.7,-46.7,-16.8,-42.9,-22.3,-37.7,-27.3,-31.3,-31.3,-24.4,-34.5,-16.5,-37.1,-8.4,-38.3,0.0,-38.9,8.1,-38.3,16.2,-36.8,24.1,-34.5,31.0,-31.3,37.1,-27.3,42.3,-22.3,46.4,-16.8"/>
                <positionsList name="leftInner"
                               data="30.2,11.3,24.4,15.4,17.4,18.6,9.6,20.6,1.2,21.5,-7.2,21.2,-15.4,19.4,-22.6,16.8,-28.7,13.0,-33.6,8.4,-36.8,3.5,-38.6,-1.7,-38.6,-7.0,-37.4,-11.9,-34.5,-16.5,-30.7,-20.6,-26.1,-24.1,-20.6,-26.7,-14.5,-29.0,-8.1,-30.2,-1.5,-30.7,5.2,-30.4,11.9,-29.3,18.0,-27.5,23.8,-24.9,28.7,-21.8,32.8,-18.0,36.0,-13.6,37.7,-8.7,38.3,-3.5,37.1,1.7,34.5,6.7"/>
                <positionsList name="rightInner"
                               data="25.5,-23.8,30.2,-20.3,33.9,-16.2,36.5,-11.6,38.0,-6.7,37.7,-1.5,36.0,3.5,32.8,8.4,28.1,13.0,21.8,16.5,14.5,19.4,6.4,20.9,-2.0,21.5,-10.4,20.6,-18.3,18.3,-24.9,15.4,-30.7,11.3,-34.8,6.7,-37.4,1.5,-38.6,-3.8,-38.0,-8.7,-36.2,-13.6,-33.1,-18.0,-29.0,-21.8,-24.1,-24.9,-18.3,-27.5,-12.2,-29.3,-5.5,-30.4,1.2,-30.7,7.5,-30.2,14.2,-28.7,20.0,-26.7"/>
            </enginePosition>
            <enginePosition comment="StreuneR" class="85">
                <lowPositionsList name="center"
                                  data="60.5,-13.0,61.2,-5.0,59.4,3.2,54.7,11.5,47.9,19.1,38.2,25.6,26.6,30.2,13.3,33.5,-0.4,34.6,-14.4,33.5,-27.7,30.2,-39.2,25.2,-48.6,18.7,-55.8,11.2,-60.1,3.2,-61.9,-5.0,-61.2,-13.3,-58.0,-20.9,-53.3,-27.7,-46.8,-33.8,-38.9,-38.9,-30.2,-42.8,-20.5,-46.1,-10.4,-47.5,0.0,-48.2,10.1,-47.5,20.2,-45.7,29.9,-42.8,38.5,-38.9,46.1,-33.8,52.6,-27.7,57.6,-20.9"/>
                <positionsList name="leftInner"
                               data="37.4,14.0,30.2,19.1,21.6,23.0,11.9,25.6,1.4,26.6,-9.0,26.3,-19.1,24.1,-28.1,20.9,-35.6,16.2,-41.8,10.4,-45.7,4.3,-47.9,-2.2,-47.9,-8.6,-46.4,-14.8,-42.8,-20.5,-38.2,-25.6,-32.4,-29.9,-25.6,-33.1,-18.0,-36.0,-10.1,-37.4,-1.8,-38.2,6.5,-37.8,14.8,-36.4,22.3,-34.2,29.5,-31.0,35.6,-27.0,40.7,-22.3,44.6,-16.9,46.8,-10.8,47.5,-4.3,46.1,2.2,42.8,8.3"/>
                <positionsList name="rightInner"
                               data="31.7,-29.5,37.4,-25.2,42.1,-20.2,45.4,-14.4,47.2,-8.3,46.8,-1.8,44.6,4.3,40.7,10.4,34.9,16.2,27.0,20.5,18.0,24.1,7.9,25.9,-2.5,26.6,-13.0,25.6,-22.7,22.7,-31.0,19.1,-38.2,14.0,-43.2,8.3,-46.4,1.8,-47.9,-4.7,-47.2,-10.8,-45.0,-16.9,-41.0,-22.3,-36.0,-27.0,-29.9,-31.0,-22.7,-34.2,-15.1,-36.4,-6.8,-37.8,1.4,-38.2,9.4,-37.4,17.6,-35.6,24.8,-33.1"/>
            </enginePosition>

            <enginePosition comment="FalconBoss" class="90">
                <positionsList name="center"
                               data="199.7,-6.9,196.4,20.4,183.4,47.3,165.1,71.5,140.3,92.7,109.1,110.2,75.3,122.6,37.0,130.6,-1.4,132.8,-40.6,129.9,-77.3,121.2,-111.5,108.0,-142.0,90.5,-164.9,68.6,-183.8,44.5,-194.7,18.2,-198.7,-8.9,-193.4,-36.5,-181.7,-62.8,-162.8,-86.9,-139.1,-107.7,-109.2,-124.9,-74.4,-138.0,-36.5,-146.0,1.1,-148.2,40.9,-146.0,78.2,-138.0,112.5,-124.8,143.1,-107.3,166.7,-85.5,185.5,-61.3,195.9,-34.4"/>
            </enginePosition>
            <enginePosition comment="FalconTitan" class="91">
                <positionsList name="center"
                               data="90.9,-4.7,88.9,7.8,83.5,19.9,75.3,30.8,63.3,40.5,49.6,48.3,33.7,54.2,16.7,57.7,-0.4,58.5,-18.5,57.3,-35.0,53.4,-50.3,47.2,-64.2,39.4,-75.2,29.6,-83.4,18.6,-88.1,6.6,-89.3,-5.9,-88.0,-18.0,-82.3,-30.0,-73.7,-41.0,-63.0,-50.3,-49.4,-58.1,-33.8,-64.0,-16.9,-67.5,0.7,-68.7,18.4,-67.5,35.5,-64.0,51.1,-58.1,64.4,-49.9,75.4,-40.2,84.3,-29.3,89.3,-17.2"/>
            </enginePosition>
            <enginePosition comment="FalconSmall" class="92">
                <positionsList name="center"
                               data="60.2,-4.6,58.8,3.8,55.7,11.5,49.6,19.1,41.9,25.4,32.9,30.5,22.6,34.1,11.1,36.5,-0.4,37.0,-12.0,36.0,-23.4,33.6,-33.1,29.3,-42.2,24.0,-50.2,17.7,-54.7,10.1,-58.5,2.4,-59.6,-5.8,-58.7,-14.0,-54.2,-22.1,-48.4,-29.3,-41.2,-35.5,-31.7,-40.8,-21.6,-44.6,-10.9,-46.7,1.5,-47.5,12.6,-46.6,24.1,-44.2,34.6,-40.3,44.2,-35.0,50.9,-28.3,56.7,-21.1,59.6,-13.0"/>
            </enginePosition>
            <enginePosition comment="Eagle" class="95">
                <positionsList name="center"
                               data="87.4,-3.4,85.1,8.8,80.1,20.4,72.2,30.9,61.2,40.1,48.0,47.6,32.6,53.3,16.3,56.6,-0.7,57.6,-17.8,56.4,-33.9,52.7,-48.5,46.9,-61.5,39.1,-72.3,29.8,-79.5,19.0,-84.9,7.8,-86.3,-4.1,-84.6,-16.0,-79.2,-27.5,-71.0,-38.1,-60.2,-47.3,-47.2,-54.7,-32.7,-60.2,-16.0,-63.9,0.7,-64.9,17.4,-63.7,33.7,-60.2,48.8,-54.6,61.9,-46.9,72.5,-37.5,80.7,-26.9,85.7,-15.3"/>
            </enginePosition>
            <enginePosition comment="PoliceShip" class="98">
                <positionsList name="center"
                               data="44.6,-2.0,43.4,4.2,41.1,10.1,37.0,15.5,32.0,20.0,24.8,24.1,17.1,27.0,9.0,28.8,0.2,29.4,-8.1,28.6,-17.0,27.1,-24.2,24.1,-30.6,20.0,-36.4,15.5,-40.4,10.1,-43.1,4.3,-43.6,-2.0,-43.0,-7.9,-40.8,-13.8,-36.7,-19.2,-30.6,-24.1,-24.5,-27.7,-16.6,-30.8,-8.1,-32.6,0.2,-33.1,9.1,-32.6,17.2,-30.8,24.8,-27.9,31.6,-24.1,36.7,-19.2,40.8,-13.8,43.5,-7.9"/>
            </enginePosition>
            <enginePosition comment="UnidentifiedDreadnought" class="99">
                <positionsList name="center"
                               data="41.4,-8.4,40.3,-2.3,38.0,3.8,33.8,9.1,28.9,13.7,22.4,17.5,15.2,20.5,7.6,22.0,-0.4,22.4,-8.4,22.0,-16.3,20.1,-23.2,17.1,-29.6,13.3,-34.6,8.4,-38.4,3.0,-40.7,-3.0,-41.0,-9.1,-40.3,-15.2,-38.0,-20.9,-33.8,-26.2,-28.9,-31.2,-22.4,-35.0,-15.2,-37.6,-7.6,-39.5,0.4,-39.9,8.7,-39.1,16.3,-37.6,23.2,-34.6,29.6,-30.4,34.6,-25.8,38.4,-20.1,40.7,-14.4"/>
            </enginePosition>
            <enginePosition comment="Unindentified Battleship" class="102">
                <positionsList name="leftInner"
                               data="73.0,14.0,66.0,24.0,56.0,33.0,44.0,40.0,31.0,45.0,16.0,48.0,1.0,49.0,-15.0,48.0,-29.0,45.0,-43.0,40.0,-55.0,34.0,-65.0,25.0,-73.0,16.0,-77.0,5.0,-79.0,-6.0,-78.0,-16.0,-73.0,-27.0,-66.0,-37.0,-57.0,-45.0,-45.0,-52.0,-32.0,-57.0,-17.0,-61.0,-1.0,-62.0,14.0,-61.0,29.0,-58.0,42.0,-53.0,55.0,-46.0,65.0,-38.0,72.0,-28.0,77.0,-18.0,78.0,-7.0,77.0,4.0"/>
                <positionsList name="rightInner"
                               data="73.0,-27.0,77.0,-16.0,78.0,-6.0,77.0,5.0,72.0,16.0,65.0,25.0,55.0,34.0,43.0,40.0,29.0,45.0,14.0,48.0,-1.0,49.0,-17.0,48.0,-31.0,45.0,-45.0,40.0,-57.0,33.0,-66.0,24.0,-73.0,14.0,-78.0,4.0,-79.0,-7.0,-77.0,-18.0,-73.0,-28.0,-65.0,-38.0,-55.0,-46.0,-43.0,-53.0,-30.0,-58.0,-15.0,-61.0,1.0,-62.0,16.0,-61.0,31.0,-57.0,44.0,-52.0,56.0,-45.0,66.0,-37.0"/>
            </enginePosition>

            <enginePosition comment="Pirate Interceptor" class="111">
                <positionsList name="center"
                               data="19.8,-1.2,19.5,1.5,18.5,4.2,16.8,6.8,14.2,9.0,11.2,10.8,7.8,12.2,3.8,13.0,-0.2,13.5,-4.2,13.0,-8.2,12.2,-11.8,10.8,-14.8,9.0,-17.2,6.8,-19.0,4.2,-20.0,1.5,-20.2,-1.2,-19.8,-4.0,-18.5,-6.5,-16.5,-8.8,-14.0,-11.0,-11.0,-12.5,-7.8,-13.8,-4.0,-14.5,-0.2,-14.8,3.5,-14.5,7.0,-13.8,10.5,-12.5,13.5,-11.0,16.0,-9.0,18.0,-6.5,19.2,-4.0"/>
            </enginePosition>
            <enginePosition comment="Pirate Barracuda" class="112">
                <positionsList name="center"
                               data="40.8,2.4,40.5,8.2,38.4,13.9,35.0,19.0,29.9,23.8,23.8,27.9,16.7,30.9,8.5,32.6,0.0,33.3,-8.5,32.6,-16.3,30.9,-23.8,28.2,-30.3,24.1,-35.4,19.4,-38.8,14.3,-40.8,8.5,-41.1,2.7,-40.1,-2.7,-37.4,-8.2,-33.7,-12.9,-28.6,-17.0,-22.4,-20.4,-15.6,-22.8,-8.2,-24.5,-0.7,-24.8,7.1,-24.5,14.3,-23.1,21.4,-20.7,27.5,-17.3,32.6,-13.3,36.7,-8.5,39.4,-3.1"/>
                <positionsList name="leftInner"
                               data="62.2,4.1,58.5,12.6,52.4,20.4,43.5,27.5,33.0,33.3,20.7,37.1,7.5,39.4,-6.1,39.4,-19.4,37.7,-31.6,34.0,-42.5,28.6,-51.7,21.8,-58.1,13.6,-62.6,5.1,-64.3,-3.7,-63.2,-12.2,-60.2,-20.7,-54.7,-28.2,-47.6,-34.7,-38.8,-40.5,-28.9,-44.9,-18.4,-47.6,-6.8,-49.3,4.8,-49.3,16.0,-47.9,26.9,-45.2,37.1,-41.1,45.9,-35.7,53.4,-29.2,58.8,-21.8,62.6,-13.6,63.6,-4.8"/>
                <positionsList name="rightInner"
                               data="59.5,-21.1,62.9,-12.9,63.9,-4.1,62.2,4.8,58.1,13.3,51.7,21.4,42.8,28.2,32.0,33.7,19.7,37.7,6.5,39.8,-7.1,39.8,-20.7,37.4,-33.0,33.7,-43.5,28.2,-52.4,21.1,-58.8,13.3,-62.9,4.4,-64.3,-4.4,-63.2,-12.9,-59.8,-21.4,-54.4,-28.9,-46.9,-35.4,-38.1,-40.8,-28.2,-45.2,-17.3,-47.9,-5.8,-49.6,5.8,-49.3,17.0,-47.9,27.9,-45.2,38.1,-40.8,46.9,-35.4,54.1,-28.6"/>
            </enginePosition>
            <enginePosition comment="Pirate Saboteur" class="113">
                <positionsList name="leftInner"
                               data="69.6,21.4,66.8,31.5,61.2,41.0,53.2,49.7,42.3,57.1,29.7,62.7,15.4,66.2,0.7,67.2,-14.4,66.2,-28.7,63.0,-41.7,57.8,-52.5,50.4,-61.2,42.0,-67.2,32.6,-70.0,22.8,-70.3,12.6,-67.9,2.8,-63.4,-6.3,-56.4,-14.3,-47.6,-21.3,-37.1,-26.6,-25.9,-30.8,-13.7,-33.2,-1.1,-34.3,11.5,-33.6,23.8,-31.1,35.3,-27.3,45.8,-21.7,54.6,-15.0,61.9,-7.0,66.8,1.8,69.6,11.6"/>
                <positionsList name="rightInner"
                               data="67.5,3.9,69.6,13.7,68.9,23.5,65.8,33.6,59.5,42.7,50.8,51.1,39.5,58.1,26.6,63.3,12.2,66.5,-2.8,67.2,-17.5,65.4,-31.9,61.6,-44.1,56.0,-54.6,48.7,-62.7,39.9,-67.9,30.1,-70.0,20.3,-69.7,10.5,-66.8,0.7,-61.6,-8.0,-54.2,-15.7,-45.2,-22.4,-34.7,-27.6,-23.1,-31.5,-10.9,-33.6,1.8,-33.9,14.3,-32.9,26.2,-30.1,37.4,-26.2,47.6,-20.3,56.3,-13.3,63.0,-5.2"/>
            </enginePosition>
            <enginePosition comment="Pirate Annihilator" class="114">
                <positionsList name="leftInner"
                               data="110.2,16.7,101.8,31.9,89.7,46.4,73.0,58.5,54.0,68.4,31.9,75.2,7.6,78.3,-16.0,77.5,-39.5,73.7,-60.8,66.1,-79.8,55.5,-95.0,42.6,-106.4,28.1,-112.5,12.2,-114.8,-3.8,-112.5,-20.5,-106.4,-35.7,-96.5,-49.4,-82.8,-61.6,-66.9,-71.4,-48.6,-79.0,-28.9,-83.6,-8.4,-85.9,12.2,-85.9,32.7,-82.8,52.4,-76.8,69.9,-68.4,85.1,-58.5,98.0,-45.6,107.2,-31.2,112.5,-16.0,113.2,0.0"/>
                <positionsList name="rightInner"
                               data="104.9,-37.2,111.7,-22.0,114.0,-6.1,112.5,9.9,106.4,26.6,95.8,41.0,81.3,54.7,62.3,65.4,41.0,73.7,17.5,78.3,-6.8,79.0,-30.4,76.0,-53.2,69.9,-73.7,60.8,-90.4,48.6,-103.4,34.2,-111.7,18.2,-115.5,2.3,-114.8,-13.7,-110.2,-29.6,-101.8,-44.1,-88.9,-57.0,-73.7,-68.4,-56.2,-76.8,-37.2,-82.8,-16.7,-85.9,4.6,-86.6,25.1,-85.1,44.8,-79.8,63.8,-73.0,80.6,-63.1,94.2,-50.9"/>
            </enginePosition>
            <enginePosition comment="Pirate Battleray" class="115">
                <positionsList name="center"
                               data="146.6,4.9,144.1,25.2,136.0,44.8,123.0,63.5,104.2,79.8,82.2,92.8,57.0,102.6,29.3,108.3,0.0,110.7,-28.5,109.1,-56.2,102.6,-82.2,93.6,-104.2,80.6,-123.0,64.3,-136.8,46.4,-145.8,26.9,-148.2,6.5,-145.8,-13.8,-137.6,-33.4,-124.6,-52.1,-105.9,-67.6,-83.9,-81.4,-58.6,-91.2,-30.9,-96.9,-1.6,-99.3,26.9,-97.7,54.6,-91.2,80.6,-82.2,102.6,-69.2,121.3,-52.9,135.2,-35.0,144.1,-15.5"/>
            </enginePosition>
            <enginePosition class="120">
                <positionsList name="center"
                               data="34.0,-1.0,34.0,5.0,32.0,11.0,29.0,16.0,25.0,21.0,20.0,25.0,13.0,28.0,6.0,30.0,-2.0,31.0,-9.0,30.0,-16.0,28.0,-23.0,26.0,-28.0,21.0,-33.0,17.0,-36.0,11.0,-38.0,5.0,-38.0,-1.0,-37.0,-6.0,-35.0,-12.0,-32.0,-17.0,-27.0,-21.0,-21.0,-25.0,-15.0,-27.0,-9.0,-29.0,-2.0,-29.0,5.0,-29.0,11.0,-28.0,17.0,-25.0,23.0,-22.0,27.0,-17.0,31.0,-12.0,33.0,-7.0"/>
            </enginePosition>
        </enginePositions>
        <ores>
            <ore type="0" resKey="ore_1" languageKey="ore_prometium"/>
            <ore type="1" resKey="ore_2" languageKey="ore_endurium"/>
            <ore type="2" resKey="ore_3" languageKey="ore_terbium"/>
            <ore type="3" resKey="ore_4" languageKey="ore_xenomit"/>
            <ore type="4" resKey="ore_11" languageKey="ore_prometid" refiner="0,20,1,10"/>
            <ore type="5" resKey="ore_12" languageKey="ore_duranium" refiner="1,10,2,20"/>
            <ore type="6" resKey="ore_13" languageKey="ore_promerium" refiner="4,10,5,10,3,1"/>
            <ore type="7" resKey="ore_14" languageKey="ore_seprom"/>
            <ore type="8" resKey="ore_15" languageKey="ore_palladium"/>
        </ores>
        <achievements>
            <achievement id="1" languageKey="FIRST_FLY"/>
            <achievement id="2" languageKey="FIRST_STREUNER"/>
            <achievement id="3" languageKey="BONUS_BOXES"/>
            <achievement id="4" languageKey="LEVEL_UP"/>
            <achievement id="5" languageKey="COLLECT_ORE"/>
            <achievement id="6" languageKey="MERCHANT"/>
            <achievement id="7" languageKey="FIRST_JUMP"/>
            <achievement id="8" languageKey="FIRST_LORDAKIA"/>
            <achievement id="9" languageKey="UPGRADE"/>
            <achievement id="10" languageKey="QUICK_BUY"/>
            <achievement id="11" languageKey="QUEST"/>
            <achievement id="12" languageKey="GROUP"/>
        </achievements>

        <!-- banner billboards ............................................................................................................................. 
		 -= needed values: =-
		  id           = this is the typeID from the server
		  resKey       = the ResourceID for rhe resources.php

		 -= optional values: =-
		  advertX               = x offset of the logo {int}
		  advertX               = y offset of the logo {int}
		  minimapIcon           = libraryname of the icon {String}
		  oscillationDuration   = {Number, unit in seconds}
		  oscillationAmplitude  = {int   , unit in pixels}
		  -->
        <billboards>
            <billboard id="1" resKey="billboard1" advertX="32" advertY="38" oscillationAmplitude="10"
                       oscillationDuration="3" minimapIcon="mapIcon_billboard"/>
            <billboard id="2" resKey="billboard_green" advertX="22" advertY="20" oscillationAmplitude="10"
                       oscillationDuration="3" minimapIcon="mapIcon_billboard"/>
        </billboards>

        <bannerads>
            <bannerad id="2" enumName="bigboy_defensive" baseKey="bigboyDefensive" assetCount="1"/>
            <bannerad id="3" enumName="bigboy_offensive" baseKey="bigboyOffensive" assetCount="1"/>
            <bannerad id="1" enumName="tradeDrohne" baseKey="tradeDrone" footer="hundred_charges" assetCount="1"/>
            <bannerad id="4" enumName="premium_plus" baseKey="trialPremium" footer="3_days_testphase" assetCount="1"/>
            <bannerad id="5" enumName="logfile_advantage" baseKey="logfileAdvantage" assetCount="1"/>
            <bannerad id="6" enumName="shipdesign_glory" baseKey="shipdesignGlory" assetCount="0"/>
            <bannerad id="7" enumName="booster_bonus_box" baseKey="booster_bonus_box" assetCount="1"/>
            <bannerad id="8" enumName="booster_quest_reward" baseKey="booster_quest_reward" assetCount="1"/>
            <bannerad id="9" enumName="buyPet" baseKey="buyPet" assetCount="1" url=""/>
            <bannerad id="10" enumName="partner_antec" baseKey="partner_antec" assetCount="1" url="bannerad.php"/>
            <bannerad id="11" enumName="partner_razer" baseKey="partner_razer" assetCount="1"
                      url="http://www.razerzone.com/"/>
        </bannerads>
        <techs>
            <tech id="1" linkageID="energy_leech_array" hasDuration="true"/>
            <tech id="2" linkageID="energy_chain_impulse"/>
            <tech id="3" linkageID="rocket_probability_maximizer" hasDuration="true"/>
            <tech id="4" linkageID="shield_backup"/>
            <tech id="5" linkageID="speed_leech" hasDuration="true"/>
            <tech id="6" linkageID="battle_repair_bot" hasDuration="true"/>
            <tech id="7" linkageID="clinging_impulse_drone" hasDuration="true"/>
        </techs>
        <petgears normalState="bg_standard.png" activeState="bg_active.png">
            <gear id="4" effect="" effectTarget="" targetList="" suffix="" resKey="autoloot.png" name="g-al1_name"/>
            <gear id="5" effect="" effectTarget="" targetList="" suffix="" resKey="autoressource.png"
                  name="g-ar1_name"/>
            <gear id="6" effect="1" effectTarget="hero" targetList="npc" suffix="_icon.png" resKey="enemylocator.png"
                  name="g-el1_name"/>
            <gear id="7" effect="1" effectTarget="hero" targetList="ore" suffix="" resKey="resourcelocator.png"
                  name="g-rl1_name"/>
            <gear id="8" effect="" effectTarget="" targetList="" suffix="" resKey="trade.png" name="g-tra1_name"/>
            <gear id="9" effect="" effectTarget="" targetList="" suffix="" resKey="repair.png" name="g-rep1_name"/>
            <gear id="10" effect="" effectTarget="" targetList="" suffix="" resKey="kamikaze.png" name="g-kk1_name"/>
            <gear id="1" effect="" effectTarget="" targetList="" suffix="" resKey="passive.png"
                  name="passive_mode_name"/>
            <gear id="2" effect="" effectTarget="" targetList="" suffix="" resKey="guard.png" name="guard_mode_name"/>
            <gear id="11" effect="" effectTarget="" targetList="" suffix="" resKey="combo-ship-repair.png"
                  name="csr-02_name"/>
            <gear id="12" effect="" effectTarget="" targetList="" suffix="" resKey="combo-guard.png"
                  name="cgm-02_name"/>
            <gear id="13" effect="" effectTarget="" targetList="" suffix="" resKey="guard.png" name="g-destroyer_name"/>
        </petgears>
        <petBuffs>
            <buff id="1" effect="" resKey="singularity_buff.png" languageKey="ttip_pet_buff_singularity"/>
            <buff id="2" effect="" resKey="speed_leech_buff.png" languageKey="ttip_pet_buff_singularity"/>
            <buff id="3" effect="" resKey="trade_buff.png" languageKey="ttip_pet_trading"/>
            <buff id="4" effect="" resKey="weaken_shield_buff.png" languageKey="ttip_pet_buff_weakenshield"/>
            <buff id="5" effect="" resKey="kamikaze_gear_cooldown.png" languageKey="ttip_pet_kamikaze-gear_cooldown"/>
            <buff id="6" effect="" resKey="combo-repair_gear_cooldown.png"
                  languageKey="ttip_pet_combo-repair-gear_cooldown"/>
        </petBuffs>
        <effects>

            <effect id="1" effect="locator" resKey="locator"/>
            <effect id="2" effect="petSpawn" resKey="spawn0"/>
            <!-- 		Skill Design Effects -->
            <effect id="3" effect="solace-effect" resKey="solace-effect" radius="60"/>
            <effect id="4" effect="diminisher-effect" resKey="diminisher-effect" radius="50"/>
            <effect id="5" effect="spectrum-effect" resKey="spectrum-effect" radius="45"/>
            <effect id="6" effect="sentinel-effect" resKey="sentinel-effect" radius="75"/>
            <effect id="7" effect="venom-effect" resKey="venom-effect" radius="50"/>

            <!-- 		Saboteur Slow Down -->
            <effect id="9" effect="slow" resKey="slow-effect"/>

            <!-- 		Techs -->
            <effect id="10" effect="shield1" resKey="shield1" radius="50"/>
            <effect id="11" effect="ela0" resKey="ela0"/>
            <effect id="12" effect="battleRepairRobot1" resKey="battleRepairRobot1"/>

            <!-- 		Level Up -->
            <effect id="13" effect="levelUp" resKey="levelUp"/>


            <!--  		 Pirates -->
            <effect id="15" effect="healRay" resKey=""/>
            <effect id="16" effect="invincibilityShield" resKey="invincibilityShield"/>
            <effect id="17" effect="rage" resKey=""/>
            <effect id="18" effect="skull" resKey="skull"/>
            <effect id="19" effect="spawn" resKey="spawn0"/>

            <!-- 		New Looping Resource Collector Beam (first use will be the Pirate Booty Boxes)	 -->
            <effect id="20" effect="loopingCollectorBeam" resKey="loopingCollectorBeam"/>
            <effect id="21" effect="timerCountdown" resKey="timerCountdown"/>
            <effect id="22" effect="staticMap" resKey="staticMap"/>

            <!-- 		Achievement Gain Animation -->
            <effect id="23" effect="achievementGain" resKey="achievementGain"/>

            <!-- 		Cubikon Spawn -->
            <effect id="24" effect="spawnChildren" resKey=""/>
            <effect id="25" effect="isSpawned" resKey=""/>

            <!-- 		Misc -->
            <effect id="26" effect="uber" resKey=""/>
            <effect id="27" effect="absorbation" resKey="laser7_sar01"/>
            <effect id="28" effect="absorbation_elite" resKey="laser7_sar02"/>
            <effect id="29" effect="homeBonus" resKey=""/>
            <effect id="30" effect="shieldEngineering" resKey="shield" radius="75"/>
            <!-- 		New Ships -->
            <effect id="31" effect="chargeShieldRay" resKey=""/>
            <effect id="32" effect="markedByRecon" resKey=""/>
            <effect id="33" effect="standaloneRingPod" resKey=""/>
            <effect id="34" effect="damageTransferRay" resKey=""/>
            <effect id="35" effect="fortify" resKey="ship69_fortify"/>
            <effect id="36" effect="drawFire" resKey=""/>
            <effect id="37" effect="protection" resKey=""/>
            <effect id="38" effect="protected" resKey=""/>
            <effect id="39" effect="drawFireVictim" resKey=""/>
            <effect id="40" effect="mouseCursorChange" resKey=""/>
            <effect id="41" effect="warpAnimation" resKey=""/>
            <effect id="42" effect="invasionNPC" resKey=""/>
            <effect id="43" effect="solarGlow" resKey=""/>
            <effect id="44" effect="saturnEvilGlow" resKey=""/>

            <!-- 		Battle StationZ -->
            <effect id="45" effect="deflectorShield" resKey="invincibilityShield" radius="90"/>
            <effect id="46" effect="emergencyRepair" resKey="emergencyRepair"/>
            <effect id="47" effect="construction" resKey="underConstruction"/>
            <!-- 			<effect id="48" effect="selfHeal" resKey="selfHeal"/> -->
            <effect id="49" effect="timerEffect" resKey=""/>
            <effect id="50" effect="moduleLevelUp" resKey="levelUp"/>
            <effect id="51" effect="ghostNPC" resKey=""/>
            <effect id="52" effect="bigPumpkinAbility1" resKey=""/>
            <effect id="53" effect="bigPumpkinAbility2" resKey=""/>
            <effect id="54" effect="moduleInstall" resKey="install_module"/>
            <effect id="55" effect="mirrorControls" resKey="mirrorControls"/>
            <effect id="56" effect="stickyBomb" resKey="stickyBomb"/>
            <effect id="57" effect="stickyBombFlying" resKey="stickyBomb"/>
            <effect id="58" effect="glowingRingEffect"/>
            <effect id="59" effect="POIZoneExplosionEffect"/>
            <effect id="60" effect="POIZoneExplosionEffectContainer"/>
            <effect id="61" effect="progressToNeutralEffect" resKey="controlPointProgress"/>
            <effect id="62" effect="progressToOccupiedEffect" resKey="controlPointProgress"/>
            <effect id="63" effect="genericGlowEffect"/>
            <effect id="64" effect="decloakEffect"/>
            <effect id="1337" effect="aprilsFoolsTrails" resKey=""/>
        </effects>
        <poizones>
            <!-- 			<poizone id="0" designType="simple" /> -->
            <poizone id="1" designType="background" backgroundID="3000" simpleBackgroundID="3001"/>
            <poizone id="2" designType="background" backgroundID="3008" simpleBackgroundID="3009"/>
            <poizone id="3" designType="background" backgroundID="3002" simpleBackgroundID="3003"/>
            <poizone id="4" designType="background" backgroundID="3004" simpleBackgroundID="3005"/>
            <poizone id="5" designType="background" backgroundID="3006" simpleBackgroundID="3007"/>
            <poizone id="6" designType="simple"/>
            <poizone id="7" designType="texture" resKey="sector_radius" repeat="false"/>
            <poizone id="8" designType="texture" resKey="sector_radius" repeat="false"/>
        </poizones>

        <battleStations>
            <battleStation id="0">
                <factions>
                    <faction id="0" srcKey="battleStation" resKey="none"/>
                    <faction id="1" srcKey="battleStation" resKey="mmo"/>
                    <faction id="2" srcKey="battleStation" resKey="eic"/>
                    <faction id="3" srcKey="battleStation" resKey="vru"/>
                </factions>
                <bubble srcKey="battleStation" resKey="clickIcon"/>
                <bubbleOffset _x="-25" _y="-210"/>
                <clickOffset _x="0" _y="0"/>
                <assetOffset _x="-25" _y="5"/>
                <energyOffset _x="0" _y="86"/>
                <labelOffset _x="0" _y="82"/>
                <clickRadius value="75"/>
            </battleStation>
        </battleStations>

        <battleStationModules>
            <battleStationModule id="0">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="wreck"/>
                    <expansion id="1" srcKey="battleModules" resKey="wreck"/>
                    <expansion id="2" srcKey="battleModules" resKey="wreck"/>
                </expansions>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="1">
                <expansions>
                    <expansion id="0" srcKey="battleStation" resKey="shield1"/>
                    <expansion id="1" srcKey="battleStation" resKey="shield2"/>
                    <expansion id="2" srcKey="battleStation" resKey="shield3"/>
                </expansions>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="2">
                <expansions>
                    <expansion id="0" srcKey="battleStation" resKey="hull1"/>
                    <expansion id="1" srcKey="battleStation" resKey="hull2"/>
                    <expansion id="2" srcKey="battleStation" resKey="hull3"/>
                </expansions>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="3">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="rep1"/>
                    <expansion id="1" srcKey="battleModules" resKey="rep2"/>
                    <expansion id="2" srcKey="battleModules" resKey="rep3"/>
                </expansions>
                <energyOffset _x="0" _y="6"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="6">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="laser1_1"/>
                    <expansion id="1" srcKey="battleModules" resKey="laser1_2"/>
                    <expansion id="2" srcKey="battleModules" resKey="laser1_3"/>
                </expansions>
                <positions id="0">
                    <position _x="0" _y="-20"/>
                </positions>
                <positions id="1">
                    <position _x="0" _y="-20"/>
                </positions>
                <positions id="2">
                    <position _x="0" _y="-20"/>
                </positions>
                <energyOffset _x="0" _y="0"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="5">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="laser2_1"/>
                    <expansion id="1" srcKey="battleModules" resKey="laser2_2"/>
                    <expansion id="2" srcKey="battleModules" resKey="laser2_3"/>
                </expansions>
                <positions id="0">
                    <position _x="0" _y="-30"/>
                </positions>
                <positions id="1">
                    <position _x="0" _y="-30"/>
                </positions>
                <positions id="2">
                    <position _x="0" _y="-30"/>
                </positions>
                <energyOffset _x="0" _y="8"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="4">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="laser3_1"/>
                    <expansion id="1" srcKey="battleModules" resKey="laser3_2"/>
                    <expansion id="2" srcKey="battleModules" resKey="laser3_3"/>
                </expansions>
                <positions id="0">
                    <position _x="0" _y="-50"/>
                </positions>
                <positions id="1">
                    <position _x="0" _y="-50"/>
                </positions>
                <positions id="2">
                    <position _x="0" _y="-50"/>
                </positions>
                <energyOffset _x="0" _y="40"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="7">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="rocket2_1"/>
                    <expansion id="1" srcKey="battleModules" resKey="rocket2_2"/>
                    <expansion id="2" srcKey="battleModules" resKey="rocket2_3"/>
                </expansions>
                <positions id="0">
                    <position _x="0" _y="-20"/>
                </positions>
                <positions id="1">
                    <position _x="0" _y="-20"/>
                </positions>
                <positions id="2">
                    <position _x="0" _y="-20"/>
                </positions>
                <rocketOffset _x="0" _y="15"/>
                <rocketAnimation>
                    <frame id="0" srcKey="battleModules" resKey="rocket_effect_0"/>
                    <frame id="1" srcKey="battleModules" resKey="rocket_effect_1"/>
                </rocketAnimation>
                <energyOffset _x="0" _y="0"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="8">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="rocket1_1"/>
                    <expansion id="1" srcKey="battleModules" resKey="rocket1_2"/>
                    <expansion id="2" srcKey="battleModules" resKey="rocket1_3"/>
                </expansions>
                <positions id="0">
                    <position _x="-18" _y="-35"/>
                </positions>
                <positions id="1">
                    <position _x="-18" _y="-35"/>
                </positions>
                <positions id="2">
                    <position _x="-18" _y="-35"/>
                </positions>
                <rocketOffset _x="2" _y="5"/>
                <rocketAnimation>
                    <frame id="0" srcKey="battleModules" resKey="rocket_effect_0"/>
                    <frame id="1" srcKey="battleModules" resKey="rocket_effect_1"/>
                </rocketAnimation>
                <energyOffset _x="0" _y="0"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="9">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="hon1"/>
                    <expansion id="1" srcKey="battleModules" resKey="hon2"/>
                    <expansion id="2" srcKey="battleModules" resKey="hon3"/>
                </expansions>
                <energyOffset _x="0" _y="0"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="10">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="dama1"/>
                    <expansion id="1" srcKey="battleModules" resKey="dama2"/>
                    <expansion id="2" srcKey="battleModules" resKey="dama3"/>
                </expansions>
                <energyOffset _x="0" _y="0"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
            <battleStationModule id="11">
                <expansions>
                    <expansion id="0" srcKey="battleModules" resKey="xp1"/>
                    <expansion id="1" srcKey="battleModules" resKey="xp2"/>
                    <expansion id="2" srcKey="battleModules" resKey="xp3"/>
                </expansions>
                <energyOffset _x="0" _y="0"/>
                <labelOffset _x="0" _y="12"/>
                <clickRadius value="55"/>
            </battleStationModule>
        </battleStationModules>

        <asteroids>
            <asteroid id="0">
                <normal srcKey="battleStation" resKey="asteroid"/>
                <bubble srcKey="battleStation" resKey="clickIcon"/>
                <bubbleOffset _x="0" _y="-175"/>
                <assetOffset _x="0" _y="5"/>
                <energyOffset _x="0" _y="0"/>
                <labelOffset _x="0" _y="80"/>
                <clickRadius value="55"/>
            </asteroid>
        </asteroids>

    </patterns>
</game>