ace.define("ace/theme/laraedit",["require","exports","module","ace/lib/dom"], function(require, exports, module) {

exports.isDark = true;
exports.cssClass = "ace-laraedit";
exports.cssText = ".ace-laraedit .ace_gutter {\
background: #34495E;\
color: #FFFFFF\
}\
.ace-laraedit .ace_print-margin {\
width: 1px;\
background: #555651\
}\
.ace-laraedit {\
background-color: #272822;\
color: #F8F8F2\
}\
.ace-laraedit .ace_cursor {\
color: #F8F8F0\
}\
.ace-laraedit .ace_marker-layer .ace_selection {\
background: #49483E\
}\
.ace-laraedit.ace_multiselect .ace_selection.ace_start {\
box-shadow: 0 0 3px 0px #272822;\
border-radius: 2px\
}\
.ace-laraedit .ace_marker-layer .ace_step {\
background: rgb(102, 82, 0)\
}\
.ace-laraedit .ace_marker-layer .ace_bracket {\
margin: -1px 0 0 -1px;\
border: 1px solid #49483E\
}\
.ace-laraedit .ace_marker-layer .ace_active-line {\
background: #202020\
}\
.ace-laraedit .ace_gutter-active-line {\
background-color: #272727\
}\
.ace-laraedit .ace_marker-layer .ace_selected-word {\
border: 1px solid #49483E\
}\
.ace-laraedit .ace_invisible {\
color: #52524d\
}\
.ace-laraedit .ace_entity.ace_name.ace_tag,\
.ace-laraedit .ace_keyword,\
.ace-laraedit .ace_meta.ace_tag,\
.ace-laraedit .ace_storage {\
color: #F92672\
}\
.ace-laraedit .ace_punctuation,\
.ace-laraedit .ace_punctuation.ace_tag {\
color: #fff\
}\
.ace-laraedit .ace_constant.ace_character,\
.ace-laraedit .ace_constant.ace_language,\
.ace-laraedit .ace_constant.ace_numeric,\
.ace-laraedit .ace_constant.ace_other {\
color: #AE81FF\
}\
.ace-laraedit .ace_invalid {\
color: #F8F8F0;\
background-color: #F92672\
}\
.ace-laraedit .ace_invalid.ace_deprecated {\
color: #F8F8F0;\
background-color: #AE81FF\
}\
.ace-laraedit .ace_support.ace_constant,\
.ace-laraedit .ace_support.ace_function {\
color: #66D9EF\
}\
.ace-laraedit .ace_fold {\
background-color: #A6E22E;\
border-color: #F8F8F2\
}\
.ace-laraedit .ace_storage.ace_type,\
.ace-laraedit .ace_support.ace_class,\
.ace-laraedit .ace_support.ace_type {\
font-style: italic;\
color: #66D9EF\
}\
.ace-laraedit .ace_entity.ace_name.ace_function,\
.ace-laraedit .ace_entity.ace_other,\
.ace-laraedit .ace_entity.ace_other.ace_attribute-name,\
.ace-laraedit .ace_variable {\
color: #A6E22E\
}\
.ace-laraedit .ace_variable.ace_parameter {\
font-style: italic;\
color: #FD971F\
}\
.ace-laraedit .ace_string {\
color: #E6DB74\
}\
.ace-laraedit .ace_comment {\
color: #75715E\
}\
.ace-laraedit .ace_indent-guide {\
background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAEklEQVQImWPQ0FD0ZXBzd/wPAAjVAoxeSgNeAAAAAElFTkSuQmCC) right repeat-y\
}";

var dom = require("../lib/dom");
dom.importCssString(exports.cssText, exports.cssClass);
});
