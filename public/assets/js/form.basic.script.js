$(document).ready(function(){
    $('#picker2, #picker3, #date_of_birth, #art_start_date, #tca, #from_date').pickadate({
        format: 'dddd, dd mmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        hiddenName: true
    });
});
