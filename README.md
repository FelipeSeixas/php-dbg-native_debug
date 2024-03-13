# php-dbg-native_debug
Inspection software with PHPDBG, a PHP native debuger.

- Code result in teminal:

```bash
prompt> break 7
[Breakpoint #0 added at C:\xampp\htdocs\LivroPHP\index_phpdbg_v1.php:7]
prompt> run
[Breakpoint #0 at C:\xampp\htdocs\LivroPHP\index_phpdbg_v1.php:7, hits: 1]
>00007:     $totalPrice = $price * $tax_rate;
 00008:
 00009: }
prompt> watch $totalPrice
[Added watchpoint #0 for $totalPrice]
prompt> break del 0
[Deleted breakpoint #0]
prompt> continue
[Breaking on watchpoint $totalPrice]
Old value: 0
New value: 6.426
>00006: foreach ($prices as $price) {
 00007:     $totalPrice = $price * $tax_rate;
 00008:
prompt> continue
[Breaking on watchpoint $totalPrice]
Old value: 6.426
New value: 3.24
>00006: foreach ($prices as $price) {
 00007:     $totalPrice = $price * $tax_rate;
 00008:
prompt> continue
[Breaking on watchpoint $totalPrice]
Old value: 3.24
New value: 13.5
>00006: foreach ($prices as $price) {
 00007:     $totalPrice = $price * $tax_rate;
 00008:
prompt> continue
[$totalPrice has been removed, removing watchpoint]
[Script ended normally]
prompt> quit
