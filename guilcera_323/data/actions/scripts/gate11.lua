-- by GriZzm0

function onUse(cid, item, frompos, item2, topos)
gatepos = {x=722, y=65, z=12, stackpos=1}
getgate = getThingfromPos(gatepos)

if item.uid == 5025 and item.itemid == 1945 and getgate.itemid == 1355 then
 doRemoveItem(getgate.uid,1)
 doTransformItem(item.uid,item.itemid+1)
elseif item.uid == 5025 and item.itemid == 1946 and getgate.itemid == 0 then
 doCreateItem(1355,1,gatepos)
 doTransformItem(item.uid,item.itemid-1)
else
 doPlayerSendCancel(cid,"Sorry, not possible.")
end
return 1
end