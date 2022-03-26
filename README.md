# Truck configurator hexagonal
POC for an hexagonal architecture on Symfony

## Main purpose

This app must allow to configure a Truck.

The truck is composed with part.
Each part have some links and requirement with each other.

A part is a frame, an engine, a gearbox and / or a cab

## What should be possible

1. :construction: Have a list of all available part for a specific brand
2. :x: Have a list of all saved truck configurations
3. :x: Know which one part is compatible with
4. :construction: Know if the configuration is valid = All part must be linked and satisfy requirements with all others.
5. :x: Save the configuration on file or in external source

<hr>

- [Business rules](doc/BUSINESS_RULES.md)
