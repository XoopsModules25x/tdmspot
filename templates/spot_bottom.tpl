<{foreach item=tpblock from=$page.tpblock}>
        <!-- Start center bottom blocks loop -->

        <table cellspacing="0">
        <!-- Start center bottom -->
        <{if $tpblock.side == "spot_bottomcenter"}>
        <tr colspan="2">
        <td colspan="2">
        <div class="xo-blockszone">
        <div class="xo-block">
        <{if $tpblock.title}>
         <div class="xo-blocktitle"><{$tpblock.title}></div>
        <{/if}>
        <div class="xo-blockcontent"><{$tpblock.content}></div>
        </div></div>
        </td>
        </tr>
        <{/if}>
        <tr>
        <!-- Start bottom left -->
        <{if $tpblock.side == "spot_bottomleft"}>
        <td width="50%">
        <div class="xo-blockszone">
        <div class="xo-block">
        <{if $tpblock.title}>
        <div class="xo-blocktitle"><{$tpblock.title}></div>
        <{/if}>
        <div class="xo-blockcontent"><{$tpblock.content}></div>
        </div></div>
        </td>
        <{else}>
        <td width="50%"></td>
        <{/if}>
        <!-- Start bottom right -->
        <{if $tpblock.side == "spot_bottomright"}>
        <td width="50%">
        <div class="xo-blockszone">
        <div class="xo-block">
        <{if $tpblock.title}>
        <div class="xo-blocktitle"><{$tpblock.title}></div>
        <{/if}>
        <div class="xo-blockcontent"><{$tpblock.content}></div>
        </div></div>
        </td>
        <{else}>
        <td width="50%"></td>
        <{/if}>
        </tr>
        </table>
        <!-- End center bottom blocks loop -->
<{/foreach}>

