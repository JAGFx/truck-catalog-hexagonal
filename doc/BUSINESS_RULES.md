[Home](../README.md)

# Business rules

## Brand

- A brand has its own parts list.
- Each brand does not share part with another brand

## Parts

- Each part have technicals specifications properties
- These technicals specifications properties will be used to verify the compatibility with all others

As mentioned, a part may be a frame, an engine, a gearbox or a cab.

### Frame

- The frame is composed to the frame itself and a configuration of axles
- Each axle can be `motorized`, `directional` or `simple`
- An axle can be `liftable`  or not
- The frame has least `2` axles and less or equal `4` axles
- The frame has least `1` axel motorized and `1` axle directional
- The frame can be made for a `tractor` or for a `straight`

### Engine

- An engine can provide its own horsepower and torque

### Gearbox

- A gearbox provide the maximum torque supported
- The gearbox can be `automatic` or `manual`
- A manual gearbox has gear between `6` speed and `12` speed
- A manual gearbox __can't__ be built with crawler
- An automatic gearbox __can__ be built with crawler
- The crawler count is equal to `2`

### Cab

- A cab has `3` length size from `L1` to `L3`
- A cab has `3` height size from `H1` to `H3`

## Configuration

The result of configuration is a truck.
This is an aggregate of parts

- A truck must have parts from once brand.
- A truck must have one frame, one engine, one gearbox and one cab.

## Part compatibilities

- The engine torque must be less or equal than the gearbox torque eligibility.

### Trim level

There are 3 trim levels:

- Low cost
- Standard
- Premium

Each trim level has a list of requirements with availability of parts, and therefore the truck result.

**Low cost**

<table>
    <tr>
        <th>Part</th>
        <th>Requirements</th>
    </tr>
    <tr>
        <td>Cab</td>
        <td>
            <ul>
                <li>Only height <code>H1</code> has available</li>
                <li>All length available</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Engine</td>
        <td>
            <ul>
                <li>Only engine with less or equal <code>550</code> horse power are available</li>
                <li>Only engine with less or equal <code>3000</code>N</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Frame</td>
        <td>
            <ul>
                <li>Only <code>2</code> axles: One <code>directional</code> and one <code>motorized</code></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Gearbox</td>
        <td>
            <ul>
                <li>Only <code>manual</code> gearbox has available</li>
                <li>Only <code>6</code> gears has available</li>
                <li>No crawler available</li>
            </ul>
        </td>
    </tr>
</table>

**Standard**

<table>
    <tr>
        <th>Part</th>
        <th>Requirements</th>
    </tr>
    <tr>
        <td>Cab</td>
        <td>
            <ul>
                <li>All height are available</li>
                <li>All length are available</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Engine</td>
        <td>
            <ul>
                <li>Only engine with horse power between <code>550</code> and <code>650</code> are available</li>
                <li>Only engine with torque between <code>3000</code>N and <code>3250</code>N are available</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Frame</td>
        <td>
            <ul>
                <li>Up to 3 axles</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Gearbox</td>
        <td>
            <ul>
                <li><code>Manual</code> or <code>automatic</code> gearbox available</li>
                <li>Up to <code>12</code> gears</li>
                <li>No crawler available</li>
            </ul>
        </td>
    </tr>
</table>

**Premium**

<table>
    <tr>
        <th>Part</th>
        <th>Requirements</th>
    </tr>
    <tr>
        <td>Cab</td>
        <td>
            <ul>
                <li>All height are available</li>
                <li>All length are available</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Engine</td>
        <td>
            <ul>
                <li>Only engine with horse power greater or equal than <code>650</code> are available</li>
                <li>Only engine with torque greater or equal than <code>3250</code>N are available</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Frame</td>
        <td>
            <ul>
                <li>No limitation</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>Gearbox</td>
        <td>
            <ul>
                <li>Only <code>automatic</code> gearbox is available</li>
                <li>Only <code>12</code> gears is availalbe</li>
                <li>Only with crawler</li>
            </ul>
        </td>
    </tr>
</table>