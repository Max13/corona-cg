$(function() {
    // Equalize prevention blocks
    let $doPreventions = $('.single-prevention.do-prevention'),
        $dontPreventions = $('.single-prevention.dont-prevention');

    for (let i = 0, z = $doPreventions.length; i < z; ++i) {
        let maxHeight = Math.max(
            $doPreventions.eq(i).outerHeight(),
            $dontPreventions.eq(i).outerHeight()
        );

        $doPreventions.eq(i).outerHeight(maxHeight);
        $dontPreventions.eq(i).outerHeight(maxHeight);
    }
});
