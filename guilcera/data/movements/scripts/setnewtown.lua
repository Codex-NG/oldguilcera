function onStepIn(cid, item, topos, frompos)
    if item.actionid == 10001 then
        doPlayerSendTextMessage(cid, 22, "You are now citizen of Peonsville.")
        doPlayerSetTown(cid, 1)
        return TRUE
    end

    if item.actionid == 10002 then
        doPlayerSendTextMessage(cid, 22, "You are now citizen of Taumel.")
        doPlayerSetTown(cid, 2)
        return TRUE
    end

    if item.actionid == 10003 then
        doPlayerSendTextMessage(cid, 22, "You are now citizen of Dodoma.")
        doPlayerSetTown(cid, 3)
        return TRUE
    end

    if item.actionid == 10005 then
        doPlayerSendTextMessage(cid, 22, "You are now citizen of Xanadu.")
        doPlayerSetTown(cid, 5)
        return TRUE
    end

    if item.actionid == 10007 then
        doPlayerSendTextMessage(cid, 22, "You are now citizen of Caralin.")
        doPlayerSetTown(cid, 7)
        return TRUE
    end

    if item.actionid == 10008 then
        doPlayerSendTextMessage(cid, 22, "You are now citizen of Turim.")
        doPlayerSetTown(cid, 8)
        return TRUE
    end


end