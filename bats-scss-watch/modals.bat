SET ch_name=%~n0
scss --style expanded --sourcemap=none --watch ../scss/%ch_name%.scss:../css/%ch_name%.css
