<table class="outer">
    <{foreachq item=blocks from=$block}>
    <tr class="<{cycle values="even,odd"}>">
    <td><a href="<{$blocks.link}>"><{$blocks.title}></a> (<{$smarty.const._MB_TDMSPOT_POSTEDBY}> <{$blocks.indate}>)</td>
    </tr>
    <{/foreach}>
</table>
