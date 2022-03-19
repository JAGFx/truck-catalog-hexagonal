# Truck configurator hexagonal
POC for an hexagonal architecture on Symfony

## Main purpose

This app must allow to configure a Truck.

The truck is composed with part.
Each part have some links and requirement with each other.

A part is a frame, an engine, a gearbox and / or a cab

## What should be possible

1. Have a list of all available part for a specific brand
2. Have a list of all saved truck configurations
3. Know which one part is compatible with
4. Know if the configuration is valid = All part must be linked and satisfy requirements with all others.
5. Save the configuration on file or in external source

## Business rules

### Brand

- A brand has its own parts list.
- Each brand does not share part with another brand

### Parts

- Each part have technicals specifications properties
- These technicals specifications properties will be used to verify the compatibility with all others

As mentioned, a part may be a frame, an engine, a gearbox or a cab.

#### Frame

- The frame is composed to the frame itself and a configuration of axles
- Each axle can be `motorized`, `directional` or `simple`
- An axle can be `liftable`  or not
- The frame has least `2` axles and less or equal `4` axles
- The frame has least `1` axel motorized and `1` axle directional
- The frame can be made for a `tractor` or for a `straight`

#### Engine

- An engine can provide its own horsepower and torque

#### Gearbox

- A gearbox provide the maximum torque supported
- The gearbox can be `automatic` or `manual`
- A manual gearbox has gear between `6` speed and `12` speed
- A manual gearbox __can't__ be built with crawler
- An automatic gearbox has `12` speed
- An automatic gearbox __can__ be built with crawler
- The crawler count is equal to `2`

#### Cab

- A cab has `3` length size from `L1` to `L3`
- A cab has `3` height size from `H1` to `H3`

### Configuration