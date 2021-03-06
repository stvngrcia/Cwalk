<?
$page_title = 'My Address Is Like My Shoes; It Travels With Me';
$html_title = $page_title . ' | cwalk';
$instructions = 'What is the ouput ?';
$html_description = "$page_title: $instructions";
require_once('header.php');
?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>
<div class="console">$ cat main.c
#include &#60;stdio.h&#62;

int main(void)
{
    unsigned long a[3];
	
    printf("%p\n", &a[0]);
    printf("%p\n", &a[1]);
    return (0);
}

$ gcc main.c
$ ./a.out
0x7ffee3508bf0
<input type="text" id="input_0" class="input-large"/>
$
</div>


<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
