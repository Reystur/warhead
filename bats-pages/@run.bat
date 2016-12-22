break>%out-file%
(for %%a in (%in-files%) do (
   slimrb -p ../slim/%%a.slim >> %out-file%
))
