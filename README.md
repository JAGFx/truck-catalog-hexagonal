# Truck configurator hexagonal
POC for hexagonal architecture on Symfony

## Main purpose

This app must allow to configure a Truck.

The truck is composed with part.
Each part have some links and requirement with each other.

A part is a frame, an engine, a gearbox and / or a cab

## What should be possible

1. Have a list of all available part for a specific brand
2. Know which one the part is compatible with
3. Know if the configuration is valid = All part must be linked and satisfy requirements with all others.
4. Save the configuration on file or in external source