let SessionLoad = 1
let s:so_save = &g:so | let s:siso_save = &g:siso | setg so=0 siso=0 | setl so=-1 siso=-1
let v:this_session=expand("<sfile>:p")
silent only
silent tabonly
cd ~
if expand('%') == '' && !&modified && line('$') <= 1 && getline(1) == ''
  let s:wipebuf = bufnr('%')
endif
let s:shortmess_save = &shortmess
if &shortmess =~ 'A'
  set shortmess=aoOA
else
  set shortmess=aoO
endif
badd +86 projects/mimpimeback/app/Http/Controllers/ProductController.php
badd +81 projects/mimpimeback/app/Policies/ProductPolicy.php
badd +1 projects/mimpimeback/app/Http/Controllers/Controller.php
badd +20 projects/mimpimeback/routes/api.php
badd +1 projects/mipimefront/src/Pages/Ventas.jsx
badd +19 health://
badd +127 .xdg/local/state/nvim/lsp.log
badd +0 term://~/projects/mimpimeback//65367:/usr/bin/zsh
badd +0 term://~/projects/mipimefront//65581:/usr/bin/zsh
argglobal
%argdel
set stal=2
tabnew +setlocal\ bufhidden=wipe
tabrewind
edit projects/mimpimeback/app/Http/Controllers/ProductController.php
let s:save_splitbelow = &splitbelow
let s:save_splitright = &splitright
set splitbelow splitright
wincmd _ | wincmd |
vsplit
1wincmd h
wincmd w
let &splitbelow = s:save_splitbelow
let &splitright = s:save_splitright
wincmd t
let s:save_winminheight = &winminheight
let s:save_winminwidth = &winminwidth
set winminheight=0
set winheight=1
set winminwidth=0
set winwidth=1
exe 'vert 1resize ' . ((&columns * 100 + 64) / 129)
exe 'vert 2resize ' . ((&columns * 28 + 64) / 129)
tcd ~/projects/mimpimeback
argglobal
setlocal foldmethod=expr
setlocal foldexpr=v:lua.vim.treesitter.foldexpr()
setlocal foldmarker={{{,}}}
setlocal foldignore=#
setlocal foldlevel=99
setlocal foldminlines=1
setlocal foldnestmax=20
setlocal foldenable
14
normal! zo
68
normal! zo
let s:l = 86 - ((24 * winheight(0) + 16) / 32)
if s:l < 1 | let s:l = 1 | endif
keepjumps exe s:l
normal! zt
keepjumps 86
normal! 0
wincmd w
argglobal
if bufexists(fnamemodify("term://~/projects/mimpimeback//65367:/usr/bin/zsh", ":p")) | buffer term://~/projects/mimpimeback//65367:/usr/bin/zsh | else | edit term://~/projects/mimpimeback//65367:/usr/bin/zsh | endif
if &buftype ==# 'terminal'
  silent file term://~/projects/mimpimeback//65367:/usr/bin/zsh
endif
balt ~/projects/mimpimeback/app/Http/Controllers/ProductController.php
setlocal foldmethod=expr
setlocal foldexpr=v:lua.vim.treesitter.foldexpr()
setlocal foldmarker={{{,}}}
setlocal foldignore=#
setlocal foldlevel=99
setlocal foldminlines=1
setlocal foldnestmax=20
setlocal foldenable
let s:l = 3 - ((2 * winheight(0) + 16) / 32)
if s:l < 1 | let s:l = 1 | endif
keepjumps exe s:l
normal! zt
keepjumps 3
normal! 03|
wincmd w
exe 'vert 1resize ' . ((&columns * 100 + 64) / 129)
exe 'vert 2resize ' . ((&columns * 28 + 64) / 129)
tabnext
edit ~/projects/mipimefront/src/Pages/Ventas.jsx
let s:save_splitbelow = &splitbelow
let s:save_splitright = &splitright
set splitbelow splitright
wincmd _ | wincmd |
vsplit
1wincmd h
wincmd w
let &splitbelow = s:save_splitbelow
let &splitright = s:save_splitright
wincmd t
let s:save_winminheight = &winminheight
let s:save_winminwidth = &winminwidth
set winminheight=0
set winheight=1
set winminwidth=0
set winwidth=1
exe 'vert 1resize ' . ((&columns * 100 + 64) / 129)
exe 'vert 2resize ' . ((&columns * 28 + 64) / 129)
tcd ~/projects/mipimefront
argglobal
setlocal foldmethod=expr
setlocal foldexpr=v:lua.vim.treesitter.foldexpr()
setlocal foldmarker={{{,}}}
setlocal foldignore=#
setlocal foldlevel=99
setlocal foldminlines=1
setlocal foldnestmax=20
setlocal foldenable
21
normal! zo
let s:l = 1 - ((0 * winheight(0) + 16) / 32)
if s:l < 1 | let s:l = 1 | endif
keepjumps exe s:l
normal! zt
keepjumps 1
normal! 0
wincmd w
argglobal
if bufexists(fnamemodify("term://~/projects/mipimefront//65581:/usr/bin/zsh", ":p")) | buffer term://~/projects/mipimefront//65581:/usr/bin/zsh | else | edit term://~/projects/mipimefront//65581:/usr/bin/zsh | endif
if &buftype ==# 'terminal'
  silent file term://~/projects/mipimefront//65581:/usr/bin/zsh
endif
balt ~/projects/mipimefront/src/Pages/Ventas.jsx
setlocal foldmethod=expr
setlocal foldexpr=v:lua.vim.treesitter.foldexpr()
setlocal foldmarker={{{,}}}
setlocal foldignore=#
setlocal foldlevel=99
setlocal foldminlines=1
setlocal foldnestmax=20
setlocal foldenable
let s:l = 4 - ((3 * winheight(0) + 16) / 32)
if s:l < 1 | let s:l = 1 | endif
keepjumps exe s:l
normal! zt
keepjumps 4
normal! 03|
wincmd w
exe 'vert 1resize ' . ((&columns * 100 + 64) / 129)
exe 'vert 2resize ' . ((&columns * 28 + 64) / 129)
tabnext 1
set stal=1
if exists('s:wipebuf') && len(win_findbuf(s:wipebuf)) == 0 && getbufvar(s:wipebuf, '&buftype') isnot# 'terminal'
  silent exe 'bwipe ' . s:wipebuf
endif
unlet! s:wipebuf
set winheight=1 winwidth=20
let &shortmess = s:shortmess_save
let &winminheight = s:save_winminheight
let &winminwidth = s:save_winminwidth
let s:sx = expand("<sfile>:p:r")."x.vim"
if filereadable(s:sx)
  exe "source " . fnameescape(s:sx)
endif
let &g:so = s:so_save | let &g:siso = s:siso_save
doautoall SessionLoadPost
unlet SessionLoad
" vim: set ft=vim :
