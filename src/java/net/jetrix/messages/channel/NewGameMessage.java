/**
 * Jetrix TetriNET Server
 * Copyright (C) 2001-2003  Emmanuel Bourg
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

package net.jetrix.messages.channel;

import net.jetrix.config.*;

/**
 * A new game message.
 *
 * @author Emmanuel Bourg
 * @version $Revision$, $Date$
 */
public class NewGameMessage extends ChannelMessage
{
    private Settings settings;
    private int seed;

    public NewGameMessage() { }

    public NewGameMessage(Settings settings)
    {
        this(0, settings);
    }

    public NewGameMessage(int slot, Settings settings)
    {
        setSlot(slot);
        setSettings(settings);
    }

    public Settings getSettings()
    {
        return settings;
    }

    public void setSettings(Settings settings)
    {
        this.settings = settings;
    }

    /**
     * Return the seed for the client's random number generator.
     */
    public int getSeed()
    {
        return seed;
    }

    public void setSeed(int seed)
    {
        this.seed = seed;
    }

}
