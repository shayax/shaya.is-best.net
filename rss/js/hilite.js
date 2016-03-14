//<![CDATA[
window.onload = function () {
        $(function () {
            var highlight = function () {
                // Read keyword
                var keyword = $("input[name='keyword']").val();
                // Determine selected options
                var options = {};
                $("input[name='opt[]']").each(function () {
                    options[$(this).val()] = $(this).is(":checked");
                });
                // Highlight the keyword inside the context
                $(".context").jmRemoveHighlight();
                $(".context").jmHighlight(keyword, options);
            };
            $("input[name='keyword']").on("keyup", highlight);
            $("input[type='checkbox']").on("change", highlight);
        });
} //]]>