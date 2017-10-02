<!DOCTYPE html>

<script type="text/javascript">
  alert("현재 개발중인 페이지로, 접속 상태 및 완성도 저해가 발생할 수 있습니다.");
</script>
<html>
  <head>
    <meta charset="utf-8">
    <?php $include = 1; include_once('../../lib/functions.php');?>
    <title>REMIND</title>
    <script type="text/javascript">
      function random_() {
        return (Math.round(Math.random()) === 1);
      }
      //Randomly ture or false return

      function is_game_end() {
        black_tiles = document.getElementsByClassName('black_tile');
        white_tiles = document.getElementsByClassName('white_tile');
        if (black_tiles.length === 0 || white_tiles.length === 0) {
          alert("당신의 승리입니다!");
        }
      }
      //각 타일을 가져온 후, 어느 한 색의 타일 개수가 0이면(=모든 타일의 색이 같으면) 승리이벤트를 실행한다.

      function revers_color(color) {
        if (color == "white_tile") {return "black_tile";}
        else if (color == "black_tile") {return "white_tile";}
      }
      //반전된 색상을 리턴해준다.

      var info_open = false;
      function info_() {
        if (info_open) {
          document.getElementById('hide_text_terget').innerHTML = "이 게임은 어떻게 하나요?";
          document.getElementById('info').className = 'hide';
          info_open = false;
        } else {
          document.getElementById('hide_text_terget').innerHTML = "닫기";
          document.getElementById('info').className = 'vis';
          info_open = true;
        }
      }
      //게임설명을 펴고 열기 위한 함수.

      function onload_() {
        var tile_1 = document.getElementById('1tile');
        var tile_2 = document.getElementById('2tile');
        var tile_3 = document.getElementById('3tile');
        var tile_4 = document.getElementById('4tile');
        var tile_5 = document.getElementById('5tile');
        var tile_6 = document.getElementById('6tile');
        var tile_7 = document.getElementById('7tile');
        var tile_8 = document.getElementById('8tile');
        var tile_9 = document.getElementById('9tile');
        var tile_10 = document.getElementById('10tile');
        var tile_11 = document.getElementById('11tile');
        var tile_12 = document.getElementById('12tile');
        var tile_13 = document.getElementById('13tile');
        var tile_14 = document.getElementById('14tile');
        var tile_15 = document.getElementById('15tile');
        var tile_16 = document.getElementById('16tile');
        var tile_17 = document.getElementById('17tile');
        var tile_18 = document.getElementById('18tile');
        var tile_19 = document.getElementById('19tile');
        var tile_20 = document.getElementById('20tile');
        var tile_21 = document.getElementById('21tile');
        var tile_22 = document.getElementById('22tile');
        var tile_23 = document.getElementById('23tile');
        var tile_24 = document.getElementById('24tile');
        var tile_25 = document.getElementById('25tile');
        var tile_26 = document.getElementById('26tile');
        var tile_27 = document.getElementById('27tile');
        var tile_28 = document.getElementById('28tile');
        var tile_29 = document.getElementById('29tile');
        var tile_30 = document.getElementById('30tile');
        var tile_31 = document.getElementById('31tile');
        var tile_32 = document.getElementById('32tile');
        var tile_33 = document.getElementById('33tile');
        var tile_34 = document.getElementById('34tile');
        var tile_35 = document.getElementById('35tile');
        var tile_36 = document.getElementById('36tile');
        var tile_37 = document.getElementById('37tile');
        var tile_38 = document.getElementById('38tile');
        var tile_39 = document.getElementById('39tile');
        var tile_40 = document.getElementById('40tile');
        var tile_41 = document.getElementById('41tile');
        var tile_42 = document.getElementById('42tile');
        var tile_43 = document.getElementById('43tile');
        var tile_44 = document.getElementById('44tile');
        var tile_45 = document.getElementById('45tile');
        var tile_46 = document.getElementById('46tile');
        var tile_47 = document.getElementById('47tile');
        var tile_48 = document.getElementById('48tile');
        var tile_49 = document.getElementById('49tile');
        var tile_50 = document.getElementById('50tile');
        var tile_51 = document.getElementById('51tile');
        var tile_52 = document.getElementById('52tile');
        var tile_53 = document.getElementById('53tile');
        var tile_54 = document.getElementById('54tile');
        var tile_55 = document.getElementById('55tile');
        var tile_56 = document.getElementById('56tile');
        var tile_57 = document.getElementById('57tile');
        var tile_58 = document.getElementById('58tile');
        var tile_59 = document.getElementById('59tile');
        var tile_60 = document.getElementById('60tile');
        var tile_61 = document.getElementById('61tile');
        var tile_62 = document.getElementById('62tile');
        var tile_63 = document.getElementById('63tile');
        var tile_64 = document.getElementById('64tile');
        var tile_65 = document.getElementById('65tile');
        var tile_66 = document.getElementById('66tile');
        var tile_67 = document.getElementById('67tile');
        var tile_68 = document.getElementById('68tile');
        var tile_69 = document.getElementById('69tile');
        var tile_70 = document.getElementById('70tile');
        var tile_71 = document.getElementById('71tile');
        var tile_72 = document.getElementById('72tile');
        var tile_73 = document.getElementById('73tile');
        var tile_74 = document.getElementById('74tile');
        var tile_75 = document.getElementById('75tile');
        var tile_76 = document.getElementById('76tile');
        var tile_77 = document.getElementById('77tile');
        var tile_78 = document.getElementById('78tile');
        var tile_79 = document.getElementById('79tile');
        var tile_80 = document.getElementById('80tile');
        var tile_81 = document.getElementById('81tile');
        var tile_82 = document.getElementById('82tile');
        var tile_83 = document.getElementById('83tile');
        var tile_84 = document.getElementById('84tile');
        var tile_85 = document.getElementById('85tile');
        var tile_86 = document.getElementById('86tile');
        var tile_87 = document.getElementById('87tile');
        var tile_88 = document.getElementById('88tile');
        var tile_89 = document.getElementById('89tile');
        var tile_90 = document.getElementById('90tile');
        var tile_91 = document.getElementById('91tile');
        var tile_92 = document.getElementById('92tile');
        var tile_93 = document.getElementById('93tile');
        var tile_94 = document.getElementById('94tile');
        var tile_95 = document.getElementById('95tile');
        var tile_96 = document.getElementById('96tile');
        var tile_97 = document.getElementById('97tile');
        var tile_98 = document.getElementById('98tile');
        var tile_99 = document.getElementById('99tile');
        var tile_100 = document.getElementById('100tile');
        var tile_101 = document.getElementById('101tile');
        var tile_102 = document.getElementById('102tile');
        var tile_103 = document.getElementById('103tile');
        var tile_104 = document.getElementById('104tile');
        var tile_105 = document.getElementById('105tile');
        var tile_106 = document.getElementById('106tile');
        var tile_107 = document.getElementById('107tile');
        var tile_108 = document.getElementById('108tile');
        var tile_109 = document.getElementById('109tile');
        var tile_110 = document.getElementById('110tile');
        var tile_111 = document.getElementById('111tile');
        var tile_112 = document.getElementById('112tile');
        var tile_113 = document.getElementById('113tile');
        var tile_114 = document.getElementById('114tile');
        var tile_115 = document.getElementById('115tile');
        var tile_116 = document.getElementById('116tile');
        var tile_117 = document.getElementById('117tile');
        var tile_118 = document.getElementById('118tile');
        var tile_119 = document.getElementById('119tile');
        var tile_120 = document.getElementById('120tile');
        var tile_121 = document.getElementById('121tile');
        var tile_122 = document.getElementById('122tile');
        var tile_123 = document.getElementById('123tile');
        var tile_124 = document.getElementById('124tile');
        var tile_125 = document.getElementById('125tile');
        var tile_126 = document.getElementById('126tile');
        var tile_127 = document.getElementById('127tile');
        var tile_128 = document.getElementById('128tile');
        var tile_129 = document.getElementById('129tile');
        var tile_130 = document.getElementById('130tile');
        var tile_131 = document.getElementById('131tile');
        var tile_132 = document.getElementById('132tile');
        var tile_133 = document.getElementById('133tile');
        var tile_134 = document.getElementById('134tile');
        var tile_135 = document.getElementById('135tile');
        var tile_136 = document.getElementById('136tile');
        var tile_137 = document.getElementById('137tile');
        var tile_138 = document.getElementById('138tile');
        var tile_139 = document.getElementById('139tile');
        var tile_140 = document.getElementById('140tile');
        var tile_141 = document.getElementById('141tile');
        var tile_142 = document.getElementById('142tile');
        var tile_143 = document.getElementById('143tile');
        var tile_144 = document.getElementById('144tile');
        var tile_145 = document.getElementById('145tile');
        var tile_146 = document.getElementById('146tile');
        var tile_147 = document.getElementById('147tile');
        var tile_148 = document.getElementById('148tile');
        var tile_149 = document.getElementById('149tile');
        var tile_150 = document.getElementById('150tile');
        var tile_151 = document.getElementById('151tile');
        var tile_152 = document.getElementById('152tile');
        var tile_153 = document.getElementById('153tile');
        var tile_154 = document.getElementById('154tile');
        var tile_155 = document.getElementById('155tile');
        var tile_156 = document.getElementById('156tile');
        var tile_157 = document.getElementById('157tile');
        var tile_158 = document.getElementById('158tile');
        var tile_159 = document.getElementById('159tile');
        var tile_160 = document.getElementById('160tile');
        var tile_161 = document.getElementById('161tile');
        var tile_162 = document.getElementById('162tile');
        var tile_163 = document.getElementById('163tile');
        var tile_164 = document.getElementById('164tile');
        var tile_165 = document.getElementById('165tile');
        var tile_166 = document.getElementById('166tile');
        var tile_167 = document.getElementById('167tile');
        var tile_168 = document.getElementById('168tile');
        var tile_169 = document.getElementById('169tile');
        var tile_170 = document.getElementById('170tile');
        var tile_171 = document.getElementById('171tile');
        var tile_172 = document.getElementById('172tile');
        var tile_173 = document.getElementById('173tile');
        var tile_174 = document.getElementById('174tile');
        var tile_175 = document.getElementById('175tile');
        var tile_176 = document.getElementById('176tile');
        var tile_177 = document.getElementById('177tile');
        var tile_178 = document.getElementById('178tile');
        var tile_179 = document.getElementById('179tile');
        var tile_180 = document.getElementById('180tile');
        var tile_181 = document.getElementById('181tile');
        var tile_182 = document.getElementById('182tile');
        var tile_183 = document.getElementById('183tile');
        var tile_184 = document.getElementById('184tile');
        var tile_185 = document.getElementById('185tile');
        var tile_186 = document.getElementById('186tile');
        var tile_187 = document.getElementById('187tile');
        var tile_188 = document.getElementById('188tile');
        var tile_189 = document.getElementById('189tile');
        var tile_190 = document.getElementById('190tile');
        var tile_191 = document.getElementById('191tile');
        var tile_192 = document.getElementById('192tile');
        var tile_193 = document.getElementById('193tile');
        var tile_194 = document.getElementById('194tile');
        var tile_195 = document.getElementById('195tile');
        var tile_196 = document.getElementById('196tile');
        var tile_197 = document.getElementById('197tile');
        var tile_198 = document.getElementById('198tile');
        var tile_199 = document.getElementById('199tile');
        var tile_200 = document.getElementById('200tile');
        var display_ = document.getElementById('display');

        tile_1.onclick = function() { tile_2.className = revers_color(tile_2.className); tile_11.className = revers_color(tile_11.className); is_game_end(); }
        tile_2.onclick = function() { tile_3.className = revers_color(tile_3.className); tile_1.className = revers_color(tile_1.className); tile_12.className = revers_color(tile_12.className); is_game_end(); }
        tile_3.onclick = function() { tile_4.className = revers_color(tile_4.className); tile_2.className = revers_color(tile_2.className); tile_13.className = revers_color(tile_13.className); is_game_end(); }
        tile_4.onclick = function() { tile_5.className = revers_color(tile_5.className); tile_3.className = revers_color(tile_3.className); tile_14.className = revers_color(tile_14.className); is_game_end(); }
        tile_5.onclick = function() { tile_6.className = revers_color(tile_6.className); tile_4.className = revers_color(tile_4.className); tile_15.className = revers_color(tile_15.className); is_game_end(); }
        tile_6.onclick = function() { tile_7.className = revers_color(tile_7.className); tile_5.className = revers_color(tile_5.className); tile_16.className = revers_color(tile_16.className); is_game_end(); }
        tile_7.onclick = function() { tile_8.className = revers_color(tile_8.className); tile_6.className = revers_color(tile_6.className); tile_17.className = revers_color(tile_17.className); is_game_end(); }
        tile_8.onclick = function() { tile_9.className = revers_color(tile_9.className); tile_7.className = revers_color(tile_7.className); tile_18.className = revers_color(tile_18.className); is_game_end(); }
        tile_9.onclick = function() { tile_10.className = revers_color(tile_10.className); tile_8.className = revers_color(tile_8.className); tile_19.className = revers_color(tile_19.className); is_game_end(); }
        tile_10.onclick = function() { tile_9.className = revers_color(tile_9.className); tile_20.className = revers_color(tile_20.className); is_game_end(); }
        tile_11.onclick = function() { tile_12.className = revers_color(tile_12.className); tile_21.className = revers_color(tile_21.className); tile_1.className = revers_color(tile_1.className); is_game_end(); }
        tile_12.onclick = function() { tile_13.className = revers_color(tile_13.className); tile_11.className = revers_color(tile_11.className); tile_22.className = revers_color(tile_22.className); tile_2.className = revers_color(tile_2.className); is_game_end(); }
        tile_13.onclick = function() { tile_14.className = revers_color(tile_14.className); tile_12.className = revers_color(tile_12.className); tile_23.className = revers_color(tile_23.className); tile_3.className = revers_color(tile_3.className); is_game_end(); }
        tile_14.onclick = function() { tile_15.className = revers_color(tile_15.className); tile_13.className = revers_color(tile_13.className); tile_24.className = revers_color(tile_24.className); tile_4.className = revers_color(tile_4.className); is_game_end(); }
        tile_15.onclick = function() { tile_16.className = revers_color(tile_16.className); tile_14.className = revers_color(tile_14.className); tile_25.className = revers_color(tile_25.className); tile_5.className = revers_color(tile_5.className); is_game_end(); }
        tile_16.onclick = function() { tile_17.className = revers_color(tile_17.className); tile_15.className = revers_color(tile_15.className); tile_26.className = revers_color(tile_26.className); tile_6.className = revers_color(tile_6.className); is_game_end(); }
        tile_17.onclick = function() { tile_18.className = revers_color(tile_18.className); tile_16.className = revers_color(tile_16.className); tile_27.className = revers_color(tile_27.className); tile_7.className = revers_color(tile_7.className); is_game_end(); }
        tile_18.onclick = function() { tile_19.className = revers_color(tile_19.className); tile_17.className = revers_color(tile_17.className); tile_28.className = revers_color(tile_28.className); tile_8.className = revers_color(tile_8.className); is_game_end(); }
        tile_19.onclick = function() { tile_20.className = revers_color(tile_20.className); tile_18.className = revers_color(tile_18.className); tile_29.className = revers_color(tile_29.className); tile_9.className = revers_color(tile_9.className); is_game_end(); }
        tile_20.onclick = function() { tile_19.className = revers_color(tile_19.className); tile_30.className = revers_color(tile_30.className); tile_10.className = revers_color(tile_10.className); is_game_end(); }
        tile_21.onclick = function() { tile_22.className = revers_color(tile_22.className); tile_31.className = revers_color(tile_31.className); tile_11.className = revers_color(tile_11.className); is_game_end(); }
        tile_22.onclick = function() { tile_23.className = revers_color(tile_23.className); tile_21.className = revers_color(tile_21.className); tile_32.className = revers_color(tile_32.className); tile_12.className = revers_color(tile_12.className); is_game_end(); }
        tile_23.onclick = function() { tile_24.className = revers_color(tile_24.className); tile_22.className = revers_color(tile_22.className); tile_33.className = revers_color(tile_33.className); tile_13.className = revers_color(tile_13.className); is_game_end(); }
        tile_24.onclick = function() { tile_25.className = revers_color(tile_25.className); tile_23.className = revers_color(tile_23.className); tile_34.className = revers_color(tile_34.className); tile_14.className = revers_color(tile_14.className); is_game_end(); }
        tile_25.onclick = function() { tile_26.className = revers_color(tile_26.className); tile_24.className = revers_color(tile_24.className); tile_35.className = revers_color(tile_35.className); tile_15.className = revers_color(tile_15.className); is_game_end(); }
        tile_26.onclick = function() { tile_27.className = revers_color(tile_27.className); tile_25.className = revers_color(tile_25.className); tile_36.className = revers_color(tile_36.className); tile_16.className = revers_color(tile_16.className); is_game_end(); }
        tile_27.onclick = function() { tile_28.className = revers_color(tile_28.className); tile_26.className = revers_color(tile_26.className); tile_37.className = revers_color(tile_37.className); tile_17.className = revers_color(tile_17.className); is_game_end(); }
        tile_28.onclick = function() { tile_29.className = revers_color(tile_29.className); tile_27.className = revers_color(tile_27.className); tile_38.className = revers_color(tile_38.className); tile_18.className = revers_color(tile_18.className); is_game_end(); }
        tile_29.onclick = function() { tile_30.className = revers_color(tile_30.className); tile_28.className = revers_color(tile_28.className); tile_39.className = revers_color(tile_39.className); tile_19.className = revers_color(tile_19.className); is_game_end(); }
        tile_30.onclick = function() { tile_29.className = revers_color(tile_29.className); tile_40.className = revers_color(tile_40.className); tile_20.className = revers_color(tile_20.className); is_game_end(); }
        tile_31.onclick = function() { tile_32.className = revers_color(tile_32.className); tile_41.className = revers_color(tile_41.className); tile_21.className = revers_color(tile_21.className); is_game_end(); }
        tile_32.onclick = function() { tile_33.className = revers_color(tile_33.className); tile_31.className = revers_color(tile_31.className); tile_42.className = revers_color(tile_42.className); tile_22.className = revers_color(tile_22.className); is_game_end(); }
        tile_33.onclick = function() { tile_34.className = revers_color(tile_34.className); tile_32.className = revers_color(tile_32.className); tile_43.className = revers_color(tile_43.className); tile_23.className = revers_color(tile_23.className); is_game_end(); }
        tile_34.onclick = function() { tile_35.className = revers_color(tile_35.className); tile_33.className = revers_color(tile_33.className); tile_44.className = revers_color(tile_44.className); tile_24.className = revers_color(tile_24.className); is_game_end(); }
        tile_35.onclick = function() { tile_36.className = revers_color(tile_36.className); tile_34.className = revers_color(tile_34.className); tile_45.className = revers_color(tile_45.className); tile_25.className = revers_color(tile_25.className); is_game_end(); }
        tile_36.onclick = function() { tile_37.className = revers_color(tile_37.className); tile_35.className = revers_color(tile_35.className); tile_46.className = revers_color(tile_46.className); tile_26.className = revers_color(tile_26.className); is_game_end(); }
        tile_37.onclick = function() { tile_38.className = revers_color(tile_38.className); tile_36.className = revers_color(tile_36.className); tile_47.className = revers_color(tile_47.className); tile_27.className = revers_color(tile_27.className); is_game_end(); }
        tile_38.onclick = function() { tile_39.className = revers_color(tile_39.className); tile_37.className = revers_color(tile_37.className); tile_48.className = revers_color(tile_48.className); tile_28.className = revers_color(tile_28.className); is_game_end(); }
        tile_39.onclick = function() { tile_40.className = revers_color(tile_40.className); tile_38.className = revers_color(tile_38.className); tile_49.className = revers_color(tile_49.className); tile_29.className = revers_color(tile_29.className); is_game_end(); }
        tile_40.onclick = function() { tile_39.className = revers_color(tile_39.className); tile_50.className = revers_color(tile_50.className); tile_30.className = revers_color(tile_30.className); is_game_end(); }
        tile_41.onclick = function() { tile_42.className = revers_color(tile_42.className); tile_51.className = revers_color(tile_51.className); tile_31.className = revers_color(tile_31.className); is_game_end(); }
        tile_42.onclick = function() { tile_43.className = revers_color(tile_43.className); tile_41.className = revers_color(tile_41.className); tile_52.className = revers_color(tile_52.className); tile_32.className = revers_color(tile_32.className); is_game_end(); }
        tile_43.onclick = function() { tile_44.className = revers_color(tile_44.className); tile_42.className = revers_color(tile_42.className); tile_53.className = revers_color(tile_53.className); tile_33.className = revers_color(tile_33.className); is_game_end(); }
        tile_44.onclick = function() { tile_45.className = revers_color(tile_45.className); tile_43.className = revers_color(tile_43.className); tile_54.className = revers_color(tile_54.className); tile_34.className = revers_color(tile_34.className); is_game_end(); }
        tile_45.onclick = function() { tile_46.className = revers_color(tile_46.className); tile_44.className = revers_color(tile_44.className); tile_55.className = revers_color(tile_55.className); tile_35.className = revers_color(tile_35.className); is_game_end(); }
        tile_46.onclick = function() { tile_47.className = revers_color(tile_47.className); tile_45.className = revers_color(tile_45.className); tile_56.className = revers_color(tile_56.className); tile_36.className = revers_color(tile_36.className); is_game_end(); }
        tile_47.onclick = function() { tile_48.className = revers_color(tile_48.className); tile_46.className = revers_color(tile_46.className); tile_57.className = revers_color(tile_57.className); tile_37.className = revers_color(tile_37.className); is_game_end(); }
        tile_48.onclick = function() { tile_49.className = revers_color(tile_49.className); tile_47.className = revers_color(tile_47.className); tile_58.className = revers_color(tile_58.className); tile_38.className = revers_color(tile_38.className); is_game_end(); }
        tile_49.onclick = function() { tile_50.className = revers_color(tile_50.className); tile_48.className = revers_color(tile_48.className); tile_59.className = revers_color(tile_59.className); tile_39.className = revers_color(tile_39.className); is_game_end(); }
        tile_50.onclick = function() { tile_49.className = revers_color(tile_49.className); tile_60.className = revers_color(tile_60.className); tile_40.className = revers_color(tile_40.className); is_game_end(); }
        tile_51.onclick = function() { tile_52.className = revers_color(tile_52.className); tile_61.className = revers_color(tile_61.className); tile_41.className = revers_color(tile_41.className); is_game_end(); }
        tile_52.onclick = function() { tile_53.className = revers_color(tile_53.className); tile_51.className = revers_color(tile_51.className); tile_62.className = revers_color(tile_62.className); tile_42.className = revers_color(tile_42.className); is_game_end(); }
        tile_53.onclick = function() { tile_54.className = revers_color(tile_54.className); tile_52.className = revers_color(tile_52.className); tile_63.className = revers_color(tile_63.className); tile_43.className = revers_color(tile_43.className); is_game_end(); }
        tile_54.onclick = function() { tile_55.className = revers_color(tile_55.className); tile_53.className = revers_color(tile_53.className); tile_64.className = revers_color(tile_64.className); tile_44.className = revers_color(tile_44.className); is_game_end(); }
        tile_55.onclick = function() { tile_56.className = revers_color(tile_56.className); tile_54.className = revers_color(tile_54.className); tile_65.className = revers_color(tile_65.className); tile_45.className = revers_color(tile_45.className); is_game_end(); }
        tile_56.onclick = function() { tile_57.className = revers_color(tile_57.className); tile_55.className = revers_color(tile_55.className); tile_66.className = revers_color(tile_66.className); tile_46.className = revers_color(tile_46.className); is_game_end(); }
        tile_57.onclick = function() { tile_58.className = revers_color(tile_58.className); tile_56.className = revers_color(tile_56.className); tile_67.className = revers_color(tile_67.className); tile_47.className = revers_color(tile_47.className); is_game_end(); }
        tile_58.onclick = function() { tile_59.className = revers_color(tile_59.className); tile_57.className = revers_color(tile_57.className); tile_68.className = revers_color(tile_68.className); tile_48.className = revers_color(tile_48.className); is_game_end(); }
        tile_59.onclick = function() { tile_60.className = revers_color(tile_60.className); tile_58.className = revers_color(tile_58.className); tile_69.className = revers_color(tile_69.className); tile_49.className = revers_color(tile_49.className); is_game_end(); }
        tile_60.onclick = function() { tile_59.className = revers_color(tile_59.className); tile_70.className = revers_color(tile_70.className); tile_50.className = revers_color(tile_50.className); is_game_end(); }
        tile_61.onclick = function() { tile_62.className = revers_color(tile_62.className); tile_71.className = revers_color(tile_71.className); tile_51.className = revers_color(tile_51.className); is_game_end(); }
        tile_62.onclick = function() { tile_63.className = revers_color(tile_63.className); tile_61.className = revers_color(tile_61.className); tile_72.className = revers_color(tile_72.className); tile_52.className = revers_color(tile_52.className); is_game_end(); }
        tile_63.onclick = function() { tile_64.className = revers_color(tile_64.className); tile_62.className = revers_color(tile_62.className); tile_73.className = revers_color(tile_73.className); tile_53.className = revers_color(tile_53.className); is_game_end(); }
        tile_64.onclick = function() { tile_65.className = revers_color(tile_65.className); tile_63.className = revers_color(tile_63.className); tile_74.className = revers_color(tile_74.className); tile_54.className = revers_color(tile_54.className); is_game_end(); }
        tile_65.onclick = function() { tile_66.className = revers_color(tile_66.className); tile_64.className = revers_color(tile_64.className); tile_75.className = revers_color(tile_75.className); tile_55.className = revers_color(tile_55.className); is_game_end(); }
        tile_66.onclick = function() { tile_67.className = revers_color(tile_67.className); tile_65.className = revers_color(tile_65.className); tile_76.className = revers_color(tile_76.className); tile_56.className = revers_color(tile_56.className); is_game_end(); }
        tile_67.onclick = function() { tile_68.className = revers_color(tile_68.className); tile_66.className = revers_color(tile_66.className); tile_77.className = revers_color(tile_77.className); tile_57.className = revers_color(tile_57.className); is_game_end(); }
        tile_68.onclick = function() { tile_69.className = revers_color(tile_69.className); tile_67.className = revers_color(tile_67.className); tile_78.className = revers_color(tile_78.className); tile_58.className = revers_color(tile_58.className); is_game_end(); }
        tile_69.onclick = function() { tile_70.className = revers_color(tile_70.className); tile_68.className = revers_color(tile_68.className); tile_79.className = revers_color(tile_79.className); tile_59.className = revers_color(tile_59.className); is_game_end(); }
        tile_70.onclick = function() { tile_69.className = revers_color(tile_69.className); tile_80.className = revers_color(tile_80.className); tile_60.className = revers_color(tile_60.className); is_game_end(); }
        tile_71.onclick = function() { tile_72.className = revers_color(tile_72.className); tile_81.className = revers_color(tile_81.className); tile_61.className = revers_color(tile_61.className); is_game_end(); }
        tile_72.onclick = function() { tile_73.className = revers_color(tile_73.className); tile_71.className = revers_color(tile_71.className); tile_82.className = revers_color(tile_82.className); tile_62.className = revers_color(tile_62.className); is_game_end(); }
        tile_73.onclick = function() { tile_74.className = revers_color(tile_74.className); tile_72.className = revers_color(tile_72.className); tile_83.className = revers_color(tile_83.className); tile_63.className = revers_color(tile_63.className); is_game_end(); }
        tile_74.onclick = function() { tile_75.className = revers_color(tile_75.className); tile_73.className = revers_color(tile_73.className); tile_84.className = revers_color(tile_84.className); tile_64.className = revers_color(tile_64.className); is_game_end(); }
        tile_75.onclick = function() { tile_76.className = revers_color(tile_76.className); tile_74.className = revers_color(tile_74.className); tile_85.className = revers_color(tile_85.className); tile_65.className = revers_color(tile_65.className); is_game_end(); }
        tile_76.onclick = function() { tile_77.className = revers_color(tile_77.className); tile_75.className = revers_color(tile_75.className); tile_86.className = revers_color(tile_86.className); tile_66.className = revers_color(tile_66.className); is_game_end(); }
        tile_77.onclick = function() { tile_78.className = revers_color(tile_78.className); tile_76.className = revers_color(tile_76.className); tile_87.className = revers_color(tile_87.className); tile_67.className = revers_color(tile_67.className); is_game_end(); }
        tile_78.onclick = function() { tile_79.className = revers_color(tile_79.className); tile_77.className = revers_color(tile_77.className); tile_88.className = revers_color(tile_88.className); tile_68.className = revers_color(tile_68.className); is_game_end(); }
        tile_79.onclick = function() { tile_80.className = revers_color(tile_80.className); tile_78.className = revers_color(tile_78.className); tile_89.className = revers_color(tile_89.className); tile_69.className = revers_color(tile_69.className); is_game_end(); }
        tile_80.onclick = function() { tile_79.className = revers_color(tile_79.className); tile_90.className = revers_color(tile_90.className); tile_70.className = revers_color(tile_70.className); is_game_end(); }
        tile_81.onclick = function() { tile_82.className = revers_color(tile_82.className); tile_91.className = revers_color(tile_91.className); tile_71.className = revers_color(tile_71.className); is_game_end(); }
        tile_82.onclick = function() { tile_83.className = revers_color(tile_83.className); tile_81.className = revers_color(tile_81.className); tile_92.className = revers_color(tile_92.className); tile_72.className = revers_color(tile_72.className); is_game_end(); }
        tile_83.onclick = function() { tile_84.className = revers_color(tile_84.className); tile_82.className = revers_color(tile_82.className); tile_93.className = revers_color(tile_93.className); tile_73.className = revers_color(tile_73.className); is_game_end(); }
        tile_84.onclick = function() { tile_85.className = revers_color(tile_85.className); tile_83.className = revers_color(tile_83.className); tile_94.className = revers_color(tile_94.className); tile_74.className = revers_color(tile_74.className); is_game_end(); }
        tile_85.onclick = function() { tile_86.className = revers_color(tile_86.className); tile_84.className = revers_color(tile_84.className); tile_95.className = revers_color(tile_95.className); tile_75.className = revers_color(tile_75.className); is_game_end(); }
        tile_86.onclick = function() { tile_87.className = revers_color(tile_87.className); tile_85.className = revers_color(tile_85.className); tile_96.className = revers_color(tile_96.className); tile_76.className = revers_color(tile_76.className); is_game_end(); }
        tile_87.onclick = function() { tile_88.className = revers_color(tile_88.className); tile_86.className = revers_color(tile_86.className); tile_97.className = revers_color(tile_97.className); tile_77.className = revers_color(tile_77.className); is_game_end(); }
        tile_88.onclick = function() { tile_89.className = revers_color(tile_89.className); tile_87.className = revers_color(tile_87.className); tile_98.className = revers_color(tile_98.className); tile_78.className = revers_color(tile_78.className); is_game_end(); }
        tile_89.onclick = function() { tile_90.className = revers_color(tile_90.className); tile_88.className = revers_color(tile_88.className); tile_99.className = revers_color(tile_99.className); tile_79.className = revers_color(tile_79.className); is_game_end(); }
        tile_90.onclick = function() { tile_89.className = revers_color(tile_89.className); tile_100.className = revers_color(tile_100.className); tile_80.className = revers_color(tile_80.className); is_game_end(); }
        tile_91.onclick = function() { tile_92.className = revers_color(tile_92.className); tile_101.className = revers_color(tile_101.className); tile_81.className = revers_color(tile_81.className); is_game_end(); }
        tile_92.onclick = function() { tile_93.className = revers_color(tile_93.className); tile_91.className = revers_color(tile_91.className); tile_102.className = revers_color(tile_102.className); tile_82.className = revers_color(tile_82.className); is_game_end(); }
        tile_93.onclick = function() { tile_94.className = revers_color(tile_94.className); tile_92.className = revers_color(tile_92.className); tile_103.className = revers_color(tile_103.className); tile_83.className = revers_color(tile_83.className); is_game_end(); }
        tile_94.onclick = function() { tile_95.className = revers_color(tile_95.className); tile_93.className = revers_color(tile_93.className); tile_104.className = revers_color(tile_104.className); tile_84.className = revers_color(tile_84.className); is_game_end(); }
        tile_95.onclick = function() { tile_96.className = revers_color(tile_96.className); tile_94.className = revers_color(tile_94.className); tile_105.className = revers_color(tile_105.className); tile_85.className = revers_color(tile_85.className); is_game_end(); }
        tile_96.onclick = function() { tile_97.className = revers_color(tile_97.className); tile_95.className = revers_color(tile_95.className); tile_106.className = revers_color(tile_106.className); tile_86.className = revers_color(tile_86.className); is_game_end(); }
        tile_97.onclick = function() { tile_98.className = revers_color(tile_98.className); tile_96.className = revers_color(tile_96.className); tile_107.className = revers_color(tile_107.className); tile_87.className = revers_color(tile_87.className); is_game_end(); }
        tile_98.onclick = function() { tile_99.className = revers_color(tile_99.className); tile_97.className = revers_color(tile_97.className); tile_108.className = revers_color(tile_108.className); tile_88.className = revers_color(tile_88.className); is_game_end(); }
        tile_99.onclick = function() { tile_100.className = revers_color(tile_100.className); tile_98.className = revers_color(tile_98.className); tile_109.className = revers_color(tile_109.className); tile_89.className = revers_color(tile_89.className); is_game_end(); }
        tile_100.onclick = function() { tile_99.className = revers_color(tile_99.className); tile_110.className = revers_color(tile_110.className); tile_90.className = revers_color(tile_90.className); is_game_end(); }
        tile_101.onclick = function() { tile_102.className = revers_color(tile_102.className); tile_111.className = revers_color(tile_111.className); tile_91.className = revers_color(tile_91.className); is_game_end(); }
        tile_102.onclick = function() { tile_103.className = revers_color(tile_103.className); tile_101.className = revers_color(tile_101.className); tile_112.className = revers_color(tile_112.className); tile_92.className = revers_color(tile_92.className); is_game_end(); }
        tile_103.onclick = function() { tile_104.className = revers_color(tile_104.className); tile_102.className = revers_color(tile_102.className); tile_113.className = revers_color(tile_113.className); tile_93.className = revers_color(tile_93.className); is_game_end(); }
        tile_104.onclick = function() { tile_105.className = revers_color(tile_105.className); tile_103.className = revers_color(tile_103.className); tile_114.className = revers_color(tile_114.className); tile_94.className = revers_color(tile_94.className); is_game_end(); }
        tile_105.onclick = function() { tile_106.className = revers_color(tile_106.className); tile_104.className = revers_color(tile_104.className); tile_115.className = revers_color(tile_115.className); tile_95.className = revers_color(tile_95.className); is_game_end(); }
        tile_106.onclick = function() { tile_107.className = revers_color(tile_107.className); tile_105.className = revers_color(tile_105.className); tile_116.className = revers_color(tile_116.className); tile_96.className = revers_color(tile_96.className); is_game_end(); }
        tile_107.onclick = function() { tile_108.className = revers_color(tile_108.className); tile_106.className = revers_color(tile_106.className); tile_117.className = revers_color(tile_117.className); tile_97.className = revers_color(tile_97.className); is_game_end(); }
        tile_108.onclick = function() { tile_109.className = revers_color(tile_109.className); tile_107.className = revers_color(tile_107.className); tile_118.className = revers_color(tile_118.className); tile_98.className = revers_color(tile_98.className); is_game_end(); }
        tile_109.onclick = function() { tile_110.className = revers_color(tile_110.className); tile_108.className = revers_color(tile_108.className); tile_119.className = revers_color(tile_119.className); tile_99.className = revers_color(tile_99.className); is_game_end(); }
        tile_110.onclick = function() { tile_109.className = revers_color(tile_109.className); tile_120.className = revers_color(tile_120.className); tile_100.className = revers_color(tile_100.className); is_game_end(); }
        tile_111.onclick = function() { tile_112.className = revers_color(tile_112.className); tile_121.className = revers_color(tile_121.className); tile_101.className = revers_color(tile_101.className); is_game_end(); }
        tile_112.onclick = function() { tile_113.className = revers_color(tile_113.className); tile_111.className = revers_color(tile_111.className); tile_122.className = revers_color(tile_122.className); tile_102.className = revers_color(tile_102.className); is_game_end(); }
        tile_113.onclick = function() { tile_114.className = revers_color(tile_114.className); tile_112.className = revers_color(tile_112.className); tile_123.className = revers_color(tile_123.className); tile_103.className = revers_color(tile_103.className); is_game_end(); }
        tile_114.onclick = function() { tile_115.className = revers_color(tile_115.className); tile_113.className = revers_color(tile_113.className); tile_124.className = revers_color(tile_124.className); tile_104.className = revers_color(tile_104.className); is_game_end(); }
        tile_115.onclick = function() { tile_116.className = revers_color(tile_116.className); tile_114.className = revers_color(tile_114.className); tile_125.className = revers_color(tile_125.className); tile_105.className = revers_color(tile_105.className); is_game_end(); }
        tile_116.onclick = function() { tile_117.className = revers_color(tile_117.className); tile_115.className = revers_color(tile_115.className); tile_126.className = revers_color(tile_126.className); tile_106.className = revers_color(tile_106.className); is_game_end(); }
        tile_117.onclick = function() { tile_118.className = revers_color(tile_118.className); tile_116.className = revers_color(tile_116.className); tile_127.className = revers_color(tile_127.className); tile_107.className = revers_color(tile_107.className); is_game_end(); }
        tile_118.onclick = function() { tile_119.className = revers_color(tile_119.className); tile_117.className = revers_color(tile_117.className); tile_128.className = revers_color(tile_128.className); tile_108.className = revers_color(tile_108.className); is_game_end(); }
        tile_119.onclick = function() { tile_120.className = revers_color(tile_120.className); tile_118.className = revers_color(tile_118.className); tile_129.className = revers_color(tile_129.className); tile_109.className = revers_color(tile_109.className); is_game_end(); }
        tile_120.onclick = function() { tile_119.className = revers_color(tile_119.className); tile_130.className = revers_color(tile_130.className); tile_110.className = revers_color(tile_110.className); is_game_end(); }
        tile_121.onclick = function() { tile_122.className = revers_color(tile_122.className); tile_131.className = revers_color(tile_131.className); tile_111.className = revers_color(tile_111.className); is_game_end(); }
        tile_122.onclick = function() { tile_123.className = revers_color(tile_123.className); tile_121.className = revers_color(tile_121.className); tile_132.className = revers_color(tile_132.className); tile_112.className = revers_color(tile_112.className); is_game_end(); }
        tile_123.onclick = function() { tile_124.className = revers_color(tile_124.className); tile_122.className = revers_color(tile_122.className); tile_133.className = revers_color(tile_133.className); tile_113.className = revers_color(tile_113.className); is_game_end(); }
        tile_124.onclick = function() { tile_125.className = revers_color(tile_125.className); tile_123.className = revers_color(tile_123.className); tile_134.className = revers_color(tile_134.className); tile_114.className = revers_color(tile_114.className); is_game_end(); }
        tile_125.onclick = function() { tile_126.className = revers_color(tile_126.className); tile_124.className = revers_color(tile_124.className); tile_135.className = revers_color(tile_135.className); tile_115.className = revers_color(tile_115.className); is_game_end(); }
        tile_126.onclick = function() { tile_127.className = revers_color(tile_127.className); tile_125.className = revers_color(tile_125.className); tile_136.className = revers_color(tile_136.className); tile_116.className = revers_color(tile_116.className); is_game_end(); }
        tile_127.onclick = function() { tile_128.className = revers_color(tile_128.className); tile_126.className = revers_color(tile_126.className); tile_137.className = revers_color(tile_137.className); tile_117.className = revers_color(tile_117.className); is_game_end(); }
        tile_128.onclick = function() { tile_129.className = revers_color(tile_129.className); tile_127.className = revers_color(tile_127.className); tile_138.className = revers_color(tile_138.className); tile_118.className = revers_color(tile_118.className); is_game_end(); }
        tile_129.onclick = function() { tile_130.className = revers_color(tile_130.className); tile_128.className = revers_color(tile_128.className); tile_139.className = revers_color(tile_139.className); tile_119.className = revers_color(tile_119.className); is_game_end(); }
        tile_130.onclick = function() { tile_129.className = revers_color(tile_129.className); tile_140.className = revers_color(tile_140.className); tile_120.className = revers_color(tile_120.className); is_game_end(); }
        tile_131.onclick = function() { tile_132.className = revers_color(tile_132.className); tile_141.className = revers_color(tile_141.className); tile_121.className = revers_color(tile_121.className); is_game_end(); }
        tile_132.onclick = function() { tile_133.className = revers_color(tile_133.className); tile_131.className = revers_color(tile_131.className); tile_142.className = revers_color(tile_142.className); tile_122.className = revers_color(tile_122.className); is_game_end(); }
        tile_133.onclick = function() { tile_134.className = revers_color(tile_134.className); tile_132.className = revers_color(tile_132.className); tile_143.className = revers_color(tile_143.className); tile_123.className = revers_color(tile_123.className); is_game_end(); }
        tile_134.onclick = function() { tile_135.className = revers_color(tile_135.className); tile_133.className = revers_color(tile_133.className); tile_144.className = revers_color(tile_144.className); tile_124.className = revers_color(tile_124.className); is_game_end(); }
        tile_135.onclick = function() { tile_136.className = revers_color(tile_136.className); tile_134.className = revers_color(tile_134.className); tile_145.className = revers_color(tile_145.className); tile_125.className = revers_color(tile_125.className); is_game_end(); }
        tile_136.onclick = function() { tile_137.className = revers_color(tile_137.className); tile_135.className = revers_color(tile_135.className); tile_146.className = revers_color(tile_146.className); tile_126.className = revers_color(tile_126.className); is_game_end(); }
        tile_137.onclick = function() { tile_138.className = revers_color(tile_138.className); tile_136.className = revers_color(tile_136.className); tile_147.className = revers_color(tile_147.className); tile_127.className = revers_color(tile_127.className); is_game_end(); }
        tile_138.onclick = function() { tile_139.className = revers_color(tile_139.className); tile_137.className = revers_color(tile_137.className); tile_148.className = revers_color(tile_148.className); tile_128.className = revers_color(tile_128.className); is_game_end(); }
        tile_139.onclick = function() { tile_140.className = revers_color(tile_140.className); tile_138.className = revers_color(tile_138.className); tile_149.className = revers_color(tile_149.className); tile_129.className = revers_color(tile_129.className); is_game_end(); }
        tile_140.onclick = function() { tile_139.className = revers_color(tile_139.className); tile_150.className = revers_color(tile_150.className); tile_130.className = revers_color(tile_130.className); is_game_end(); }
        tile_141.onclick = function() { tile_142.className = revers_color(tile_142.className); tile_151.className = revers_color(tile_151.className); tile_131.className = revers_color(tile_131.className); is_game_end(); }
        tile_142.onclick = function() { tile_143.className = revers_color(tile_143.className); tile_141.className = revers_color(tile_141.className); tile_152.className = revers_color(tile_152.className); tile_132.className = revers_color(tile_132.className); is_game_end(); }
        tile_143.onclick = function() { tile_144.className = revers_color(tile_144.className); tile_142.className = revers_color(tile_142.className); tile_153.className = revers_color(tile_153.className); tile_133.className = revers_color(tile_133.className); is_game_end(); }
        tile_144.onclick = function() { tile_145.className = revers_color(tile_145.className); tile_143.className = revers_color(tile_143.className); tile_154.className = revers_color(tile_154.className); tile_134.className = revers_color(tile_134.className); is_game_end(); }
        tile_145.onclick = function() { tile_146.className = revers_color(tile_146.className); tile_144.className = revers_color(tile_144.className); tile_155.className = revers_color(tile_155.className); tile_135.className = revers_color(tile_135.className); is_game_end(); }
        tile_146.onclick = function() { tile_147.className = revers_color(tile_147.className); tile_145.className = revers_color(tile_145.className); tile_156.className = revers_color(tile_156.className); tile_136.className = revers_color(tile_136.className); is_game_end(); }
        tile_147.onclick = function() { tile_148.className = revers_color(tile_148.className); tile_146.className = revers_color(tile_146.className); tile_157.className = revers_color(tile_157.className); tile_137.className = revers_color(tile_137.className); is_game_end(); }
        tile_148.onclick = function() { tile_149.className = revers_color(tile_149.className); tile_147.className = revers_color(tile_147.className); tile_158.className = revers_color(tile_158.className); tile_138.className = revers_color(tile_138.className); is_game_end(); }
        tile_149.onclick = function() { tile_150.className = revers_color(tile_150.className); tile_148.className = revers_color(tile_148.className); tile_159.className = revers_color(tile_159.className); tile_139.className = revers_color(tile_139.className); is_game_end(); }
        tile_150.onclick = function() { tile_149.className = revers_color(tile_149.className); tile_160.className = revers_color(tile_160.className); tile_140.className = revers_color(tile_140.className); is_game_end(); }
        tile_151.onclick = function() { tile_152.className = revers_color(tile_152.className); tile_161.className = revers_color(tile_161.className); tile_141.className = revers_color(tile_141.className); is_game_end(); }
        tile_152.onclick = function() { tile_153.className = revers_color(tile_153.className); tile_151.className = revers_color(tile_151.className); tile_162.className = revers_color(tile_162.className); tile_142.className = revers_color(tile_142.className); is_game_end(); }
        tile_153.onclick = function() { tile_154.className = revers_color(tile_154.className); tile_152.className = revers_color(tile_152.className); tile_163.className = revers_color(tile_163.className); tile_143.className = revers_color(tile_143.className); is_game_end(); }
        tile_154.onclick = function() { tile_155.className = revers_color(tile_155.className); tile_153.className = revers_color(tile_153.className); tile_164.className = revers_color(tile_164.className); tile_144.className = revers_color(tile_144.className); is_game_end(); }
        tile_155.onclick = function() { tile_156.className = revers_color(tile_156.className); tile_154.className = revers_color(tile_154.className); tile_165.className = revers_color(tile_165.className); tile_145.className = revers_color(tile_145.className); is_game_end(); }
        tile_156.onclick = function() { tile_157.className = revers_color(tile_157.className); tile_155.className = revers_color(tile_155.className); tile_166.className = revers_color(tile_166.className); tile_146.className = revers_color(tile_146.className); is_game_end(); }
        tile_157.onclick = function() { tile_158.className = revers_color(tile_158.className); tile_156.className = revers_color(tile_156.className); tile_167.className = revers_color(tile_167.className); tile_147.className = revers_color(tile_147.className); is_game_end(); }
        tile_158.onclick = function() { tile_159.className = revers_color(tile_159.className); tile_157.className = revers_color(tile_157.className); tile_168.className = revers_color(tile_168.className); tile_148.className = revers_color(tile_148.className); is_game_end(); }
        tile_159.onclick = function() { tile_160.className = revers_color(tile_160.className); tile_158.className = revers_color(tile_158.className); tile_169.className = revers_color(tile_169.className); tile_149.className = revers_color(tile_149.className); is_game_end(); }
        tile_160.onclick = function() { tile_159.className = revers_color(tile_159.className); tile_170.className = revers_color(tile_170.className); tile_150.className = revers_color(tile_150.className); is_game_end(); }
        tile_161.onclick = function() { tile_162.className = revers_color(tile_162.className); tile_171.className = revers_color(tile_171.className); tile_151.className = revers_color(tile_151.className); is_game_end(); }
        tile_162.onclick = function() { tile_163.className = revers_color(tile_163.className); tile_161.className = revers_color(tile_161.className); tile_172.className = revers_color(tile_172.className); tile_152.className = revers_color(tile_152.className); is_game_end(); }
        tile_163.onclick = function() { tile_164.className = revers_color(tile_164.className); tile_162.className = revers_color(tile_162.className); tile_173.className = revers_color(tile_173.className); tile_153.className = revers_color(tile_153.className); is_game_end(); }
        tile_164.onclick = function() { tile_165.className = revers_color(tile_165.className); tile_163.className = revers_color(tile_163.className); tile_174.className = revers_color(tile_174.className); tile_154.className = revers_color(tile_154.className); is_game_end(); }
        tile_165.onclick = function() { tile_166.className = revers_color(tile_166.className); tile_164.className = revers_color(tile_164.className); tile_175.className = revers_color(tile_175.className); tile_155.className = revers_color(tile_155.className); is_game_end(); }
        tile_166.onclick = function() { tile_167.className = revers_color(tile_167.className); tile_165.className = revers_color(tile_165.className); tile_176.className = revers_color(tile_176.className); tile_156.className = revers_color(tile_156.className); is_game_end(); }
        tile_167.onclick = function() { tile_168.className = revers_color(tile_168.className); tile_166.className = revers_color(tile_166.className); tile_177.className = revers_color(tile_177.className); tile_157.className = revers_color(tile_157.className); is_game_end(); }
        tile_168.onclick = function() { tile_169.className = revers_color(tile_169.className); tile_167.className = revers_color(tile_167.className); tile_178.className = revers_color(tile_178.className); tile_158.className = revers_color(tile_158.className); is_game_end(); }
        tile_169.onclick = function() { tile_170.className = revers_color(tile_170.className); tile_168.className = revers_color(tile_168.className); tile_179.className = revers_color(tile_179.className); tile_159.className = revers_color(tile_159.className); is_game_end(); }
        tile_170.onclick = function() { tile_169.className = revers_color(tile_169.className); tile_180.className = revers_color(tile_180.className); tile_160.className = revers_color(tile_160.className); is_game_end(); }
        tile_171.onclick = function() { tile_172.className = revers_color(tile_172.className); tile_181.className = revers_color(tile_181.className); tile_161.className = revers_color(tile_161.className); is_game_end(); }
        tile_172.onclick = function() { tile_173.className = revers_color(tile_173.className); tile_171.className = revers_color(tile_171.className); tile_182.className = revers_color(tile_182.className); tile_162.className = revers_color(tile_162.className); is_game_end(); }
        tile_173.onclick = function() { tile_174.className = revers_color(tile_174.className); tile_172.className = revers_color(tile_172.className); tile_183.className = revers_color(tile_183.className); tile_163.className = revers_color(tile_163.className); is_game_end(); }
        tile_174.onclick = function() { tile_175.className = revers_color(tile_175.className); tile_173.className = revers_color(tile_173.className); tile_184.className = revers_color(tile_184.className); tile_164.className = revers_color(tile_164.className); is_game_end(); }
        tile_175.onclick = function() { tile_176.className = revers_color(tile_176.className); tile_174.className = revers_color(tile_174.className); tile_185.className = revers_color(tile_185.className); tile_165.className = revers_color(tile_165.className); is_game_end(); }
        tile_176.onclick = function() { tile_177.className = revers_color(tile_177.className); tile_175.className = revers_color(tile_175.className); tile_186.className = revers_color(tile_186.className); tile_166.className = revers_color(tile_166.className); is_game_end(); }
        tile_177.onclick = function() { tile_178.className = revers_color(tile_178.className); tile_176.className = revers_color(tile_176.className); tile_187.className = revers_color(tile_187.className); tile_167.className = revers_color(tile_167.className); is_game_end(); }
        tile_178.onclick = function() { tile_179.className = revers_color(tile_179.className); tile_177.className = revers_color(tile_177.className); tile_188.className = revers_color(tile_188.className); tile_168.className = revers_color(tile_168.className); is_game_end(); }
        tile_179.onclick = function() { tile_180.className = revers_color(tile_180.className); tile_178.className = revers_color(tile_178.className); tile_189.className = revers_color(tile_189.className); tile_169.className = revers_color(tile_169.className); is_game_end(); }
        tile_180.onclick = function() { tile_179.className = revers_color(tile_179.className); tile_190.className = revers_color(tile_190.className); tile_170.className = revers_color(tile_170.className); is_game_end(); }
        tile_181.onclick = function() { tile_182.className = revers_color(tile_182.className); tile_191.className = revers_color(tile_191.className); tile_171.className = revers_color(tile_171.className); is_game_end(); }
        tile_182.onclick = function() { tile_183.className = revers_color(tile_183.className); tile_181.className = revers_color(tile_181.className); tile_192.className = revers_color(tile_192.className); tile_172.className = revers_color(tile_172.className); is_game_end(); }
        tile_183.onclick = function() { tile_184.className = revers_color(tile_184.className); tile_182.className = revers_color(tile_182.className); tile_193.className = revers_color(tile_193.className); tile_173.className = revers_color(tile_173.className); is_game_end(); }
        tile_184.onclick = function() { tile_185.className = revers_color(tile_185.className); tile_183.className = revers_color(tile_183.className); tile_194.className = revers_color(tile_194.className); tile_174.className = revers_color(tile_174.className); is_game_end(); }
        tile_185.onclick = function() { tile_186.className = revers_color(tile_186.className); tile_184.className = revers_color(tile_184.className); tile_195.className = revers_color(tile_195.className); tile_175.className = revers_color(tile_175.className); is_game_end(); }
        tile_186.onclick = function() { tile_187.className = revers_color(tile_187.className); tile_185.className = revers_color(tile_185.className); tile_196.className = revers_color(tile_196.className); tile_176.className = revers_color(tile_176.className); is_game_end(); }
        tile_187.onclick = function() { tile_188.className = revers_color(tile_188.className); tile_186.className = revers_color(tile_186.className); tile_197.className = revers_color(tile_197.className); tile_177.className = revers_color(tile_177.className); is_game_end(); }
        tile_188.onclick = function() { tile_189.className = revers_color(tile_189.className); tile_187.className = revers_color(tile_187.className); tile_198.className = revers_color(tile_198.className); tile_178.className = revers_color(tile_178.className); is_game_end(); }
        tile_189.onclick = function() { tile_190.className = revers_color(tile_190.className); tile_188.className = revers_color(tile_188.className); tile_199.className = revers_color(tile_199.className); tile_179.className = revers_color(tile_179.className); is_game_end(); }
        tile_190.onclick = function() { tile_189.className = revers_color(tile_189.className); tile_200.className = revers_color(tile_200.className); tile_180.className = revers_color(tile_180.className); is_game_end(); }
        tile_191.onclick = function() { tile_192.className = revers_color(tile_192.className); tile_181.className = revers_color(tile_181.className); is_game_end(); }
        tile_192.onclick = function() { tile_193.className = revers_color(tile_193.className); tile_191.className = revers_color(tile_191.className); tile_182.className = revers_color(tile_182.className); is_game_end(); }
        tile_193.onclick = function() { tile_194.className = revers_color(tile_194.className); tile_192.className = revers_color(tile_192.className); tile_183.className = revers_color(tile_183.className); is_game_end(); }
        tile_194.onclick = function() { tile_195.className = revers_color(tile_195.className); tile_193.className = revers_color(tile_193.className); tile_184.className = revers_color(tile_184.className); is_game_end(); }
        tile_195.onclick = function() { tile_196.className = revers_color(tile_196.className); tile_194.className = revers_color(tile_194.className); tile_185.className = revers_color(tile_185.className); is_game_end(); }
        tile_196.onclick = function() { tile_197.className = revers_color(tile_197.className); tile_195.className = revers_color(tile_195.className); tile_186.className = revers_color(tile_186.className); is_game_end(); }
        tile_197.onclick = function() { tile_198.className = revers_color(tile_198.className); tile_196.className = revers_color(tile_196.className); tile_187.className = revers_color(tile_187.className); is_game_end(); }
        tile_198.onclick = function() { tile_199.className = revers_color(tile_199.className); tile_197.className = revers_color(tile_197.className); tile_188.className = revers_color(tile_188.className); is_game_end(); }
        tile_199.onclick = function() { tile_200.className = revers_color(tile_200.className); tile_198.className = revers_color(tile_198.className); tile_189.className = revers_color(tile_189.className); is_game_end(); }
        tile_200.onclick = function() { tile_199.className = revers_color(tile_199.className); tile_190.className = revers_color(tile_190.className); is_game_end(); }
      }
    </script>

    <style media="screen">
      @import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);
      @import url(//fonts.googleapis.com/css?family=Stalinist+One);
      html {
       font-family: 'Nanum Gothic', sans-serif;
      }
      body {
        margin: 0;
        background: #4F4F4F;
        margin-bottom: 1rem;
      }
      .center {
        text-align: center;
      }
      div {
        display: inline-block;
      }
      div.display {
        display: block;
        line-height: 0;
        margin-top: 0;
      }
      div.black_tile {
        width: 5%;
        height: 64.2px;
        background: black;
      }
      div.white_tile {
        width: 5%;
        height: 64.2px;
        background: white;
      }
      h1.title {
        margin: 1rem;
        font-family: 'Stalinist One', cursive;
        font-size: 5rem;
        text-align: center;
        text-shadow: -1px 0 #F2F1F6, 0 1px #F2F1F6, 1px 0 #F2F1F6, 0 -1px #F2F1F6;
      }
      a {
        color: black;
        padding: 0.6rem;
        border-radius: 1rem;
        text-decoration: none;
        font-size: 2rem;
        background: lightgrey;
      }
      a.link {
        color: skyblue;
        padding: 0;
        border-radius: 0;
        text-decoration: underline;
        background-color: inherit;
      }
      .hide {
        display: none;
      }
      .vis {
        display: block;
      }
      #info {
        text-align: center;
        border-left: 2rem solid red;
        background-color: lightgrey;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        color: black;
        margin-top: 0.9rem;
        margin-left: 2rem;
        margin-right: 2rem;
      }
      footer {
        color: #DCDCDC;
        border-top: 2px solid #DCDCDC;
        margin-top: 4rem;
        margin-left: 3rem;
        margin-right: 3rem;
        padding-top: 0.5rem;
        display: inherit;
      }
    </style>
  </head>
  <body onload="onload_();">
    <div class="display" id="display">
      <script>
          for (var i = 1; i <= 200; i++) {
            if (random_()) {
              class_ = "white_tile";
            } else {
              class_ = "black_tile";
            }
            document.write('<div class=\"'+class_+'\"id=\"'+i+'tile\"></div>');
          }
          //타일들을 표시한다.
      </script>
    </div>
    <div class="center">
      <a href="../nintendo">뒤로가기</a>
    </div>
  </body>
</html>
